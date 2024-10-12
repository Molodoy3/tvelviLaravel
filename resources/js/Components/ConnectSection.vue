<script setup>

</script>

<template>
    <section id="connect" class="connect">
        <div class='connect__container'>
            <div class="connect__window window-connect">
                <h3 class="window-connect__title title">Свяжитесь с нами</h3>
                <div class="window-connect__items">
                    <div class="window-connect__info">
                        <div class="window-connect__value">Адрес:</div>
                        <div class="window-connect__text">Г. Казань., ул.Пушкина, 12</div>
                    </div>
                    <div class="window-connect__info">
                        <div class="window-connect__value">График работы:</div>
                        <div class="window-connect__text">Пн-пт 9:00-18:00<br>Сб-вс выходной</div>
                    </div>
                    <div class="window-connect__info">
                        <div class="window-connect__value">Телефон:</div>
                        <div class="window-connect__text"><a href="tel:+79625641112">+7 (962) 564 11 12</a></div>
                    </div>
                    <div class="window-connect__info">
                        <div class="window-connect__value">Почта:</div>
                        <div class="window-connect__text"><a
                            href="mailto:tvelvi.it@yandex.ru">tvelvi.it@yandex.ru</a>
                        </div>
                    </div>
                </div>
                <form action="#" class="window-connect__form">
                    <h4 class="window-connect__form-title">Оставьте заявку</h4>
                    <div class="window-connect__inputs">
                        <input type="text" name="name" placeholder="Имя" class="window-connect__input">
                        <input type="tel" name="tel" placeholder="Телефон" class="window-connect__input">
                    </div>
                    <textarea name="message" placeholder="Сообщение"
                              class="window-connect__textarea"></textarea>
                    <div class="window-connect__form-bottom">
                        <button class="window-connect__buttom simple-button" type="submit"
                                name="submit">Отправить
                        </button>
                        <div class="window-connect__personal-text">Нажимая на кнопку, вы даете свое согласие на
                            <a :href="route('privacyAgreement')">обработку персональных данных</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="connect__map" style="position:relative;overflow:hidden;"><!-- <a
                        href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a
                        href="https://yandex.ru/maps/geo/ulitsa_pavla_andreyeva_7_podyezd_1/2092134474/?ll=37.639295%2C55.717424&utm_medium=mapframe&utm_source=maps&z=14.51"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Павла Андреева, 7, подъезд 1
                        — Яндекс Карты</a> -->
            <iframe
                src="https://yandex.ru/map-widget/v1/?ll=37.639295%2C55.717424&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjY4ODI5MhJX0KDQvtGB0YHQuNGPLCDQnNC-0YHQutCy0LAsINGD0LvQuNGG0LAg0J_QsNCy0LvQsCDQkNC90LTRgNC10LXQstCwLCA3LCDQv9C-0LTRitC10LfQtCAxIgoNgH8WQhXa4V5CMMrgzeUH&z=14.51"
                frameborder="1" allowfullscreen="true"
                style="position:relative;"></iframe>
        </div>
    </section>
</template>

<style scoped>

</style>
