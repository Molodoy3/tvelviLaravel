<script setup>
import {Head} from "@inertiajs/vue3";
import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import ConnectSection from "../../Components/ConnectSection.vue";
</script>

<template>
    <Head>
        <title>Контакты</title>
        <meta name="description" content="Страница для связи с Tvelvi">
    </Head>
    <DefaultLayout>
        <section class="contacts-form">
            <div class='contacts-form__container'>
                <h1 class="contacts-form__title title">Расскажите про ваш проект</h1>
                <form action="#" class="contacts-form__form reviews__form form-reviews form-reviews_white">
                    <div class="form-reviews__col">
                        <div class="form-reviews__inputs">
                            <input type="text" name="name" placeholder="Имя" class="form-reviews__input">
                            <input type="tel" name="tel" placeholder="Телефон" class="form-reviews__input">
                            <input type="text" name="company" placeholder="Компания" class="form-reviews__input">
                            <input type="email" name="email" placeholder="E-mail" class="form-reviews__input">
                        </div>
                        <button type="submit" name="submit" class="reviews__button button">отправить</button>
                    </div>
                    <div class="form-reviews__col">
                        <textarea name="text" placeholder="Текст сообщения" class="form-reviews__textarea"></textarea>
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
            </div>
        </section>
        <connect-section/>
    </DefaultLayout>

</template>

<style scoped>

</style>
