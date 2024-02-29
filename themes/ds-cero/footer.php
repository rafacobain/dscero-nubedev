<?php
$logo = ds_cero_asset("images/logo_white_big.svg");

$correo = get_field("correo_electronico", "options");
$movil = get_field("telefono_movil", "options");
$fijo = get_field("telefono_fijo", "options");

$instagram = get_field("instagram", "options");
$linkedin = get_field("linkedin", "options");


$args = array(
    'post_type'      => 'proyecto',  // Especifica el slug del tipo de contenido personalizado
    'posts_per_page' => -1,          // -1 para traer todos los posts
    'post_status'    => 'publish',   // Solo los posts publicados
    'orderby'        => 'title',     // Ordenar los resultados por el título del post
    'order'          => 'ASC'        // Orden ascendente, de la A a la Z
);
$proyectos_query = new WP_Query($args);

?>


</main>

<?php do_action('ds_cero_content_end'); ?>

</div>

<?php do_action('ds_cero_content_after'); ?>

<footer id="colophon" class="site-footer bg-ds-grey w-screen min-h-screen flex flex-col items-center justify-center gap-10 text-white py-20" role="contentinfo">
	<?php do_action('ds_cero_footer'); ?>

	<img src="<?= $logo ?>" class="w-1/12">

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<a href="<?= __("/proyectos/", "dscero") ?>"><?= __("PROYECTOS", "dscero") ?></a>
		</div>
		<div class="text-start flex flex-col gap-4 w-full uppercase">
			<?php
			if ($proyectos_query->have_posts()) :
				// Bucle para recorrer los posts encontrados
				while ($proyectos_query->have_posts()) :
					$proyectos_query->the_post(); ?>

					<a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>

			<?php endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<a href="<?= __("/sobre-nosotros/", "dscero") ?>"><?= __("SOBRE NOSOTROS", "dscero") ?></a>
		</div>
		<div class="text-start flex flex-col gap-4 w-full">
		</div>
	</div>

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<a href="<?= __("/contacto/", "dscero") ?>"><?= __("CONTACTO", "dscero") ?></a>
		</div>
		<div class="text-start flex flex-col gap-4 w-full uppercase">
			<a href="<?= $correo["url"] ?>"><?= $correo["title"] ?></a>
			<a href="<?= $fijo["url"] ?>">T.: <?= $fijo["title"] ?></a>
			<a href="<?= $movil["url"] ?>">M.: <?= $movil["title"] ?></a>
		</div>
	</div>

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<span><?= __("REDES SOCIALES", "dscero") ?></span>
		</div>
		<div class="text-start flex flex-col gap-4 w-full uppercase">
			<a href="<?= $instagram["url"] ?>" target="_blank">Instagram</a>
			<a href="<?= $linkedin["url"] ?>" target="_blank">Linkedin</a>
		</div>
	</div>

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<span><?= __("ESCÓGE TU IDIOMA", "dscero") ?></span>
		</div>
		<div class="text-start flex flex-col gap-4 w-full">
			<span>ES</span>
			<span>EN</span>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>