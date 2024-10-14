<script setup>
import {Head} from "@inertiajs/vue3";
import DefaultLayout from "../../Layouts/DefaultLayout.vue";

const props = defineProps({
   'service': Object,
    'steps': Object
});

//чтобы добавить оптимизированное изображение (убрать у текущего расширение и вывести с .webp)
function getStringUntilDot(str) {
    const index = str.lastIndexOf('.');
    return index === -1 ? str : str.substring(0, index);
}
//для того чтобы убрать теги (mark для заголовка)
function cleanTitle(title) {
    return title.replace(/<\/?[^>]+(>|$)/g, ""); // Удаляем теги
}

</script>

<template>
    <Head>
        <title>{{cleanTitle(service.title)}}</title>
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
                    <h1 class="steps-welcome__title title-red" v-html="service.title">
                    </h1>
                    <div class="steps-welcome__text main-text">{{ service.description }}
                    </div>
                </div>
                <div class="steps-welcome__image">
                    <picture>
                        <source :srcset='getStringUntilDot(service.image) + ".webp"' type='image/webp'>
                        <img :src='service.image' alt='screens'>
                    </picture>
                </div>
            </div>
        </section>
        <section class="steps">
            <div class='steps__container'>
                <article v-for="step in steps" class="steps__item">
                    <div class="steps__content">
                        <header class="steps__header">
                            <div class="steps__number">0{{step.number}}</div>
                            <h3 class="steps__title">{{step.title}}</h3>
                        </header>
                        <div class="steps__text">{{step.description}}
                        </div>
                    </div>
                    <div class="steps__image">
                        <div class="steps__tick ic-tick" :class="{'steps__tick_white': step.executed == 0}"></div>
                        <picture>
                            <source srcset='../../../img/services/main-block/screens.webp' type='image/webp'>
                            <img src='../../../img/services/main-block/screens.png' alt='step image'>
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
                <div class="ready__request request-ready">
                    <div class="request-ready__content">
                        <h4 class="request-ready__title">Сроки и стоимость</h4>
                        <div class="request-ready__text">Оценка сильно зависит от типа проекта, его цели, используемых
                            технологий и подходов. Здесь мы приводим усредненные значения, на которые можно
                            ориентироваться. Точную оценку мы сможем дать, узнав детали.
                        </div>
                    </div>
                    <button type="button" data-button-for-open-custom-popup="application" class="request-ready__button button">запросить оценку</button>
                </div>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
