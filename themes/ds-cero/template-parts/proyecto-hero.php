<?php
$objeto = get_queried_object();
$titulo = $objeto->post_title;
$imagenes = get_field("imagenes");
?>

<section class="w-screen h-96 sm:h-screen flex flex-col items-center justify-between">
    <div class="w-full h-4/6 sm:h-4/5 swiper-proyecto overflow-hidden">
        <div class="w-full h-full swiper-wrapper">
            <?php foreach ($imagenes as $i) : ?>
                <div class="swiper-slide bg-center bg-cover w-full h-full" style="background-image:url('<?= $i["imagen"]["url"] ?>')">

                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="w-full h-2/6 sm:h-1/5 flex flex-row items-center justify-between px-4 sm:px-20 xl:px-40">
        <h1 class="text-start text-2xl sm:text-3xl xl:text-4xl 2xl:text-5xl font-agencyfb font-semibold"><?= $objeto->post_title ?></h1>

        <div class="flex flex-row items-center justify-center gap-4 sm:gap-10">
            <button class="swiper-proyecto-prev">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <div class="proyecto-pagination"></div>

            <button class="swiper-proyecto-next">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>
</section>