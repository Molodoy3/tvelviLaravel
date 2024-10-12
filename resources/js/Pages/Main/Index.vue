<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import AboutSection from "../../Components/About-section.vue";
import ConnectSection from "../../Components/ConnectSection.vue";

const props = defineProps({
    'lastArticles': Object,
    'lastReviews': Object,
    'errors': Object
})

function getStringUntilDot(str) {
    const index = str.lastIndexOf('.');
    return index === -1 ? str : str.substring(0, index);
}

function truncatedDescription(description) {
    if (description.length <= 200) return description;
    return description.substring(0, 200) + '...';
}

const newReview = useForm({
    "name": "",
    "email": "",
    "message": "",
})

function submitNewReview() {
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
        <title>Главная</title>
        <meta name="description" content="Создадим ваше приложение быстро, качественно и по доступной цене.">
    </Head>
    <DefaultLayout>
        <section class="main-block">
            <picture>
                <source srcset='../../../img/main-block/background.webp' type='image/webp'>
                <img class="main-block__img-background" src='../../../img/main-block/background.png' alt='background'>
            </picture>
            <div class='main-block__container'>
                <div class="main-block__content">
                    <h1 class="main-block__title title">Разработка
                        <mark>мобильных приложений</mark>
                        в Москве
                    </h1>
                    <div class="main-block__text">Создадим ваше приложение быстро, качественно и по доступной цене.
                    </div>
                    <button type="button" data-button-for-open-custom-popup="application"
                            class="main-block__button button">Заказать разработку
                    </button>
                </div>
                <div class="main-block__image">
                    <picture>
                        <source srcset='../../../img/main-block/telephones.webp' type='image/webp'>
                        <img src='../../../img/main-block/telephones.png' alt='telephones'>
                    </picture>
                </div>
            </div>
        </section>
        <section class="advantages">
            <div class='advantages__container'>
                <h3 class="advantages__title title">
                    <mark>Почему выбирают ТВЭЛВИ</mark>
                    <br>
                    для разработки мобильных приложений
                </h3>
                <div class="advantages__items">
                    <div class="advantages__item">
                        <div class="advantages__header">
                            <div class="advantages__icon ic-people"></div>
                            <h5 class="advantages__item-title">Профессиональная команда</h5>
                        </div>
                        <div class="advantages__text">Опытные разработчики и дизайнеры с многолетним стажем.</div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__header">
                            <div class="advantages__icon ic-srocks"></div>
                            <h5 class="advantages__item-title">Соблюдение сроков</h5>
                        </div>
                        <div class="advantages__text">Гарантируем своевременную сдачу проекта без задержек.</div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__header">
                            <div class="advantages__icon ic-individ"></div>
                            <h5 class="advantages__item-title">Индивидуальный подход</h5>
                        </div>
                        <div class="advantages__text">Разрабатываем решения, полностью соответствующие вашим
                            требованиям.
                        </div>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__header">
                            <div class="advantages__icon ic-support"></div>
                            <h5 class="advantages__item-title">Поддержка после запуска</h5>
                        </div>
                        <div class="advantages__text">Обеспечиваем техническую поддержку и обновления вашего
                            приложения.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="offers" class="special-offers">
            <picture>
                <source srcset='../../../img/special-offers/background.webp' type='image/webp'>
                <img class="special-offers__background" src='../../../img/special-offers/background.png'
                     alt='background'>
            </picture>
            <div class='special-offers__container'>
                <h3 class="special-offers__title title">Специальные
                    <mark>предложения</mark>
                </h3>
                <div class="special-offers__items">
                    <div class="special-offers__item">
                        <div class="special-offers__image">
                            <picture>
                                <source srcset='../../../img/special-offers/01.webp' type='image/webp'>
                                <img src='../../../img/special-offers/01.jpeg' alt='offer image'>
                            </picture>
                        </div>
                        <div class="special-offers__content">
                            <div class="special-offers__icon ic-tick"></div>
                            <h5 class="special-offers__title-item">Бесплатная консультация по разработке</h5>
                            <div class="special-offers__text">Получите экспертные советы бесплатно.</div>
                        </div>
                    </div>
                    <div class="special-offers__item">
                        <div class="special-offers__image">
                            <picture>
                                <source srcset='../../../img/special-offers/02.webp' type='image/webp'>
                                <img src='../../../img/special-offers/02.jpeg' alt='offer image'>
                            </picture>
                        </div>
                        <div class="special-offers__content">
                            <div class="special-offers__icon ic-tick"></div>
                            <h5 class="special-offers__title-item">Скидка 10% на первый проект</h5>
                            <div class="special-offers__text">Для новых клиентов.</div>
                        </div>
                    </div>
                    <div class="special-offers__item">
                        <div class="special-offers__image">
                            <picture>
                                <source srcset='../../../img/special-offers/03.webp' type='image/webp'>
                                <img src='../../../img/special-offers/03.jpeg' alt='offer image'>
                            </picture>
                        </div>
                        <div class="special-offers__content">
                            <div class="special-offers__icon ic-tick"></div>
                            <h5 class="special-offers__title-item">Бесплатное тестирование приложения</h5>
                            <div class="special-offers__text">При заказе разработки.</div>
                        </div>
                    </div>
                    <div class="special-offers__item">
                        <div class="special-offers__image">
                            <picture>
                                <source srcset='../../../img/special-offers/04.webp' type='image/webp'>
                                <img src='../../../img/special-offers/04.jpeg' alt='offer image'>
                            </picture>
                        </div>
                        <div class="special-offers__content">
                            <div class="special-offers__icon ic-tick"></div>
                            <h5 class="special-offers__title-item">Комплексное сопровождение </h5>
                            <div class="special-offers__text">Включено техническое обслуживание в течение первых 6
                                месяцев.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects" class="projects">
            <div class='projects__container'>
                <h2 class="projects__title title">
                    <mark>Наши проекты</mark>
                </h2>
                <div class="projects__items">
                    <div class="projects__item">
                        <div class="projects__content">
                            <div class="projects__num">01</div>
                            <h6 class="projects__item-title">Финансы</h6>
                        </div>
                        <div class="projects__image">
                            <picture>
                                <source srcset='../../../img/projects/01.webp' type='image/webp'>
                                <img src='../../../img/projects/01.png' alt='project image'>
                            </picture>
                        </div>
                    </div>
                    <div class="projects__item projects__item_blue">
                        <div class="projects__content">
                            <div class="projects__num">02</div>
                            <h6 class="projects__item-title">Здоровье</h6>
                        </div>
                        <div class="projects__image">
                            <picture>
                                <source srcset='../../../img/projects/02.webp' type='image/webp'>
                                <img src='../../../img/projects/02.png' alt='project image'>
                            </picture>
                        </div>
                    </div>
                    <div class="projects__item">
                        <div class="projects__content">
                            <div class="projects__num">03</div>
                            <h6 class="projects__item-title">Образование</h6>
                        </div>
                        <div class="projects__image">
                            <picture>
                                <source srcset='../../../img/projects/03.webp' type='image/webp'>
                                <img src='../../../img/projects/03.png' alt='project image'>
                            </picture>
                        </div>
                    </div>
                    <div class="projects__item projects__item_blue">
                        <div class="projects__content">
                            <div class="projects__num">04</div>
                            <h6 class="projects__item-title">Развлечения</h6>
                        </div>
                        <div class="projects__image">
                            <picture>
                                <source srcset='../../../img/projects/04.webp' type='image/webp'>
                                <img src='../../../img/projects/04.png' alt='project image'>
                            </picture>
                        </div>
                    </div>
                    <div class="projects__item">
                        <div class="projects__content">
                            <div class="projects__num">05</div>
                            <h6 class="projects__item-title">Бизнес</h6>
                        </div>
                        <div class="projects__image">
                            <picture>
                                <source srcset='../../../img/projects/05.webp' type='image/webp'>
                                <img src='../../../img/projects/05.png' alt='project image'>
                            </picture>
                        </div>
                    </div>
                    <div class="projects__item projects__item_blue">
                        <div class="projects__content">
                            <div class="projects__num">06</div>
                            <h6 class="projects__item-title">E-commerce</h6>
                        </div>
                        <div class="projects__image">
                            <picture>
                                <source srcset='../../../img/projects/06.webp' type='image/webp'>
                                <img src='../../../img/projects/06.png' alt='project image'>
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="projects__bottom">
                    <a :href="route('portfolio')" class="projects__button-more button-more">Смотреть все проекты</a>
                </div>
            </div>
        </section>
        <section id="reviews" class="reviews">
            <picture>
                <source srcset='../../../img/reviews/background.webp' type='image/webp'>
                <img class="reviews__background" src='../../../img/reviews/background.png' alt='background'>
            </picture>
            <div class='reviews__container'>
                <h3 class="reviews__title title">
                    <mark>Отзывы о разработке</mark>
                    <br>
                    мобильных приложений в ТВЭЛВИ
                </h3>
                <form @submit.prevent="submitNewReview" action="#" class="reviews__form form-reviews">
                    <div class="form-reviews__col">
                        <div class="form-reviews__inputs">
                            <input v-model="newReview.name" :class="{ 'error': props.errors.name }" type="text"
                                   name="name" placeholder="Имя" class="form-reviews__input">
                            <input v-model="newReview.email" :class="{ 'error': props.errors.email }" type="email"
                                   name="email" placeholder="E-mail" class="form-reviews__input">
                        </div>
                        <button type="submit" name="submit" class="reviews__button button">отправить</button>
                    </div>
                    <div class="form-reviews__col">
                        <textarea v-model="newReview.message" :class="{ 'error': props.errors.message }" name="text"
                                  placeholder="Текст сообщения" class="form-reviews__textarea"></textarea>
                        <button type="submit" name="submit"
                                :disabled="newReview.processing"
                                :class="{ 'processing': newReview.processing }"
                                class="reviews__button reviews__button_mobile button">отправить
                        </button>
                    </div>
                </form>
                <div class="reviews__items">
                    <div v-for="review in lastReviews" class="reviews__item">
                        <div class="reviews__quotes ic-quotes"></div>
                        <div class="reviews__stars">
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                        </div>
                        <h6 class="reviews__name">{{ review.name }}</h6>
                        <div class="reviews__text">{{ review.message }}</div>
                    </div>
                </div>
                <div class="reviews__bottom">
                    <a :href="route('reviews')" class="reviews__button-more button-more">Смотреть все отзывы</a>
                </div>
            </div>
        </section>
        <section class="articles">
            <div class='articles__container'>
                <h2 class="articles__title title">Полезные статьи <br>
                    <mark>о мобильной разработке</mark>
                </h2>
                <div class="articles__items">
                    <article v-for="article in lastArticles" class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source :srcset='getStringUntilDot(article.image) + ".webp"' type='image/webp'>
                                <img :src='article.image' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">{{ article.title }}</h4>
                        <div class="articles__text">{{ truncatedDescription(article.description) }}
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">{{ article.created_at }}</div>
                            <a :href="route('article.show', article.id)"
                               class="articles__button simple-button ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                </div>
                <div class="articles__bottom">
                    <a :href="route('articles')" class="articles__button-more button-more">Читать все статьи</a>
                </div>
            </div>
        </section>
        <about-section/>
        <connect-section/>
    </DefaultLayout>
</template>

<style scoped>

</style>
