export const heroParallax = () => {
    // Selecciona la sección que contendrá el efecto parallax
    const section = document.querySelector('#section-parallax');

    // Añade un listener para el evento de movimiento del ratón sobre la sección
    section.addEventListener('mousemove', function (e) {
        const sensibilidad = -10;

        const x = e.clientX - this.offsetLeft;
        const y = e.clientY - this.offsetTop;

        const width = this.offsetWidth;
        const height = this.offsetHeight;

        // Calcula el desplazamiento, ajustando la sensibilidad del efecto
        const moveX = (x - width / 2) / width * sensibilidad; // Sensibilidad en X, ajustar según se desee
        const moveY = (y - height / 2) / height * sensibilidad; // Sensibilidad en Y, ajustar según se desee

        // Selecciona el elemento del fondo para modificar su posición
        const bg = document.getElementById('parallax-bg-hero');

        // Aplica el desplazamiento al fondo
        bg.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });
}