import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el)
    },
})


//?Импорт кастомного открывания картинок (снипет doi)
//import customOpenImage from './modules/customOpenImage.js';
//?Импор Свайпера (снипет swp)
//import Swiper from 'swiper';
//import { Navigation, Pagination } from 'swiper/modules';


//?Основные скрипты (делегирование, шапка)
import { delegationClick } from './modules/script.js';
//?Для открытия, закрытия бургера обязательно добавить эту ф-ию (только импортировать, запускать не надо)
import { closeMenu } from './modules/script.js';

//?спойлеры
import { initSpollers } from './modules/spollers.js';

//?динамический для переноса инфы в шапке в бургер
import { useDynamicAdapt } from './modules/dynamic.js'


//?Функция определения мобильного устройства
//import { isMobile } from "./modules/functions";
//?Импортирование плавного скролла
//import "./modules/smoothScroll.js"
//?Галерея FancyBox
//import { Fancybox } from "@fancyapps/ui";
//import "@fancyapps/ui/dist/fancybox/fancybox.css";
//Fancybox.bind("[data-gallery]", {});
//<a href="img/3.jfif" data-fancybox="gallery" data-caption="Природа" class="block__item"><img src="img/3.jfif" alt="Природа"></a>

//?Динамический адаптив (  useDynamicAdapt()  )
//import { useDynamicAdapt } from './modules/dynamic.js'


window.addEventListener("load", windowLoad);
function windowLoad() {


    document.body.classList.add("load");

    delegationClick()
    initSpollers()
    useDynamicAdapt()


    //?Создание плавного скролла
    /*     SmoothScroll({
            // Время скролла 400 = 0.4 секунды
            animationTime: 600,
            // Размер шага в пикселях
            stepSize: 75,
            // Дополнительные настройки:
            // Ускорение
            accelerationDelta: 30,
            // Максимальное ускорение
            accelerationMax: 2,
            // Поддержка клавиатуры
            keyboardSupport: true,
            // Шаг скролла стрелками на клавиатуре в пикселях
            arrowScroll: 50,
            // Pulse (less tweakable)
            // ratio of "tail" to "acceleration"
            pulseAlgorithm: true,
            pulseScale: 4,
            pulseNormalize: 1,
            // Поддержка тачпада
            touchpadSupport: true,
        }); */
}
