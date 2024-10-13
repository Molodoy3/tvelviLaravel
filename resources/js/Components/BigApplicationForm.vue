<script setup>
import {useForm} from "@inertiajs/vue3";

const application = useForm({
    "name": "",
    "tel": "",
    "company": "",
    "email": "",
    "message": "",
})

function submit() {
    application.post(route('bigApplicationSend'), {
        preserveState: true,
        preserveScroll: true
    });
}

</script>

<template>
    <form @submit.prevent="submit" action="#" class="contacts-form__form reviews__form form-reviews form-reviews_white">
        <div class="form-reviews__col">
            <div class="form-reviews__inputs">
                <input v-model="application.name" :class="{ 'error': application.errors.name }" type="text" name="name" placeholder="Имя" class="form-reviews__input">
                <input v-model="application.tel" :class="{ 'error': application.errors.tel }" type="tel"  data-mask-tel name="tel"
                       placeholder="Телефон" class="form-reviews__input">
                <input v-model="application.company" :class="{ 'error': application.errors.company }" type="text" name="company" placeholder="Компания" class="form-reviews__input">
                <input v-model="application.email" :class="{ 'error': application.errors.email }" type="email" name="email" placeholder="E-mail" class="form-reviews__input">
            </div>
            <button type="submit" name="submit" class="reviews__button button">отправить</button>
        </div>
        <div class="form-reviews__col">
            <textarea v-model="application.message" :class="{ 'error': application.errors.message }" name="text" placeholder="Текст сообщения" class="form-reviews__textarea"></textarea>
            <button type="submit" name="submit"
                    class="reviews__button reviews__button_mobile button">отправить
            </button>
        </div>
        <!--                    <div class="form-reviews__col">
                                <div class="form-reviews__person person-form">
                                    <div class="person-form__header">
                                        <div class="person-form__image">
                                            <picture>
                                                <source srcset='../../../img/contacts/person.webp' type='image/webp'>
                                                <img src='../../../img/contacts/person.jpeg' alt='person'>
                                            </picture>
                                        </div>
                                        <div class="form-reviews__info">
                                            <h2 class="person-form__name">Морозов
                                                Андрей Викторович</h2>
                                            <div class="person-form__position">Руководитель компании</div>
                                        </div>
                                    </div>
                                    <div class="person-form__text ic-quotes">
                                        Изменение глобальной стратегии оправдывает типичный комплексный анализ ситуации.
                                    </div>
                                </div>
                            </div>-->
    </form>
</template>

<style scoped>

</style>
