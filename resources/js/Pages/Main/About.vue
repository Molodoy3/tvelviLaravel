<script setup>

import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import {Head} from "@inertiajs/vue3";
import AboutSection from "../../Components/About-section.vue";

defineProps({
    'lastReviews': Object,
})

</script>

<template>
    <Head>
        <title>О нас</title>
        <meta name="description"
              content="Для нас мобильные приложения и сайты — это инструмент, который приносит бизнесу измеримую пользу: в клиентах, заказах, деньгах. ">
    </Head>
    <DefaultLayout>
        <section class="about-welcome">
            <div class='about-welcome__container'>
                <div class="about-welcome__row-content">
                    <div class="about-welcome__content">
                        <h1 class="about-welcome__title title-red">Превращаем идеи в
                            <mark>цифровые продукты</mark>
                        </h1>
                        <div class="about-welcome__text">Для нас мобильные приложения, сайты,
                            игры и программное обеспечение — это
                            инструменты, которые приносят
                            бизнесу измеримую пользу: в клиентах,
                            заказах и доходе.
                        </div>
                    </div>
                    <div class="about-welcome__image">
                        <picture>
                            <source srcset='../../../img/about-page/welcome/01.webp' type='image/webp'>
                            <img src='../../../img/about-page/welcome/01.jpeg' alt='about image'>
                        </picture>
                    </div>
                </div>
                <div class="about-welcome__images">
                    <div class="about-welcome__image">
                        <picture>
                            <source srcset='../../../img/about-page/welcome/02.webp' type='image/webp'>
                            <img src='../../../img/about-page/welcome/02.jpeg' alt='about image'>
                        </picture>
                    </div>
                    <div class="about-welcome__image">
                        <picture>
                            <source srcset='../../../img/about-page/welcome/03.webp' type='image/webp'>
                            <img src='../../../img/about-page/welcome/03.jpeg' alt='about image'>
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <!--        <section class="clients">
                    <div class='clients__container'>
                        <h3 class="clients__title title">Наши клиенты</h3>
                        <div class="clients__items">
                            <div class="clients__item">
                                <picture>
                                    <source srcset='../../../img/about-page/clients/raifaizen.webp' type='image/webp'>
                                    <img src='../../../img/about-page/clients/raifaizen.png' alt='Райфайзен банк'>
                                </picture>
                            </div>
                            <div class="clients__item">
                                <picture>
                                    <source srcset='../../../img/about-page/clients/lukoil.webp' type='image/webp'>
                                    <img src='../../../img/about-page/clients/lukoil.png' alt='Лукойл'>
                                </picture>
                            </div>
                            <div class="clients__item">
                                <picture>
                                    <source srcset='../../../img/about-page/clients/raifaizen.webp' type='image/webp'>
                                    <img src='../../../img/about-page/clients/raifaizen.png' alt='Райфайзен банк'>
                                </picture>
                            </div>
                            <div class="clients__item">
                                <picture>
                                    <source srcset='../../../img/about-page/clients/lukoil.webp' type='image/webp'>
                                    <img src='../../../img/about-page/clients/lukoil.png' alt='Лукойл'>
                                </picture>
                            </div>
                            <div class="clients__item">
                                <picture>
                                    <source srcset='../../../img/about-page/clients/raifaizen.webp' type='image/webp'>
                                    <img src='../../../img/about-page/clients/raifaizen.png' alt='Райфайзен банк'>
                                </picture>
                            </div>
                            <div class="clients__item">
                                <picture>
                                    <source srcset='../../../img/about-page/clients/lukoil.webp' type='image/webp'>
                                    <img src='../../../img/about-page/clients/lukoil.png' alt='Лукойл'>
                                </picture>
                            </div>
                        </div>
                    </div>
                </section>-->
        <about-section/>
        <section class="honors">
            <div class='honors__container'>
                <h3 class="advantages__title title">
                    <mark>Почему выбирают ТВЭЛВИ</mark>
                    <br>
                    для разработки мобильных приложений
                </h3>
                <div class="honors__body">
                    <!--                    <div class="honors__items">
                                            <div class="honors__item">
                                                <div class="honors__icon">
                                                    <picture>
                                                        <source srcset='../../../img/about-page/honor.webp' type='image/webp'>
                                                        <img src='../../../img/about-page/honor.png' alt='honor image'>
                                                    </picture>
                                                </div>
                                                <div class="honors__item-content">
                                                    <div class="honors__title-item">1 место</div>
                                                    <div class="honors__text">Музыкальные и видео приложения</div>
                                                </div>
                                            </div>
                                            <div class="honors__item">
                                                <div class="honors__icon">
                                                    <picture>
                                                        <source srcset='../../../img/about-page/honor.webp' type='image/webp'>
                                                        <img src='../../../img/about-page/honor.png' alt='honor image'>
                                                    </picture>
                                                </div>
                                                <div class="honors__item-content">
                                                    <div class="honors__title-item">1 место</div>
                                                    <div class="honors__text">Музыкальные и видео приложения</div>
                                                </div>
                                            </div>
                                            <div class="honors__item">
                                                <div class="honors__icon">
                                                    <picture>
                                                        <source srcset='../../../img/about-page/honor.webp' type='image/webp'>
                                                        <img src='../../../img/about-page/honor.png' alt='honor image'>
                                                    </picture>
                                                </div>
                                                <div class="honors__item-content">
                                                    <div class="honors__title-item">1 место</div>
                                                    <div class="honors__text">Музыкальные и видео приложения</div>
                                                </div>
                                            </div>
                                            <div class="honors__item">
                                                <div class="honors__icon">
                                                    <picture>
                                                        <source srcset='../../../img/about-page/honor.webp' type='image/webp'>
                                                        <img src='../../../img/about-page/honor.png' alt='honor image'>
                                                    </picture>
                                                </div>
                                                <div class="honors__item-content">
                                                    <div class="honors__title-item">1 место</div>
                                                    <div class="honors__text">Музыкальные и видео приложения</div>
                                                </div>
                                            </div>
                                            <div class="honors__item">
                                                <div class="honors__icon">
                                                    <picture>
                                                        <source srcset='../../../img/about-page/honor.webp' type='image/webp'>
                                                        <img src='../../../img/about-page/honor.png' alt='honor image'>
                                                    </picture>
                                                </div>
                                                <div class="honors__item-content">
                                                    <div class="honors__title-item">1 место</div>
                                                    <div class="honors__text">Музыкальные и видео приложения</div>
                                                </div>
                                            </div>
                                            <div class="honors__item">
                                                <div class="honors__icon">
                                                    <picture>
                                                        <source srcset='../../../img/about-page/honor.webp' type='image/webp'>
                                                        <img src='../../../img/about-page/honor.png' alt='honor image'>
                                                    </picture>
                                                </div>
                                                <div class="honors__item-content">
                                                    <div class="honors__title-item">1 место</div>
                                                    <div class="honors__text">Музыкальные и видео приложения</div>
                                                </div>
                                            </div>
                                        </div>-->
                    <div class="honors__content advantages__items">
                        <div class="advantages__item">
                            <div class="advantages__header">
                                <div class="advantages__icon ic-people"></div>
                                <h5 class="advantages__item-title">Профессиональная команда</h5>
                            </div>
                            <div class="advantages__text">Опытные разработчики и дизайнеры с многолетним стажем.</div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__header">
                                <div class="advantages__icon ic-srocks"></div>
                                <h5 class="advantages__item-title">Соблюдение сроков</h5>
                            </div>
                            <div class="advantages__text">Гарантируем своевременную сдачу проекта без задержек.</div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__header">
                                <div class="advantages__icon ic-individ"></div>
                                <h5 class="advantages__item-title">Индивидуальный подход</h5>
                            </div>
                            <div class="advantages__text">Разрабатываем решения, полностью соответствующие вашим
                                требованиям.
                            </div>
                        </div>
                        <div class="advantages__item">
                            <div class="advantages__header">
                                <div class="advantages__icon ic-support"></div>
                                <h5 class="advantages__item-title">Поддержка после запуска</h5>
                            </div>
                            <div class="advantages__text">Обеспечиваем техническую поддержку и обновления вашего
                                приложения.
                            </div>
                        </div>
                    </div>
                    <div class="honors__image">
                        <picture>
                            <source srcset='../../../img/about-page/honors.webp' type='image/webp'>
                            <img src='../../../img/about-page/honors.jpeg' alt='honors image'>
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <!--        <section id="reviews" class="reviews reviews_main reviews_about">
                    <div class='reviews__container'>
                        <h1 class="reviews__title title">Отзывы о нас</h1>
                        <div class="reviews__items">
                            <div class="reviews__item">
                                <div class="reviews__quotes ic-quotes"></div>
                                <div class="reviews__stars">
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                </div>
                                <h6 class="reviews__name">Александр</h6>
                                <div class="reviews__text">Здесь автор сталкивает два таких достаточно далёких друг от друга
                                    явления как генезис свободного стиха теоретически возможен. Строфоид отражает
                                    поэтический гекзаметр. Пастиш полидисперсен. Графомания, соприкоснувшись в чем-то со
                                    своим главным антагонистом в постструктурной поэтике, откровенна.
                                    Строфоид отражает поэтический гекзаметр. Пастиш полидисперсен. Графома
                                </div>
                            </div>
                            <div class="reviews__item">
                                <div class="reviews__quotes ic-quotes"></div>
                                <div class="reviews__stars">
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                </div>
                                <h6 class="reviews__name">Александр</h6>
                                <div class="reviews__text">Здесь автор сталкивает два таких достаточно далёких друг от друга
                                    явления как генезис свободного стиха теоретически возможен. Строфоид отражает
                                    поэтический гекзаметр. Пастиш полидисперсен. Графомания, соприкоснувшись в чем-то со
                                    своим главным антагонистом в постструктурной поэтике, откровенна.
                                    Строфоид отражает поэтический гекзаметр. Пастиш полидисперсен. Графома
                                </div>
                            </div>
                            <div class="reviews__item">
                                <div class="reviews__quotes ic-quotes"></div>
                                <div class="reviews__stars">
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                </div>
                                <h6 class="reviews__name">Александр</h6>
                                <div class="reviews__text">Здесь автор сталкивает два таких достаточно далёких друг от друга
                                    явления как генезис свободного стиха теоретически возможен. Строфоид отражает
                                    поэтический гекзаметр. Пастиш полидисперсен. Графомания, соприкоснувшись в чем-то со
                                    своим главным антагонистом в постструктурной поэтике, откровенна.
                                    Строфоид отражает поэтический гекзаметр. Пастиш полидисперсен. Графома
                                </div>
                            </div>
                            <div class="reviews__item">
                                <div class="reviews__quotes ic-quotes"></div>
                                <div class="reviews__stars">
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                    <div class="reviews__star ic-star"></div>
                                </div>
                                <h6 class="reviews__name">Александр</h6>
                                <div class="reviews__text">Здесь автор сталкивает два таких достаточно далёких друг от друга
                                    явления как генезис свободного стиха теоретически возможен. Строфоид отражает
                                    поэтический гекзаметр. Пастиш полидисперсен. Графомания, соприкоснувшись в чем-то со
                                    своим главным антагонистом в постструктурной поэтике, откровенна.
                                    Строфоид отражает поэтический гекзаметр. Пастиш полидисперсен. Графома
                                </div>
                            </div>
                        </div>
                        <div class="reviews__bottom">
                            <a href="reviews.html" class="reviews__button-more button-more">Смотреть все отзывы</a>
                        </div>
                    </div>
                </section>-->
        <section id="reviews" class="reviews reviews_main reviews_about ">
            <div class='reviews__container'>
                <h2 class="reviews__title title">Отзывы о нас</h2>
                <div class="reviews__items">
                    <div v-for="review in lastReviews" class="reviews__item">
                        <div class="reviews__quotes ic-quotes"></div>
                        <div class="reviews__stars">
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                            <div class="reviews__star ic-star"></div>
                        </div>
                        <h6 class="reviews__name">{{ review.name }}</h6>
                        <div class="reviews__text">{{ review.message }}</div>
                    </div>
                </div>
                <div class="reviews__bottom">
                    <a :href="route('reviews')" class="reviews__button-more button-more">Смотреть все отзывы</a>
                </div>
            </div>
        </section>
        <section class="development-path">
            <div class='development-path__container'>
                <h2 class="development-path__title title">Путь нашего развития</h2>
                <div class="development-path__items">
                    <div class="development-path__item">
                        <div class="development-path__year">2023</div>
                        <div class="development-path__text">компания ТВЭЛВИ была основана с целью создания инновационных
                            решений в сфере IT.
                            <ul>
                                 <span>За первый год работы мы:</span>
                                <li>Собрали команду талантливых разработчиков, дизайнеров и аналитиков.</li>
                                <li>Успешно выполнили более 10 проектов, включая мобильные приложения и программное
                                    обеспечение для различных
                                    отраслей.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="development-path__item">
                        <div class="development-path__year">2024 и дальше</div>
                        <div class="development-path__text">
                            <span>Мы активно развиваемся и планируем:</span>
                            <ul>
                                <li>Увеличить наше портфолио за счет новых, сложных и интересных проектов.</li>
                                <li>Расширить команду и внедрять передовые технологии для решения сложных задач
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
