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

<section class="w-screen flex flex-col items-center justify-center gap-20 px-40 py-20">

    <div class="w-full flex flex-row-reverse items-end justify-end gap-20">
        <div id="sobre-imageblock-1" class="w-1/2 flex flex-row items-center justify-center relative">
            <div class="w-3/5 aspect-[16/9] bg-center bg-cover -translate-y-40" style="background-image:url('<?= $imagen_1 ?>')"></div>
            <div class="w-2/5 aspect-[1/1] bg-center bg-cover translate-y-12 -translate-x-4" style="background-image:url('<?= $imagen_2 ?>')"></div>
        </div>
        <div id="sobre-text-1" class="w-1/2 flex flex-col gap-10 text-xl"><?= $texto_1 ?></div>
    </div>

    <div class="w-full flex flex-row items-end justify-end gap-20">
        <div id="sobre-imageblock-2" class="w-1/2 flex flex-row items-center justify-between relative">
            <div class="w-1/3 aspect-[9/16] bg-center bg-cover translate-y-10" style="background-image:url('<?= $imagen_3 ?>')"></div>
            <div class="w-3/5 aspect-[1/1] bg-center bg-cover -translate-y-10" style="background-image:url('<?= $imagen_4 ?>')"></div>
        </div>
        <div id="sobre-text-2" class="w-1/2 flex flex-col gap-10 text-xl"><?= $texto_2 ?></div>
    </div>

    <div class="aspect-[1/1] p-20 bg-black bg-opacity-60 w-1/3 text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl mt-10">
        <div class="border-[1px] border-white w-full h-full p-10 pl-20 flex flex-col items-end justify-center gap-10 text-end">
            <p class="font-agencyfb text-3xl uppercase font-bold"><?= $titulo_enlace ?></p>
            <div class="text-base uppercase"><?= $texto_enlace ?></div>
            <a class="mt-auto py-2 px-4 border-[1px] border-white uppercase duration-300 hover:bg-white hover:text-black" href="<?= $boton_enlace["url"] ?>"><?= $boton_enlace["title"] ?></a>
        </div>
    </div>
</section>