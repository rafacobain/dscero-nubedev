<?php
$args = array(
    'post_type'      => 'proyecto', // Especifica el slug del tipo de contenido personalizado
    'posts_per_page' => -1,         // -1 para traer todos los posts
    'post_status'    => 'publish',  // Solo los posts publicados
);
$proyectos_query = new WP_Query($args);
?>


<section class="px-32 pt-20 pb-40 min-h-screen grid grid-cols-3 gap-x-40 gap-y-52 w-screen">
    <?php
    if ($proyectos_query->have_posts()) :
        // Bucle para recorrer los posts encontrados
        while ($proyectos_query->have_posts()) :
            $proyectos_query->the_post(); ?>

            <a href="<?= get_the_permalink(); ?>" class="aspect-[1/1] p-12 bg-black bg-opacity-60 w-full text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl relative">
                <div class="border-[1px] border-white w-full h-full p-10 pl-12 flex flex-col items-end justify-center gap-10 text-end">
                    <p class="font-agencyfb text-2xl uppercase font-bold"><?= get_the_title(); ?></p>
                    <div class="text-base uppercase"><?= get_field("subtitulo", get_the_ID()) ?></div>
                    <div class="mt-auto py-2 px-4 border-[1px] border-white uppercase duration-300 hover:bg-white hover:text-black"><?= __("VER MÁS", "dscero") ?></div>
                </div>

                <div class="w-1/2 aspect-[1/1] absolute bottom-0 left-0 bg-center bg-cover -translate-x-20 translate-y-20" style="background-image:url('<?= get_field("imagen_principal", get_the_ID())["url"] ?>')"></div>
            </a>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>