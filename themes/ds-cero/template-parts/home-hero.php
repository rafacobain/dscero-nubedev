<?php
$imagen_hero = get_field("imagen_hero")["url"];
$titulo_hero = get_field("titulo_hero");
$texto_hero = get_field("texto_hero");
$boton_hero = get_field("boton_hero");
?>

<section id="section-parallax" class="w-screen h-screen flex items-center justify-center relative overflow-hidden">
    <div id="parallax-bg-hero" class="absolute bg-ds-green w-[110vw] h-[110vh] -z-10 bg-center bg-cover" style="background-image:url('<?= $imagen_hero ?>')"></div>

    <div class="aspect-[1/1] p-20 bg-black bg-opacity-60 w-1/3 text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl">
        <div class="border-[1px] border-white w-full h-full p-10 pl-20 flex flex-col items-end justify-center gap-10 text-end">
            <p class="font-agencyfb text-3xl uppercase font-bold"><?= $titulo_hero ?></p>
            <div class="text-base uppercase"><?= $texto_hero ?></div>
            <a class="mt-auto py-2 px-4 border-[1px] border-white uppercase duration-300 hover:bg-white hover:text-black" href="<?= $boton_hero["url"] ?>"><?= $boton_hero["title"] ?></a>
        </div>
    </div>
</section>