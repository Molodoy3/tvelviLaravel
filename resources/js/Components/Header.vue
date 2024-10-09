<script setup lang="ts">

const currentLink = new URL(location.href).pathname.split('/').pop();

function isWhiteHeader() {
    return currentLink !== "" ? "header_white" : "";
}

function isActiveLink(route) {
    return route === currentLink ? 'active' : ''
}
</script>

<template>
    <header class="header" :class="isWhiteHeader()">
        <div class="header__body header__container">
            <div class="header__row">
                <a :href="route('index')" class="header__logo logo">
                    <img src='../../img/logo.svg' alt='logo'>
                </a>
                <div class='header__menu menu'>
                    <div class='menu__icon'>
                        <span></span>
                    </div>
                    <div class="menu__body">
                        <nav>
                            <ul data-spollers='1075,max' class='menu__list'>
                                <li class="menu__item" :class="isActiveLink('')"><a :href="route('index')"
                                                                                    class='menu__link'>Главная</a></li>
                                <li class="menu__item" :class="isActiveLink('services')">
                                    <a href='/' class='menu__link unactive'>Услуги</a>
                                    <div data-spoller tabindex='-1' class="menu__arrow ic-arrow"></div>
                                    <div class="menu__sub-list">
                                        <ul>
                                            <li v-for="service in $page.props.services[0]">
                                                <a :href="route('service', service.id)" class="menu__sub-link">{{service.altTitle}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu__item" :class="isActiveLink('about')"><a :href="route('about')"
                                                                                         class='menu__link'>О нас</a></li>
                                <li class="menu__item" :class="isActiveLink('portfolio')"><a :href="route('portfolio')"
                                                                                             class='menu__link'>Портфолио</a>
                                </li>
                                <li class="menu__item" :class="isActiveLink('reviews')"><a :href="route('reviews')"
                                                                                           class='menu__link'>Отзывы</a>
                                </li>
                                <li class="menu__item" :class="isActiveLink('services')"><a :href="route('portfolio')"
                                                                                            class='menu__link'>Цены</a></li>
                                <li class="menu__item" :class="isActiveLink('contacts')">
                                    <a :href="route('contacts')" class='menu__link'>Контакты</a>
                                    <div data-spoller tabindex='-1' class="menu__arrow ic-arrow"></div>
                                    <div class="menu__sub-list">
                                        <ul>
                                            <li><a href="article.html" class="menu__sub-link">Контакты 1</a></li>
                                            <li><a href="" class="menu__sub-link">Контакты 2</a></li>
                                            <li><a href="" class="menu__sub-link">Контакты 3</a></li>
                                            <li><a href="" class="menu__sub-link">Контакты 4</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header__info info" data-da=".menu__body nav,1075,last">
                    <a href="tel:+79157777777" class="info__item ic-telephone">+7 (915) 777 77 77</a>
                    <div class="info__item ic-clock">пн-пт с 10 до 18 часов</div>
                </div>
            </div>
        </div>
    </header>
</template>

<style scoped>

</style>
