<script setup>

import {useForm} from "@inertiajs/vue3";

const application = useForm({
    "firstName": "",
    "tel": "",
    "task": "",
})

function submit() {
    application.post(route('applicationSend'), {
        preserveState: true,
        preserveScroll: true
    });
}
</script>

<template>
    <section class="window-application" data-custom-popup="application">
        <div class="window-application__body">
            <div class="window-application__content" data-custom-popup-content>
                <button type="button" class="window-application__close" data-close-for-custom-popup><img
                    src='../../img/icons/close.svg' alt='close'></button>
                <h3 class="window-application__title">Оставьте заявку —
                    получите персональное
                    предложение и консультацию
                    по вашему проекту!</h3>
                <form @submit.prevent="submit" name="application" action="#" method="POST"
                      class="window-application__form">
                    <div class="window-application__inputs">
                        <input v-model="application.firstName" :class="{ 'error': application.errors.firstName }"
                               type="text" name="firstName" placeholder="Имя"
                               class="window-application__input">
                        <input v-model="application.tel" :class="{ 'error': application.errors.tel }" type="tel"
                               data-mask-tel name="tel"
                               placeholder="+7 (___) ___-__-__" class="window-application__input">
                        <input v-model="application.task" :class="{ 'error': application.errors.task }" type="text"
                               name="task" placeholder="Задача"
                               class="window-application__input">
                    </div>
                    <button
                        :disabled="application.processing"
                        :class="{ 'processing': application.processing }"
                        class="window-application__button button" type="submit">Получить предложение
                    </button>
                    <div class="application__sub-text">Обычно перезваниваем в течение 7 минут</div>
                </form>
            </div>
        </div>
    </section>
</template>

<style scoped>

</style>
