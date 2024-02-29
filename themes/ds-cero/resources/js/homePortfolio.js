export const homePortfolio = () =>{
    const botones = document.querySelectorAll(".btn-port");
    const botonBack = document.querySelector("#portfolio-back");
    const div = document.querySelector("#portfolio-div");

    const titlePort =document.querySelector("#title-port");
    const textPort =document.querySelector("#text-port");
    const linkPort =document.querySelector("#link-port");

    botones.forEach(b => {
        b.addEventListener("click", () => {
            botones.forEach(x => {
                x.classList.remove("boton-portfolio");
            });

            b.classList.add("boton-portfolio-big");

            titlePort.innerHTML = b.getAttribute("data-title");
            textPort.innerHTML = b.getAttribute("data-subtitle");
            linkPort.href = b.getAttribute("data-link");

            div.classList.add("portfolio-active");
        })
    });

    botonBack.addEventListener("click", () => {
        botones.forEach(b => {
            b.classList.remove("boton-portfolio-big");
            b.classList.add("boton-portfolio");
        });

        div.classList.remove("portfolio-active");
    })
}