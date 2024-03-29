<?php
$logo = ds_cero_asset("images/logo_white_big.svg");
$kitDigital = ds_cero_asset("images/kit-digital.jpg");

$correo = get_field("correo_electronico", "options");
$movil = get_field("telefono_movil", "options");
$fijo = get_field("telefono_fijo", "options");

$instagram = get_field("instagram", "options");
$linkedin = get_field("linkedin", "options");


$args = array(
	'post_type'      => 'proyecto',  // Especifica el slug del tipo de contenido personalizado
	'posts_per_page' => -1,          // -1 para traer todos los posts
	'post_status'    => 'publish',   // Solo los posts publicados,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
);
$proyectos_query = new WP_Query($args);

?>


</main>

<?php do_action('ds_cero_content_end'); ?>

</div>

<?php do_action('ds_cero_content_after'); ?>

<footer id="colophon" class="site-footer bg-ds-grey w-full flex flex-col items-center justify-center gap-10 text-white py-10 lg:py-20 text-xs xl:text-sm 2xl:text-base" role="contentinfo">
	<?php do_action('ds_cero_footer'); ?>

	<img src="<?= $logo ?>" class="w-1/6 sm:w-1/12">


	<div class="flex flex-row items-start justify-center gap-10 xl:gap-20 flex-wrap lg:flex-nowrap">
		<div class="w-full sm:w-1/4 lg:w-1/5 gap-6 lg:gap-10 flex flex-col justify-center flex-start">
			<div class="font-semibold w-full text-lg lg:text-xl text-center lg:text-start">
				<a href="<?= __("/proyectos/", "dscero") ?>"><?= __("PROYECTOS", "dscero") ?></a>
			</div>
			<div class="text-center lg:text-start flex flex-col gap-4 w-full uppercase">
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

		<div class="w-full sm:w-1/4 lg:w-1/5 gap-6 lg:gap-10 flex flex-col justify-center">
			<div class="font-semibold w-full text-lg lg:text-xl text-center lg:text-start">
				<a href="<?= __("/sobre-nosotros/", "dscero") ?>"><?= __("SOBRE NOSOTROS", "dscero") ?></a>
			</div>
			<div class="text-center lg:text-start flex flex-col gap-4 w-full">
			</div>
		</div>

		<div class="w-full sm:w-1/4 lg:w-1/5 gap-6 lg:gap-10 flex flex-col justify-center">
			<div class="font-semibold w-full text-lg lg:text-xl text-center lg:text-start">
				<a href="<?= __("/contacto/", "dscero") ?>"><?= __("CONTACTO", "dscero") ?></a>
			</div>
			<div class="text-center lg:text-start flex flex-col gap-4 w-full uppercase">
				<a class="lowercase" href="<?= $correo["url"] ?>"><?= $correo["title"] ?></a>
				<a href="<?= $fijo["url"] ?>">T.: <?= $fijo["title"] ?></a>
				<a href="<?= $movil["url"] ?>">M.: <?= $movil["title"] ?></a>
			</div>
		</div>

		<div class="w-full sm:w-1/4 lg:w-1/5 gap-6 lg:gap-10 flex flex-col justify-center">
			<div class="font-semibold w-full text-lg lg:text-xl text-center lg:text-start">
				<span><?= __("REDES SOCIALES", "dscero") ?></span>
			</div>
			<div class="text-center lg:text-start flex flex-col gap-4 w-full uppercase">
				<a href="<?= $instagram["url"] ?>" target="_blank">Instagram</a>
				<a href="<?= $linkedin["url"] ?>" target="_blank">Linkedin</a>
			</div>
		</div>

		<div class="w-full sm:w-1/4 lg:w-1/5 gap-6 lg:gap-10 flex flex-col justify-center">
			<div class="font-semibold w-full text-lg lg:text-xl text-center lg:text-start">
				<span><?= __("ESCÓGE TU IDIOMA", "dscero") ?></span>
			</div>
			<div class="text-center lg:text-start flex flex-col gap-4 w-full">
				<span>ES</span>
				<span>EN</span>
			</div>
		</div>
	</div>

	<div id="legal">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'legal',
				'menu_class' => 'menu',
			)
		);
		?>
	</div>


	<?php if (is_front_page()) : ?>
		<div class="flex items-center justify-center font-semibold uppercase">
			<a target="_blank" href="https://nubeseo.es/">Desarrollo web por <span class="underline">NubeSEO</span></a>
		</div>
	<?php endif; ?>

	<img src="<?= $kitDigital ?>" class="w-4/5 sm:w-1/2 lg:w-1/4">
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>