<?php
$args = array(
    'post_type'      => 'proyecto',  // Especifica el slug del tipo de contenido personalizado
    'posts_per_page' => -1,          // -1 para traer todos los posts
    'post_status'    => 'publish',
    'orderby'        => 'menu_order',
    'order'          => 'ASC',     // Orden ascendente, de la A a la Z
);
$proyectos_query = new WP_Query($args);

?>


<section class="px-6 sm:px-60 lg:px-20 xl:px-40 pt-10 xl:pt-20 pb-40 min-h-screen grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-20 w-full fondo-blanco">
    <?php
    if ($proyectos_query->have_posts()) :
        // Bucle para recorrer los posts encontrados
        while ($proyectos_query->have_posts()) :
            $proyectos_query->the_post(); ?>


            <a href="<?= get_permalink() ?>" class="grid-a aspect-[1/1] bg-black bg-opacity-60 w-full text-white duration-300 hover:bg-opacity-70 hover:backdrop-blur-xl hover:shadow-xl relative">
                <div class="w-full h-full flex bg-center bg-cover duration-500 opacity-80 lg:opacity-60" style="background-image:url('<?= get_field("imagen_principal", get_the_ID())["url"] ?>')">
                    <div class="backdrop-a w-full h-full lg:backdrop-blur-xl duration-500 hover:backdrop-blur-none"></div>
                </div>

                <div class="absolute top-0 left-0 border-[1px] border-white w-full h-full p-8 pl-12 flex flex-col items-end justify-center gap-10 text-end">
                    <p class="font-semibold text-lg sm:text-xl 2xl:text-2xl uppercase"><?= get_the_title(); ?></p>
                    <div class="text-xs xl:text-sm 2xl:text-base uppercase"><?= get_field("subtitulo", get_the_ID()) ?></div>
                    <div class="mt-auto py-1 xl:py-2 px-2 xl:px-4 border-[1px] border-white uppercase duration-300 hover:bg-white hover:text-black"><?= __("VER MÁS", "dscero") ?></div>
                </div>

            </a>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>