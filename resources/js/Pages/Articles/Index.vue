<script setup>
import {Head} from "@inertiajs/vue3";
import DefaultLayout from "../../Layouts/DefaultLayout.vue";

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
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/01.webp' type='image/webp'>
                                <img src='../../../img/articles/01.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Тренды мобильной разработки 2024 года</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/02.webp' type='image/webp'>
                                <img src='../../../img/articles/02.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Как выбрать платформу для вашего приложения</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button  ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/03.webp' type='image/webp'>
                                <img src='../../../img/articles/03.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Советы по UX/UI дизайну для мобильных приложений</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button  ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/01.webp' type='image/webp'>
                                <img src='../../../img/articles/01.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Тренды мобильной разработки 2024 года</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/02.webp' type='image/webp'>
                                <img src='../../../img/articles/02.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Как выбрать платформу для вашего приложения</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button  ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/03.webp' type='image/webp'>
                                <img src='../../../img/articles/03.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Советы по UX/UI дизайну для мобильных приложений</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button  ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/01.webp' type='image/webp'>
                                <img src='../../../img/articles/01.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Тренды мобильной разработки 2024 года</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/02.webp' type='image/webp'>
                                <img src='../../../img/articles/02.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Как выбрать платформу для вашего приложения</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button  ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                    <article class="articles__item">
                        <div class="articles__image">
                            <picture>
                                <source srcset='../../../img/articles/03.webp' type='image/webp'>
                                <img src='../../../img/articles/03.jpeg' alt='article image'>
                            </picture>
                        </div>
                        <h4 class="articles__item-title">Советы по UX/UI дизайну для мобильных приложений</h4>
                        <div class="articles__text">Изменение глобальной стратегии оправдывает типичный комплексный
                            анализ ситуации. Перераспределение бюджета одновременно искажает коллективный фактор
                            коммуникации.....
                        </div>
                        <footer class="articles__footer">
                            <div class="articles__date">20.04.24</div>
                            <a href="article.html" class="articles__button simple-button  ic-arrow-link">Читать</a>
                        </footer>
                    </article>
                </div>
                <ul class="articles-pagination pagination">
                    <!-- <li class="pagination__item pagination__item_button">
                        <a href="" class="pagination__link">Назад</a>
                    </li> -->
                    <li class="pagination__item pagination__item_active">
                        <a href="" class="pagination__link">1</a>
                    </li>
                    <li class="pagination__item">
                        <a href="" class="pagination__link">2</a>
                    </li>
                    <li class="pagination__item">
                        <a href="" class="pagination__link">3</a>
                    </li>
                    <li class="pagination__item">
                        <a href="" class="pagination__link">4</a>
                    </li>
                    <li class="pagination__item pagination__item_unactive">
                        <a href="" class="pagination__link">...</a>
                    </li>
                    <li class="pagination__item">
                        <a href="" class="pagination__link">22</a>
                    </li>
                    <li class="pagination__item pagination__item_button pagination__item_button_forward">
                        <a href="" class="pagination__link ic-arrow">Дальше</a>
                    </li>
                </ul>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
