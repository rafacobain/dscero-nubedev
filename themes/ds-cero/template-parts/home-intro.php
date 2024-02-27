<?php
$imagen_intro = get_field("imagen_intro")["url"];
$titulo_intro = get_field("titulo_intro");
$texto_intro = get_field("texto_intro");
$enlace_intro = get_field("enlace_intro");
?>

<section class="w-screen h-screen flex items-center justify-center p-2 bg-white">
    <div class="w-full h-full bg-center bg-cover p-20 flex flex-col items-end justify-start" style="background-image:url('<?= $imagen_intro ?>')">
        <div class="aspect-[1/1] p-20 bg-white bg-opacity-40 w-1/3 text-black duration-300 hover:bg-opacity-50 hover:backdrop-blur-xl hover:shadow-xl">
            <div class="border-[1px] border-black w-full h-full p-10 pl-20 flex flex-col items-end justify-center gap-10 text-end">
                <p class="font-agencyfb text-3xl uppercase font-bold"><?= $titulo_intro ?></p>
                <div id="homeintro-texto" class="text-base uppercase"><?= $texto_intro ?></div>
                <a class="mt-auto py-2 px-4 border-[1px] border-black uppercase duration-300 hover:bg-black hover:text-white" href="<?= $enlace_intro["url"] ?>"><?= $enlace_intro["title"] ?></a>
            </div>
        </div>
    </div>
</section>