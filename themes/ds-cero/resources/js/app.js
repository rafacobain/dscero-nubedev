import { addInvertedClass, animateImageBlock, animateShowFade, animateText, precarga } from "./gsap";
import { headerBehaviour } from "./header-behaviour";
import { heroParallax } from "./parallax";
import { swiperProyecto } from "./swiper";
import { homePortfolio } from "./homePortfolio";

// Navigation toggle
window.addEventListener('load', function () {
    headerBehaviour();


    try {
        heroParallax();
    } catch { }

    try{
        precarga();
    } catch {}

    try {
        homePortfolio();
    } catch { }

    try {
        addInvertedClass();
    } catch { }

    try {
        //home
        animateText('#homehero-texto');
        animateText('#homehero-texto2');
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

    window.addEventListener("scroll", () => headerBehaviour());
});
