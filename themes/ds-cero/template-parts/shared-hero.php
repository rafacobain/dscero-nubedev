<?php
$objeto = get_queried_object();
$titulo = $objeto->post_title;
$imagen = get_field("imagen_hero")["url"];
?>

<section id="section-parallax" class="w-screen h-screen flex items-center justify-center relative overflow-hidden">
    <div id="parallax-bg-hero" class="absolute w-[110vw] h-[110vh] -z-10 bg-center bg-cover" style="background-image:url('<?= $imagen ?>')"></div>

    <div class="aspect-[1/1] p-20 bg-black bg-opacity-60 w-1/4 text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl absolute bottom-20 right-20">
        <div class="border-[1px] border-white w-full h-full p-10 pl-20 flex flex-col items-end justify-center gap-10 text-end">
            <p class="font-agencyfb text-3xl uppercase font-bold"><?= $titulo ?></p>
        </div>
    </div>
</section>