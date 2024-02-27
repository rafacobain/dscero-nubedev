import { headerBehaviour } from "./header-behaviour";
import { heroParallax } from "./parallax";
import { swiperProyecto } from "./swiper";

// Navigation toggle
window.addEventListener('load', function () {
    headerBehaviour();


    try {
        heroParallax();
    } catch { }

    try {
        swiperProyecto();
    } catch { }

    window.addEventListener("scroll", ()=>headerBehaviour);
});
