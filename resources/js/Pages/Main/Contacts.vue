<script setup>
import {Head} from "@inertiajs/vue3";
import DefaultLayout from "../../Layouts/DefaultLayout.vue";
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
        <section id="connect" class="connect">
            <div class='connect__container'>
                <div class="connect__window window-connect">
                    <h3 class="window-connect__title title">Свяжитесь с нами</h3>
                    <div class="window-connect__items">
                        <div class="window-connect__info">
                            <div class="window-connect__value">Адрес:</div>
                            <div class="window-connect__text">Г. Казань., ул.Пушкина, 12</div>
                        </div>
                        <div class="window-connect__info">
                            <div class="window-connect__value">График работы:</div>
                            <div class="window-connect__text">Пн-пт 9:00-18:00<br>Сб-вс выходной</div>
                        </div>
                        <div class="window-connect__info">
                            <div class="window-connect__value">Телефон:</div>
                            <div class="window-connect__text"><a href="tel:+79625641112">+7 (962) 564 11 12</a></div>
                        </div>
                        <div class="window-connect__info">
                            <div class="window-connect__value">Почта:</div>
                            <div class="window-connect__text"><a
                                href="mailto:tvelvi.it@yandex.ru">tvelvi.it@yandex.ru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="connect__map connect__map_main" style="position:relative;overflow:hidden;">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=49.124875%2C55.789051&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjI2NTQwNBJ30KDQvtGB0YHQuNGPLCDQoNC10YHQv9GD0LHQu9C40LrQsCDQotCw0YLQsNGA0YHRgtCw0L0gKNCi0LDRgtCw0YDRgdGC0LDQvSksINCa0LDQt9Cw0L3RjCwg0YPQu9C40YbQsCDQn9GD0YjQutC40L3QsCwgMTIiCg3gf0RCFf0nX0I%2C&z=17.06"
                    frameborder="1" allowfullscreen="true" style="position:relative;">
                </iframe>
            </div>
        </section>
    </DefaultLayout>

</template>

<style scoped>

</style>
