<?php
$imagen_intro = get_field("imagen_intro")["url"];
$titulo_intro = get_field("titulo_intro");
$texto_intro = get_field("texto_intro");
$enlace_intro = get_field("enlace_intro");
?>

<section class="w-screen h-fit sm:h-screen flex items-center justify-center p-2 sm:p-6 xl:p-8  bg-white">
    <div class="w-full h-full bg-center bg-cover p-6 xl:p-8 flex flex-col items-center sm:items-end justify-start  py-20 sm:py-0" style="background-image:url('<?= $imagen_intro ?>')">
        <div class="aspect-[1/1] p-6 xl:p-8 bg-white bg-opacity-40 w-80 xl:w-96 2xl:w-[28rem] text-black duration-300 hover:bg-opacity-50 hover:backdrop-blur-xl hover:shadow-xl">
            <div class="border-[1px] border-black w-full h-full p-6 xl:p-8 xl:pl-10 2xl:pl-14 flex flex-col items-end justify-center gap-10 text-end">
                <p class="font-agencyfb text-lg sm:text-xl 2xl:text-2xl uppercase font-bold"><?= $titulo_intro ?></p>
                <div id="homeintro-texto" class="text-xs xl:text-sm 2xl:text-base uppercase"><?= $texto_intro ?></div>
                <a class="mt-auto py-2 px-4 border-[1px] border-black uppercase duration-300 hover:bg-black hover:text-white text-xs sm:text-sm xl:text-base" href="<?= $enlace_intro["url"] ?>"><?= $enlace_intro["title"] ?></a>
            </div>
        </div>
    </div>
</section>