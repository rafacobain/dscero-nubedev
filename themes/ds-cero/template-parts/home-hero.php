<?php
$imagen_hero = get_field("imagen_hero")["url"];
$titulo_hero = get_field("titulo_hero");
$texto_hero = get_field("texto_hero");
$boton_hero = get_field("boton_hero");
?>

<section id="section-parallax" class="w-screen h-screen flex items-center justify-center relative overflow-hidden">
    <div id="parallax-bg-hero" class="absolute bg-white w-[110vw] h-[110vh] -z-10 bg-center bg-cover" style="background-image:url('<?= $imagen_hero ?>')"></div>

    <div class="aspect-[1/1] p-8 bg-black bg-opacity-60 w-[28rem] text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl z-0">
        <div class="border-[1px] border-white w-full h-full p-8 pl-14 flex flex-col items-end justify-center gap-10 text-end">
            <p class="font-agencyfb text-2xl uppercase font-bold"><?= $titulo_hero ?></p>
            <div id="homehero-texto" class="text-base uppercase"><?= $texto_hero ?></div>
            <a class="mt-auto py-2 px-4 border-[1px] border-white uppercase duration-300 hover:bg-white hover:text-black" href="<?= $boton_hero["url"] ?>"><?= $boton_hero["title"] ?></a>
        </div>
    </div>

    <section id="div-home-hero" class="bg-white w-full h-full flex items-center justify-center absolute top-0 left-0 z-50">
        <div class="aspect-[1/1] p-8 w-[28rem] text-black z-10">
            <div class="border-[1px] border-black w-full h-full p-8 pl-14 flex flex-col items-end justify-center gap-10 text-end">
                <p class="font-agencyfb text-2xl uppercase font-bold"><?= $titulo_hero ?></p>
                <div id="homehero-texto2" class="text-base uppercase"><?= $texto_hero ?></div>
                <div class="py-2 mt-auto text-black flex flex-row px-4 border-[1px] border-white uppercase">
                    <span id="porcentaje">0</span>
                    <span>%</span>
                </div>
            </div>
        </div>
    </section>
</section>