<script setup>
import {Head} from "@inertiajs/vue3";
import DefaultLayout from "../../Layouts/DefaultLayout.vue";

const props = defineProps({
    'articles': Object
})

props.articles.links[0].label = 'Назад';
props.articles.links[props.articles.links.length - 1].label = 'Вперед';

//чтобы добавить оптимизированное изображение (убрать у текущего расширение и вывести с .webp)
function getStringUntilDot(str) {
    const index = str.indexOf('.');
    return index === -1 ? str : str.substring(0, index);
}
function truncatedDescription(description) {
    if (description.length <= 200) return description;
    return description.substring(0, 200) + '...';
}

</script>

<template>
    <Head>
        <title>Статьи</title>
        <meta name="description" content="все статьи от Tvelvi">
    </Head>
    <DefaultLayout>
        <section class="articles articles_main">
            <div class='articles__container'>
                <!-- <h2 class="articles__title title">Полезные статьи <br>
                    <mark>о мобильной разработке</mark>
                </h2> -->
                <div class="articles__items">
                    <article v-for="article in articles.data" class="articles__item">
                        <div class="articles__image">
                            <picture v-if="getStringUntilDot(article.image)">
                                <source :srcset='getStringUntilDot(article.image) + ".webp"' type='image/webp'>
                                <img :src='article.image' alt='article image'>
                            </picture>
                            <img v-else :src='article.image' alt='article image'>
                        </div>
                        <h4 class="articles__item-title">{{article.title}}</h4>
                        <div class="articles__text">{{truncatedDescription(article.description)}}
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">{{article.created_at}}</div>
                            <a :href="route('article.show', article.id)" class="articles__button simple-button ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                </div>
                <ul class="articles-pagination pagination">
                    <li class="pagination__item"
                        v-if="articles.links.length > 3" v-for="link in articles.links"
                        :class="{ 'pagination__item_active': link.active,'pagination__item_button': link.label === 'Назад' || link.label === 'Вперед'}">
                        <a class="pagination__link" :href="link.url"
                           :class="{ 'active': link.active, 'pagination__item_unactive': !link.url && !link.active,
                            }">
                            {{link.label}}
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
