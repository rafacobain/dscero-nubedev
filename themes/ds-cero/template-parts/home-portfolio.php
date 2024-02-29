<?php
$acordeon = get_field("acordeon");

$tamanoBoton = 100 / count($acordeon);
$tamanoHover = $tamanoBoton * 2;
?>

<style>
    .boton-portfolio {
        width: <?= $tamanoBoton ?>%;
    }

    .boton-portfolio:hover {
        width: <?= $tamanoHover ?>%;
    }

    .boton-portfolio-big {
        width: 100%;
    }

    .portfolio-active {
        display: flex;
        opacity: 100%;
    }
</style>

<section class="flex flex-row items-center justify-center w-screen h-[750px] relative">
    <?php foreach ($acordeon as $a) : ?>
        <button class="boton-portfolio btn-port w-0 h-full bg-center bg-cover duration-300" data-title="<?= $a->post_title ?>" data-subtitle="<?= get_field("subtitulo", $a->ID)?>" data-link="<?= get_permalink($a->ID) ?>" style="background-image:url('<?= get_field("imagen_principal", $a->ID)["url"] ?>');">
        </button>
    <?php endforeach; ?>


    <div id="portfolio-div" class="absolute top-0 left-0 w-full h-full p-20 hidden flex-col items-center justify-center z-10 opacity-0 duration-500">
        <div class="w-full flex flex-row justify-end">
            <button id="portfolio-back" class="bg-black bg-opacity-60 backdrop-blur-lg p-4 duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </button>
        </div>

        <div class="w-full h-full flex items-center justify-center">
            <div class="aspect-[1/1] p-8 bg-black bg-opacity-60 w-[28rem] text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl">
                <div class="border-[1px] border-white w-full h-full p-8 pl-14 flex flex-col items-end justify-center gap-10 text-end">
                    <p id="title-port" class="font-agencyfb text-2xl uppercase font-bold"></p>
                    <div id="text-port" class="text-base uppercase"></div>
                    <a id="link-port" class="mt-auto py-2 px-4 border-[1px] border-white uppercase duration-300 hover:bg-white hover:text-black" href="#">VER PROYECTO</a>
                </div>
            </div>
        </div>
    </div>
</section>