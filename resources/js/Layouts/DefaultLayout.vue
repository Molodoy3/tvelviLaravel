<script setup>

import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import WindowApplication from "../Components/WindowApplication.vue";


</script>

<template>
    <div class="wrapper">
        <Header></Header>
        <main class="page">
            <slot/>
            <section class="window-contact">
                <div class='window-contact__container'>
                    <div class="window-contact__wrap">
                        <button type="button" id="window-contact-preview" class="window-contact__preview">
                            <div class="window-contact__image-expert window-contact__image-expert_preview">
                                <picture>
                                    <source srcset='../../img/contact-window/expert.webp' type='image/webp'>
                                    <img src='../../img/contact-window/expert.jpg' alt='expert'>
                                </picture>
                            </div>
                        </button>
                        <div id="window-contact-main" class="window-contact__main">
                            <div class="window-contact__image-expert window-contact__image-expert_main">
                                <picture>
                                    <source srcset='../../img/contact-window/expert.webp' type='image/webp'>
                                    <img src='../../img/contact-window/expert.jpg' alt='expert'>
                                </picture>
                            </div>
                            <button id="window-contact-close" type="button" class="window-contact__close">
                                <picture>
                                    <source srcset='../../img/contact-window/close.webp' type='image/webp'>
                                    <img src='../../img/contact-window/close.png' alt='close'>
                                </picture>
                            </button>
                            <h3 class="window-contact__title">Людмила Чурикова</h3>
                            <div class="window-contact__text">Позвоните эксперту
                                проекта для консультации
                            </div>
                            <ul class="window-contact__icons">
                                <li class="window-contact__icon">
                                    <a href="https://wa.me/message/GEJZ2WL6QLI2K1">
                                        <picture>
                                            <source srcset='../../img/contact-window/watsapp.webp' type='image/webp'>
                                            <img src='../../img/contact-window/watsapp.png' alt='watsapp'>
                                        </picture>
                                    </a>
                                </li>
                                <li class="window-contact__icon">
                                    <a href="https://t.me/tvelvi_it">
                                        <picture>
                                            <source srcset='../../img/contact-window/tg.webp' type='image/webp'>
                                            <img src='../../img/contact-window/tg.png' alt='telegram'>
                                        </picture>
                                    </a>
                                </li>
                            </ul>
                            <div class="window-contact__phone">
                                <a href="tel:+79625641112">+7(962)564-11-12</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <WindowApplication/>
        </main>
        <Footer></Footer>
    </div>

</template>

<style scoped>

</style>
