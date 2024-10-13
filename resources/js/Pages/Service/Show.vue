<script setup>

import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import {Head} from "@inertiajs/vue3";
import {onMounted, onUnmounted} from "vue";

const props = defineProps({
    'service': Object
});

onMounted(()=>{
    document.querySelector('.header').classList.remove('header_white');
})
onUnmounted(()=> {
    document.querySelector('.header').classList.add('header_white');
})

//для того чтобы убрать теги (mark для заголовка)
function cleanTitle(title) {
    return title.replace(/<\/?[^>]+(>|$)/g, ""); // Удаляем теги
}

</script>

<template>
    <Head>
        <title>{{cleanTitle(service.title)}}</title>
        <meta name="description" :content="service.description">
    </Head>
    <DefaultLayout>
        <section class="main-block">
            <picture>
                <source srcset='../../../img/main-block/background.webp' type='image/webp'>
                <img class="main-block__img-background" src='../../../img/main-block/background.png' alt='background'>
            </picture>
            <div class='main-block__container'>
                <div class="main-block__content">
                    <h1 class="main-block__title title" v-html="service.title">
                    </h1>
                    <div class="main-block__text">{{service.description}}
                    </div>
                    <a :href="route('serviceOrder', service.slug)" class="main-block__button button">Заказать разработку</a>
                </div>
                <div class="main-block__image">
                    <picture>
                        <source srcset='../../../img/main-block/telephones.webp' type='image/webp'>
                        <img src='../../../img/main-block/telephones.png' alt='telephones'>
                    </picture>
                </div>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
