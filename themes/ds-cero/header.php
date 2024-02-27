<?php
$logo = ds_cero_asset("images/logo_white.svg");

$instagram = get_field("instagram", "options");
$linkedin = get_field("linkedin", "options");


$menu_items = wp_get_nav_menu_items('menu-1');

$imagenes_menu = [
	get_field("imagen_sobre", "options")["url"],
	get_field("imagen_proyectos", "options")["url"],
	get_field("imagen_contacto", "options")["url"],
];

$contador = 0;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('ds_cero_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('ds_cero_header'); ?>

		<header class="fixed w-screen top-0 px-10 py-8 flex flex-row items-center justify-between z-40">
			<a class="z-40" href="<?= get_home_url() ?>">
				<img src="<?= $logo ?>" class="w-28">
			</a>


			<button id="menu-button" class="flex flex-row items-center justify-center gap-2 duration-300 hover:gap-4 z-40">
				<div id="square-1" class="aspect-[1/1] w-2 bg-white duration-500"></div>
				<div id="square-2" class="aspect-[1/1] w-2 bg-white duration-500"></div>
				<div id="square-3" class="aspect-[1/1] w-2 bg-white duration-500"></div>
			</button>


			<div id="menu" class="w-screen h-screen z-30 fixed top-0 left-0 bg-black bg-opacity-60 backdrop-blur-lg not-open duration-500 p-40">
				<div class="w-full h-full flex flex-row items-center justify-between">
					<?php foreach ($menu_items as $m) : ?>
						<a href="<?= get_permalink($m) ?>" class="menu-a border-[1px] border-white w-1/4 aspect-[1/1] flex items-center justify-center relative text-white duration-300">
							<div class="menu-a-image w-3/4 aspect-[1/1] absolute top-0 right-0 -translate-y-20 translate-x-20 z-40 bg-center bg-cover duration-700 opacity-0" style="background-image:url('<?= $imagenes_menu[$contador] ?>')"></div>

							<div class="menu-a-border border-[1px] border-white border-opacity-70 w-3/5 h-3/5 z-50 absolute duration-300 opacity-0"></div>

							<div class="menu-a-title absolute bottom-4 right-8 uppercase text-lg duration-300"><?= $m->post_title ?></div>

						</a>

						<?php $contador++; ?>
					<?php endforeach; ?>
				</div>

				<div class="absolute bottom-10 left-10 text-start flex flex-row gap-10 w-full uppercase text-white">
					<a href="<?= $instagram["url"] ?>" target="_blank">Instagram</a>
					<a href="<?= $linkedin["url"] ?>" target="_blank">Linkedin</a>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('ds_cero_content_start'); ?>

			<main>