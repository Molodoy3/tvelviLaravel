<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import { ref } from 'vue';
import DefaultLayout from "../../Layouts/DefaultLayout.vue";

const props = defineProps({
    'reviews': Object,
    'errors': Object
})

const newReview = useForm({
    "name": "",
    "email": "",
    "message": "",
})

const reviews = ref(props.reviews);

const metaElements = document.querySelectorAll('meta[name="csrf-token"]');
const csrf = metaElements.length > 0 ? metaElements[0].content : "";
async function loadMore(){
    const response = await fetch(route('reviewsLoadMore'), {
        method: 'POST', // Указываем метод запроса
        headers: {
            'Content-Type': 'application/json', // Укажите нужный заголовок (в зависимости от вашего сервера)
        },
        body: JSON.stringify({
            page: reviews.value.current_page + 1,
            _token: csrf
        }) // Тело запроса, если нужно что-то передать
    });

    // Обработка ответа
    if (response.ok) {
        const newItems = await response.json();
        reviews.value.data = [...reviews.value.data, ...newItems.data];
        reviews.value.current_page += 1; // Увеличиваем текущую страницу
    } else {
        console.error('Ошибка загрузки отзывов:', response.status);
    }
}

function submit() {
    newReview.post(route('reviews.store'), {
        preserveState: true,
        preserveScroll: true,
        onSuccess: () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Плавная прокрутка (по желанию)
            });
            reviews.value.data = [newReview, ...reviews.value.data];
            //location.reload();


            //console.log(response)
            //newReview.reset();
        },
    });
}

</script>

<template>
    <Head>
        <title>Отзывы</title>
        <meta name="description" content="Отзывы наших клиентов">
    </Head>
    <DefaultLayout>
        <section id="reviews" class="reviews reviews_main">
            <div class='reviews__container'>
                <h1 class="reviews__title title-red">
                    <mark>Отзывы</mark>
                    наших <br> клиентов
                </h1>
                <div class="reviews__items" :class="{'reviews__items_more': reviews.last_page > reviews.current_page}">
                    <div v-for="review in reviews.data" class="reviews__item">
                        <div class="reviews__quotes ic-quotes"></div>
                        <div class="reviews__stars">
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                        </div>
                        <h6 class="reviews__name">{{review.name}}</h6>
                        <div class="reviews__text">{{review.message}}</div>
                    </div>
                </div>
                <div class="reviews__bottom">
                    <button
                        v-if="reviews.last_page > reviews.current_page"
                        type="button" @click="loadMore()" href="" class="reviews__button-more button-more">Читать дальше</button>
                </div>
            </div>
        </section>
        <section class="reviews-form">
            <div class='reviews-form__container'>
                <h2 class="portfolio-form__title title">
                    <mark>Оставьте отзыв</mark>
                </h2>
                <form @submit.prevent="submit" action="#" class="reviews-form__form reviews__form form-reviews form-reviews_white">
                    <div class="form-reviews__col">
                        <div class="form-reviews__inputs">
                            <input v-model="newReview.name" :class="{ 'error': props.errors.name }" type="text" name="name" placeholder="Имя" class="form-reviews__input">
                            <input v-model="newReview.email" :class="{ 'error': props.errors.email }" type="email" name="email" placeholder="E-mail" class="form-reviews__input">
                        </div>
                        <button type="submit" name="submit" class="reviews__button button">отправить</button>
                    </div>
                    <div class="form-reviews__col">
                        <textarea v-model="newReview.message" :class="{ 'error': props.errors.message }" name="text" placeholder="Текст сообщения" class="form-reviews__textarea"></textarea>
                        <button type="submit" name="submit"
                                :disabled="newReview.processing"
                                :class="{ 'processing': newReview.processing }"
                                class="reviews__button reviews__button_mobile button">отправить
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
