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

export const animateShowFade = (id) => {
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

export const animateImageBlock = (id, from) => {
    // Crea una timeline de GSAP para la animación
    const tl = gsap.timeline({
        // Opcional: Integra ScrollTrigger si quieres que la animación se active al hacer scroll
        scrollTrigger: {
            trigger: id,
            start: "top center", // Ajusta según necesites
            toggleActions: "play none none none",
        }
    });

    if (from == 'right') {
        gsap.set(id, { translateX: '100vw' })
    } else {
        gsap.set(id, { translateX: '-100vw' })
    }

    tl.to(id, {
        translateX: 0, // Hace cada letra visible
        duration: 1
    });
}


export const addInvertedClass = () => {
    const header = document.querySelector('header');
    const divsWithBgWhite = document.querySelectorAll('.fondo-blanco');

    divsWithBgWhite.forEach(div => {
        ScrollTrigger.create({
            trigger: div,
            start: "top top", // Empieza la animación cuando el div 'bg-white' entra en el viewport
            end: "bottom top", // Termina la animación cuando el div 'bg-white' sale del viewport
            markers: false,
            onEnter: () => animateInverted(), // Llama a animateInverted cuando el div entra
            onLeave: () => revertInverted(), // Llama a revertInverted cuando el div sale
            onEnterBack: () => animateInverted(), // Llama a animateInverted cuando el div entra de nuevo por scroll inverso
            onLeaveBack: () => revertInverted(), // Llama a revertInverted cuando el div sale por scroll inverso
        });
    });


    // Función para animar el header al estado 'invertido'
    function animateInverted() {
        // Añade la clase 'invertido' o anima el header directamente aquí
        header.classList.add('invertido'); // O usa gsap.to() para animar propiedades
    }

    // Función para revertir la animación del header
    function revertInverted() {
        // Quita la clase 'invertido' o revierte la animación del header aquí
        header.classList.remove('invertido'); // O usa gsap.to() para revertir propiedades
    }
};

export const precarga = () => {
    let porcentaje = 0;
    const porcentajeElement = document.getElementById('porcentaje');

    if (porcentajeElement != null) {
        window.scrollTo(0, 0);
        document.body.style.overflow = 'hidden';

        // Incrementa el porcentaje de 0 a 100
        const interval = setInterval(() => {
            porcentaje++;
            porcentajeElement.textContent = porcentaje;

            if (porcentaje >= 100) {
                clearInterval(interval); // Detiene el intervalo una vez que alcanza 100
                animarDivHomeHero(); // Inicia la animación GSAP
            }
        }, 20);
    }
};

// Función para animar #div-home-hero con GSAP
const animarDivHomeHero = () => {
    const tl = gsap.timeline({
        onComplete: () => {
            // Cambia #div-home-hero a display: none una vez que la opacidad llega a 0
            gsap.set("#div-home-hero", { display: "none" });
            // Permitir scroll después de completar la animación
            document.body.style.overflow = 'auto';
        }
    });

    tl.to("#div-home-hero", { duration: 1, opacity: 0 }); // Ajusta la duración según sea necesario
};
