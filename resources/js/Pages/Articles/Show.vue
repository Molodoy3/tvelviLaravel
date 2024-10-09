<script setup>

import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    'article': Object
})
function getStringUntilDot(str) {
    const index = str.indexOf('.');
    return index === -1 ? str : str.substring(0, index);
}

</script>

<template>
    <Head>
        <title>{{article.title}}</title>
        <meta name="description" content="все статьи от Tvelvi">
    </Head>
    <DefaultLayout>
        <article class="article">
            <div class='article__container'>
                <header class="article__header">
                    <div class="article__image">
                        <picture>
                            <source :srcset='getStringUntilDot(article.image) + ".webp"' type='image/webp'>
                            <img :src='article.image' alt='article image'>
                        </picture>
                    </div>
                    <h1 class="article__title">{{article.title}}</h1>
                </header>
                <div class="article__body">
                    {{article.description}}
                </div>
                <footer class="article__footer">
                    <div class="article__date">{{article.created_at}}</div>
                    <a :href="route('articles')"
                       class="article__button articles__button simple-button ic-arrow-link">Назад</a>
                </footer>
            </div>
        </article>
    </DefaultLayout>
</template>

<style scoped>

</style>
