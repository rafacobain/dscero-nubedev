export const headerBehaviour = () => {
    const header = document.querySelector("header");
    const classToAdd = "scrolled";
    const offset = window.pageYOffset;

    if (offset > 1) {
        header.classList.add(classToAdd);
    } else {
        header.classList.remove(classToAdd);
    }

    openMenu();
}

const openMenu = () => {
    const boton = document.querySelector("#menu-button");
    const div = document.querySelector("#menu");

    boton.addEventListener("click", () => {
        boton.classList.toggle("button-menu-close");
        div.classList.toggle("not-open");
    })
}