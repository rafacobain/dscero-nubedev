<?php
$objeto = get_queried_object();
$titulo = $objeto->post_title;
$imagen = get_field("imagen_hero")["url"];
?>

<section id="section-parallax" class="w-full h-screen flex items-center justify-center relative overflow-hidden">
    <div id="parallax-bg-hero" class="absolute w-[110vw] h-[110vh] -z-10 bg-center bg-cover" style="background-image:url('<?= $imagen ?>')"></div>

    <div class="aspect-[1/1] bg-black bg-opacity-60 w-2/3 sm:w-1/6 text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl sm:absolute top-20 right-20">
        <div class=" w-full h-full p-6 xl:p-8 xl:pl-10 2xl:pl-14 flex flex-col items-end justify-center gap-8 2xl:gap-10 text-end">
            <p class="text-lg sm:text-xl 2xl:text-2xl uppercase font-semibold"><?= $titulo ?></p>
        </div>
    </div>
</section>