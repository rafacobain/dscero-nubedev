<?php
$texto_1 = get_field("texto_1");
$imagen_1 = get_field("imagen_1")["url"];
$imagen_2 = get_field("imagen_2")["url"];
$texto_2 = get_field("texto_2");
$imagen_3 = get_field("imagen_3")["url"];
$imagen_4 = get_field("imagen_4")["url"];


$titulo_enlace = get_field("titulo_enlace");
$texto_enlace = get_field("texto_enlace");
$boton_enlace = get_field("boton_enlace");
?>

<section class="w-full flex flex-col items-center justify-center gap-20 px-10 lg:px-20 2xl:px-40 py-10 lg:py-20 fondo-blanco overflow-x-hidden">

    <div class="w-full flex flex-col-reverse xl:flex-row-reverse items-center xl:items-end justify-center xl:justify-end gap-10 2xl:gap-20">
        <div id="sobre-imageblock-1" class="w-3/4 xl:w-1/2 flex flex-col sm:flex-row items-center justify-center gap-10">
            <div class="w-full lg:w-1/3 aspect-[3/4] sm:aspect-[9/16] bg-center bg-cover" style="background-image:url('<?= $imagen_1 ?>')"></div>
            <div class="w-full lg:w-1/3 aspect-[3/4] sm:aspect-[9/16]  bg-center bg-cover" style="background-image:url('<?= $imagen_2 ?>')"></div>
        </div>
        <div id="sobre-text-1" class="w-full xl:w-1/2 flex flex-col gap-6 2xl:gap-10 text-sm sm:text-base lg:text-lg 2xl:text-xl"><?= $texto_1 ?></div>
    </div>

    <div class="w-full flex flex-col-reverse xl:flex-row items-center xl:items-end justify-center xl:justify-end gap-10 2xl:gap-20">
        <div id="sobre-imageblock-2" class="w-3/4 xl:w-1/2 flex flex-col sm:flex-row items-center justify-center gap-10">
            <div class="w-full lg:w-1/3 aspect-[3/4] sm:aspect-[9/16] bg-center bg-cover" style="background-image:url('<?= $imagen_3 ?>')"></div>
            <div class="w-full lg:w-1/3 aspect-[3/4] sm:aspect-[9/16] bg-center bg-cover" style="background-image:url('<?= $imagen_4 ?>')"></div>
        </div>
        <div id="sobre-text-2" class="w-full xl:w-1/2 flex flex-col gap-6 2xl:gap-10 text-sm sm:text-base lg:text-lg 2xl:text-xl"><?= $texto_2 ?></div>
    </div>

    <div class="aspect-[1/1] bg-black bg-opacity-60 w-full sm:w-1/2 lg:w-1/3 xl:w-1/5 text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl mt-10">
        <div class="w-full h-full p-6 xl:p-8 xl:pl-10 2xl:pl-14 flex flex-col items-end justify-center gap-8 2xl:gap-10 text-end">
            <p class="text-lg sm:text-xl 2xl:text-2xl uppercase font-semibold"><?= $titulo_enlace ?></p>
            <div class="text-xs xl:text-sm 2xl:text-base uppercase"><?= $texto_enlace ?></div>
            <a class="mt-auto py-1 xl:py-2 px-2 xl:px-4 border-[1px] border-white uppercase duration-300 hover:bg-white hover:text-black text-xs sm:text-sm xl:text-base" href="<?= $boton_enlace["url"] ?>"><?= $boton_enlace["title"] ?></a>
        </div>
    </div>
</section>