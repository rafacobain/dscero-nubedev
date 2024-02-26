<?php
$logo = ds_cero_asset("images/logo_white.svg");
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

		<header class="fixed w-screen top-0 px-10 py-8 flex flex-row items-center justify-between z-30">
			<a href="<?= get_home_url() ?>">
				<img src="<?= $logo ?>" class="w-28">
			</a>


			<button id="menu-button" class="flex flex-row items-center justify-center gap-2 duration-300 hover:gap-4">
				<div id="square-1" class="aspect-[1/1] w-2 bg-white"></div>
				<div id="square-2" class="aspect-[1/1] w-2 bg-white"></div>
				<div id="square-3" class="aspect-[1/1] w-2 bg-white"></div>
			</button>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('ds_cero_content_start'); ?>

			<main>