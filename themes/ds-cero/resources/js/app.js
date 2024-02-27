import { addInvertedClass, animateImageBlock, animateShowFade, animateText } from "./gsap";
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
        addInvertedClass();
    } catch { }

    try {
        //home
        animateText('#homehero-texto');
        animateText('#homeintro-texto');
    } catch { }

    try {
        //sobre nosotros
        animateShowFade('#sobre-text-1');
        animateShowFade('#sobre-text-2');
        animateImageBlock('#sobre-imageblock-1', 'right');
        animateImageBlock('#sobre-imageblock-2', 'left');
    } catch { }

    try {
        swiperProyecto();
    } catch { }

    window.addEventListener("scroll", () => headerBehaviour);
});
