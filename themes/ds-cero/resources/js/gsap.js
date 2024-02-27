import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { SplitText } from "gsap/SplitText";

// Registra los plugins
gsap.registerPlugin(ScrollTrigger, SplitText);

// Función para animar el texto
export const animateText = (id) => {
    // Divide el texto del elemento #homehero-texto en caracteres
    const mySplitText = new SplitText(id, { type: "chars" });
    // Obtiene los caracteres divididos
    const chars = mySplitText.chars;
    // Crea una timeline de GSAP para la animación
    const tl = gsap.timeline({
        // Opcional: Integra ScrollTrigger si quieres que la animación se active al hacer scroll
        scrollTrigger: {
            trigger: id,
            start: "top center", // Ajusta según necesites
            toggleActions: "play none none none",
        }
    });

    // Añade a la timeline una animación para cada carácter
    gsap.set(chars, { opacity: 0 });
    tl.to(chars, {
        opacity: 1, // Hace cada letra visible
        stagger: 0.025, // Tiempo entre la aparición de cada letra
        // Puedes añadir más propiedades de animación si lo deseas
    });
}

export const animateShowFade = (id) =>{
    // Crea una timeline de GSAP para la animación
    const tl = gsap.timeline({
        // Opcional: Integra ScrollTrigger si quieres que la animación se active al hacer scroll
        scrollTrigger: {
            trigger: id,
            start: "top center", // Ajusta según necesites
            toggleActions: "play none none none",
        }
    });

    // Añade a la timeline una animación para cada carácter
    gsap.set(id, { opacity: 0 });

    tl.to(id, {
        opacity: 1, // Hace cada letra visible
        duration: 1
    });
}

export const animateImageBlock = (id, from) =>{
    // Crea una timeline de GSAP para la animación
    const tl = gsap.timeline({
        // Opcional: Integra ScrollTrigger si quieres que la animación se active al hacer scroll
        scrollTrigger: {
            trigger: id,
            start: "top center", // Ajusta según necesites
            toggleActions: "play none none none",
        }
    });

    if(from == 'right'){
        gsap.set(id, {translateX: '100vw'})
    }   else{
        gsap.set(id, {translateX: '-100vw'})
    }

    tl.to(id, {
        translateX: 0, // Hace cada letra visible
        duration: 1
    });
}