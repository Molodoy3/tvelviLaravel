<script setup>

import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import {Head} from "@inertiajs/vue3";

const {article} = defineProps({
    'article': Object
})
function getStringUntilDot(str) {
    const index = str.lastIndexOf('.');
    return index === -1 ? str : str.substring(0, index);
}
function formattedText() {
    return article.description.replace(/\n/g, '<br>');
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

                <div class="article__content">
                    <header class="article__header">
                        <div class="article__image">
                            <img :src="'/article/image/' + article.id" :alt="article.title"/>
                        </div>
                        <h1 class="article__title">{{article.title}}</h1>
                    </header>
                    <div class="article__body" v-html="formattedText()">
                    </div>
                    <footer class="article__footer">
                        <div class="article__date">{{article.created_at}}</div>
                        <a :href="route('articles')"
                           class="article__button articles__button simple-button ic-arrow-link">Назад</a>
                    </footer>
                </div>

            </div>
        </article>
    </DefaultLayout>
</template>

<style scoped>

</style>
