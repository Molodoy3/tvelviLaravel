<script setup>

</script>

<template>
    <footer class="footer">
        <div class='footer__container'>
            <div class="footer__main">
                <a href="" class="footer__logo logo">
                    <img src='../../img/logo.svg' alt='logo'>
                </a>
                <nav class="footer__menu">
                    <ul class="footer__list">
                        <li><a :href="route('index')">Главная</a></li>
                        <li><a :href="route('about')">О нас</a></li>
                        <li><a :href="route('portfolio')">Портфолио</a></li>
                        <li><a :href="route('reviews')">Отзывы</a></li>
                        <li><a :href="route('contacts')">Контакты</a></li>
                    </ul>
                </nav>
                <div class="footer__links">
                    <ul class="footer__social-list">
                        <li><a class="ic-telegram" href="https://t.me/tvelvi_it"></a></li>
                        <li><a class="ic-whatsapp" href="https://wa.me/message/GEJZ2WL6QLI2K1"></a></li>
                        <li><a class="ic-vk" href="https://vk.com/tvelvi"></a></li>
                    </ul>
                    <a href="/sitemap.xml" class="footer__sitemap">Карта сайта</a>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__info">© 2024 ТВЭЛВИ. Все права защищены.</div>
                <a :href="route('privacyAgreement')" class="footer__politic">Политика конфиденциальности</a>
            </div>
        </div>
    </footer>
</template>

<style scoped>

</style>
