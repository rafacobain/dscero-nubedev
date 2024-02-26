import { headerBehaviour } from "./header-behaviour";
import { heroParallax } from "./parallax";

// Navigation toggle
window.addEventListener('load', function () {
    headerBehaviour();


    try {
        heroParallax();
    } catch { }

    window.addEventListener("scroll", ()=>headerBehaviour);
});
