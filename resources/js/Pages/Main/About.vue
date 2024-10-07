<script setup>

import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import {Head} from "@inertiajs/vue3";
</script>

<template>
    <Head>
        <title>О нас</title>
        <meta name="description" content="Для нас мобильные приложения и сайты — это инструмент, который приносит бизнесу измеримую пользу: в клиентах, заказах, деньгах. ">
    </Head>
    <DefaultLayout>
        <section class="about-welcome">
            <div class='about-welcome__container'>
                <div class="about-welcome__row-content">
                    <div class="about-welcome__content">
                        <h1 class="about-welcome__title title-red">Превращаем идеи в
                            <mark>цифровые продукты</mark>
                        </h1>
                        <div class="about-welcome__text">Для нас мобильные приложения и сайты — это инструмент,
                            который
                            приносит бизнесу измеримую пользу: в клиентах, заказах, деньгах.
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
        <section class="clients">
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
        </section>
        <section class="honors">
            <div class='honors__container'>
                <h3 class="honors__title title">Наши награды</h3>
                <div class="honors__body">
                    <div class="honors__items">
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
        <section id="reviews" class="reviews reviews_main reviews_about">
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
        </section>
        <section class="development-path">
            <div class='development-path__container'>
                <h2 class="development-path__title title">Путь нашего развития</h2>
                <div class="development-path__items">
                    <div class="development-path__item">
                        <div class="development-path__year">2001</div>
                        <div class="development-path__text">30 ноября Павел Яблочков создал первый трансформатор, а 25
                            июня Александр Белл продемонстрировал свой телефон. Мы попробовали начать писать мобильные
                            приложения, но оказалось, что рано.
                        </div>
                    </div>
                    <div class="development-path__item">
                        <div class="development-path__year">2001</div>
                        <div class="development-path__text">30 ноября Павел Яблочков создал первый трансформатор, а 25
                            июня Александр Белл продемонстрировал свой телефон. Мы попробовали начать писать мобильные
                            приложения, но оказалось, что рано.
                        </div>
                    </div>
                    <div class="development-path__item">
                        <div class="development-path__year">2001</div>
                        <div class="development-path__text">30 ноября Павел Яблочков создал первый трансформатор, а 25
                            июня Александр Белл продемонстрировал свой телефон. Мы попробовали начать писать мобильные
                            приложения, но оказалось, что рано.
                        </div>
                    </div>
                    <div class="development-path__item">
                        <div class="development-path__year">2001</div>
                        <div class="development-path__text">30 ноября Павел Яблочков создал первый трансформатор, а 25
                            июня Александр Белл продемонстрировал свой телефон. Мы попробовали начать писать мобильные
                            приложения, но оказалось, что рано.
                        </div>
                    </div>
                    <div class="development-path__item">
                        <div class="development-path__year">2001</div>
                        <div class="development-path__text">30 ноября Павел Яблочков создал первый трансформатор, а 25
                            июня Александр Белл продемонстрировал свой телефон. Мы попробовали начать писать мобильные
                            приложения, но оказалось, что рано.
                        </div>
                    </div>
                    <div class="development-path__item">
                        <div class="development-path__year">2001</div>
                        <div class="development-path__text">30 ноября Павел Яблочков создал первый трансформатор, а 25
                            июня Александр Белл продемонстрировал свой телефон. Мы попробовали начать писать мобильные
                            приложения, но оказалось, что рано.
                        </div>
                    </div>
                    <div class="development-path__item">
                        <div class="development-path__year">2001</div>
                        <div class="development-path__text">30 ноября Павел Яблочков создал первый трансформатор, а 25
                            июня Александр Белл продемонстрировал свой телефон. Мы попробовали начать писать мобильные
                            приложения, но оказалось, что рано.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
