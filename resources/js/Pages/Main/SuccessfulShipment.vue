<script setup>

import DefaultLayout from "../../Layouts/DefaultLayout.vue";
import {Head} from "@inertiajs/vue3";
</script>

<template>
    <Head>
        <title>Спасибо за вашу заявку!</title>
    </Head>
    <DefaultLayout>
        <section class="application-gratitude">
            <div class='application-gratitude__container'>
                <h1 class="application-gratitude__title title">Спасибо за вашу заявку!</h1>
                <h2 class="application-gratitude__subtitle">Скоро мы свяжемся с вами и ответим на все ваши вопросы
                </h2>
                <div class="application-gratitude__social">
                    <div class="application-gratitude__text-social">А пока ждете звонка или сообщения,
                        подписывайтесь на наши соцсети
                    </div>
                    <ul class="application-gratitude__social-list social-list">
                        <li class="social-list__item">
                            <a href="https://vk.com/tvelvi" class="social-list__link">
                                <div class="social-list__image">
                                    <picture>
                                        <source srcset='../../../img/icons/vk.webp' type='image/webp'>
                                        <img src='../../../img/icons/vk.jpg' alt='vk'>
                                    </picture>
                                </div>
                                <div class="social-list__label">VKontakte</div>
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="https://t.me/tvelvi_itbot" class="social-list__link">
                                <div class="social-list__image">
                                    <picture>
                                        <source srcset='../../../img/icons/telegram.webp' type='image/webp'>
                                        <img src='../../../img/icons/telegram.png' alt='telegram'>
                                    </picture>
                                </div>
                                <div class="social-list__label">Telegram</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </DefaultLayout>
</template>

<style scoped>

</style>
