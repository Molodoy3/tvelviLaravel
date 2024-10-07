<script setup>

import DefaultLayout from "../../Layouts/DefaultLayout.vue";
</script>

<template>
    <Head>
        <title>Сервисы</title>
        <meta name="description" content="Выбирайте только то, что потребуется именно вам, проставляя галочки в чекбоксах ниже, в зависимости от того, на какой стадии сейчас находится проект">
    </Head>
    <DefaultLayout>
        <section class="steps-welcome">
            <picture>
                <source srcset='../../../img/services/main-block/background.webp' type='image/webp'>
                <img class="steps-welcome__background" src='../../../img/services/main-block/background.png'
                     alt='background'>
            </picture>
            <div class='steps-welcome__container'>
                <div class="steps-welcome__content">
                    <h1 class="steps-welcome__title title-red">
                        Девять шагов разработки
                        <mark>мобильных приложений</mark>
                    </h1>
                    <div class="steps-welcome__text main-text">Выбирайте только то, что потребуется именно вам,
                        проставляя галочки в чекбоксах ниже, в зависимости от того, на какой стадии сейчас находится
                        проект
                    </div>
                </div>
                <div class="steps-welcome__image">
                    <picture>
                        <source srcset='../../../img/services/main-block/screens.webp' type='image/webp'>
                        <img src='../../../img/services/main-block/screens.png' alt='screens'>
                    </picture>
                </div>
            </div>
        </section>
        <section class="steps">
            <div class='steps__container'>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">01</div>
                            <h3 class="steps__title">Сбор информации и аналитика</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/01.webp' type='image/webp'>
                            <img src='../../../img/services/steps/01.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">02</div>
                            <h3 class="steps__title">Техническое задание</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/02.webp' type='image/webp'>
                            <img src='../../../img/services/steps/02.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">03</div>
                            <h3 class="steps__title">Прототип приложения</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick steps__tick_white ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/03.webp' type='image/webp'>
                            <img src='../../../img/services/steps/03.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">04</div>
                            <h3 class="steps__title">UX/UI дизайн интерфейса</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/04.webp' type='image/webp'>
                            <img src='../../../img/services/steps/04.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">05</div>
                            <h3 class="steps__title">Разработка ПО</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick steps__tick_white ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/05.webp' type='image/webp'>
                            <img src='../../../img/services/steps/05.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">06</div>
                            <h3 class="steps__title">Тестирование</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/06.webp' type='image/webp'>
                            <img src='../../../img/services/steps/06.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">07</div>
                            <h3 class="steps__title">Публикация</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick steps__tick_white ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/07.webp' type='image/webp'>
                            <img src='../../../img/services/steps/07.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">08</div>
                            <h3 class="steps__title">Продвижение приложения</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick steps__tick_white ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/08.webp' type='image/webp'>
                            <img src='../../../img/services/steps/08.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>
                <article class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">09</div>
                            <h3 class="steps__title">Гарантия на приложение</h3>
                        </header>
                        <div class="steps__text">Пишем подробное техническое задание: какие функции будут в
                            мобильном приложении, как это будет реализовано на платформах, как платформы будут
                            взаимодействовать с серверной стороной.
                            Рассчитываем необходимую инфраструктуру проекта, рисуем схему переходов между экранами и
                            разделами приложения.
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick steps__tick_white ic-tick"></div>
                        <picture>
                            <source srcset='../../../img/services/steps/09.webp' type='image/webp'>
                            <img src='../../../img/services/steps/09.jpeg' alt='step image'>
                        </picture>
                        <div class="steps__arrow">
                            <svg width="5.731934" viewBox="0 0 5.73193 164" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs/>
                                <path id="Arrow 1"
                                      d="M2.36 159.03L2.36 0L3.36 0L3.36 159.03L5.73 159.03L2.86 164L0 159.03L2.36 159.03Z"
                                      fill="#000000" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </article>

            </div>
        </section>
        <section class="ready">
            <div class='ready__container'>
                <div class="ready__image">
                    <img src='../../../img/services/ready/ready.svg' alt='ready'>
                </div>
                <div class="ready__text">Отмеченные услуги сохранились в форме обратной связи. Вам осталось добавить
                    любой свой контакт и отправить информацию нам.
                    Мы свяжемся с вами удобным для вас способом и проконсультируем по всем необходимым вопросам.
                </div>
                <div class="ready__request request-ready">
                    <div class="request-ready__content">
                        <h4 class="request-ready__title">Сроки и стоимость</h4>
                        <div class="request-ready__text">Оценка сильно зависит от типа проекта, его цели, используемых
                            технологий и подходов. Здесь мы приводим усредненные значения, на которые можно
                            ориентироваться. Точную оценку мы сможем дать, узнав детали.
                        </div>
                    </div>
                    <a href="" class="request-ready__button button">запросить оценку</a>
                </div>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
