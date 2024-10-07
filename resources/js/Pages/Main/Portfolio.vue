<script setup>

import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import {Head} from "@inertiajs/vue3";

</script>

<template>
    <Head>
        <title>Наши кейсы</title>
        <meta name="description" content="Мы стремимся к длительным отношениям, с погружением в мир бизнеса клиента. Это наш способ находить точные, красивые и своевременные решения">
    </Head>
    <DefaultLayout>
        <section class="portfolio-welcome">
            <picture>
                <source srcset='../../../img/services/main-block/background.webp' type='image/webp'>
                <img class="steps-welcome__background" src='../../../img/services/main-block/background.png'
                     alt='background'>
            </picture>
            <div class="portfolio-welcome__container">
                <h1 class="portfolio-welcome__title title-red">Кейсы, которыми <br>
                    <mark>мы гордимся</mark>
                </h1>
                <div class="portfolio-welcome__text">Мы стремимся к длительным отношениям, с погружением в мир
                    бизнеса клиента. Это наш способ находить точные, красивые и своевременные решения
                </div>
                <a href="" class="portfolio-welcome__button button">Заказать разработку</a>
            </div>
        </section>
        <section class="cases">
            <div class="cases__item">
                <picture>
                    <source srcset='../../../img/portfolio/backgound-01.webp' type='image/webp'>
                    <img class="cases__background-case" src='../../../img/portfolio/backgound-01.jpeg' alt='backgound case'>
                </picture>
                <div class='cases__container'>
                    <div class="cases__content">
                        <h2 class="cases__title">
                            <mark>Спаси Покушать</mark>
                        </h2>
                        <div class="cases__text">СпасиПокушать – приложение, которое спасает вкусные блюда от
                            ресторанов, кафе и магазинов от избыточных запасов, предоставляя пользователям шанс
                            наслаждаться ими со значительной скидкой.
                        </div>
                        <div class="cases__statistics statistics-cases">
                            <div class="statistics-cases__item">
                                <div class="statistics-cases__value">2 месяца</div>
                                <div class="statistics-cases__text">сроки разработки</div>
                            </div>
                            <div class="statistics-cases__item">
                                <div class="statistics-cases__value">7 человек</div>
                                <div class="statistics-cases__text">команда</div>
                            </div>
                            <div class="statistics-cases__item">
                                <div class="statistics-cases__value">250 000 Р</div>
                                <div class="statistics-cases__text">стоимость разработки</div>
                            </div>
                        </div>
                    </div>
                    <div class="cases__image">
                        <picture>
                            <source srcset='../../../img/portfolio/01.webp' type='image/webp'>
                            <img src='../../../img/portfolio/01.png' alt='case image'>
                        </picture>
                    </div>
                </div>
            </div>
            <div class="cases__item cases__item_grey">
                <picture>
                    <source srcset='../../../img/portfolio/44.webp' type='image/webp'>
                    <img class="cases__background-case" src='../../../img/portfolio/44.jpeg.jpeg' alt='backgound case'>
                </picture>
                <picture>
                    <source srcset='../../../img/portfolio/backgound-mobile-speak.webp' type='image/webp'>
                    <img class="cases__background-case cases__background-case_mobile"
                         src='../../../img/portfolio/backgound-mobile-speak.jpeg' alt='backgound-mobile-speak'>
                </picture>
                <div class='cases__container'>
                    <div class="cases__content">
                        <h2 class="cases__title">
                            <mark>Just Speak Platform</mark>
                        </h2>
                        <div class="cases__text">Образовательная online платформа Just Speak Platfotm
                            Платформа для изучения английского языка с применением ИИ
                        </div>
                        <div class="cases__statistics statistics-cases">
                            <div class="statistics-cases__item">
                                <div class="statistics-cases__value">AI</div>
                                <div class="statistics-cases__text">технологии</div>
                            </div>
                            <div class="statistics-cases__item">
                                <div class="statistics-cases__value">14 регионов</div>
                                <div class="statistics-cases__text">охват</div>
                            </div>
                        </div>
                    </div>
                    <div class="cases__image">
                        <!-- <picture>
                            <source srcset='../../../img/portfolio/02.webp' type='image/webp'>
                            <img src='../../../img/portfolio/02.png' alt='case image'>
                        </picture> -->
                    </div>
                </div>
            </div>
            <div class="cases__item">
                <div class='cases__container'>
                    <div class="cases__content">
                        <h2 class="cases__title">
                            <mark>Sort aside!A</mark>
                            - сервис помощи в сортировке отходов
                        </h2>
                        <div class="cases__text">Sort aside! расскажет вам о важности сортировки отходов, позволит
                            отследить вклад, вносимый в экологию и даст возможность рассказать другим о достижениях
                            в улучшении экосистемы планеты
                        </div>
                        <div class="cases__statistics statistics-cases">
                            <div class="statistics-cases__item">
                                <div class="statistics-cases__value">Социальная значимость</div>
                            </div>
                            <div class="statistics-cases__item">
                                <div class="statistics-cases__value">Грантовый проект</div>
                            </div>
                        </div>
                    </div>
                    <div class="cases__image">
                        <picture>
                            <source srcset='../../../img/portfolio/03.webp' type='image/webp'>
                            <img src='../../../img/portfolio/03.png' alt='case image'>
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio-form">
            <div class='portfolio-form__container'>
                <h2 class="portfolio-form__title title">
                    <mark>Расскажите</mark>
                    про свой проект
                </h2>
                <form action="#" class="portfolio-form__form reviews__form form-reviews form-reviews_white">
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
                </form>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
