<?php
$logo = ds_cero_asset("images/logo_white.svg");
$logo_black = ds_cero_asset("images/logo_black.svg");

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

		<header class="fixed w-full top-0 px-10 py-4 sm:py-8 flex flex-row items-center justify-between z-40 duration-300">
			<a class="z-40 relative" href="<?= get_home_url() ?>">
				<img src="<?= $logo ?>" class="blanca w-20 xl:w-28 duration-300">

				<img src="<?= $logo_black ?>" class="w-20 xl:w-28 absolute top-0 left-0 -z-10">
			</a>


			<button id="menu-button" class="flex flex-row items-center justify-center gap-2 duration-300 hover:gap-3 z-40">
				<div id="square-1" class="square aspect-[1/1] w-2 bg-white duration-500"></div>
				<div id="square-2" class="square aspect-[1/1] w-2 bg-white duration-500"></div>
				<div id="square-3" class="square aspect-[1/1] w-2 bg-white duration-500"></div>
			</button>


			<div id="menu" class="w-full h-screen z-30 fixed top-0 left-0 bg-black bg-opacity-60 backdrop-blur-lg not-open duration-500 p-10 sm:p-20 xl:p-40 text-sm sm:text-base xl:text-lg flex flex-col items-center justify-center">
				<div class="w-full h-full flex flex-col lg:flex-row items-center justify-center lg:justify-between gap-8 sm:gap-20 lg:gap-0">
					<?php foreach ($menu_items as $m) : ?>
						<a href="<?= get_permalink($m->object_id) ?>" class="menu-a border-[1px] border-white w-1/2 sm:w-1/3 lg:w-1/4 aspect-[1/1] flex items-center justify-center relative text-white duration-300">
							<div class="menu-a-image w-full h-full flex bg-center bg-cover duration-500 opacity-80 lg:opacity-60" style="background-image:url('<?= $imagenes_menu[$contador] ?>')">
								<div class="w-full h-full lg:backdrop-blur-xl duration-500 hover:backdrop-blur-none"></div>
							</div>

							<div class="menu-a-title absolute bottom-2 xl:bottom-4 right-2 sm:right-8 uppercase duration-300"><?= $m->title ?></div>

						</a>

						<?php $contador++; ?>
					<?php endforeach; ?>
				</div>

				<div class="absolute bottom-8 sm:bottom-10 text-center flex flex-row gap-10 uppercase text-white">
					<a class="duration-300 hover:font-semibold" href="<?= $instagram["url"] ?>" target="_blank">
						<svg class="w-4 sm:w-6" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<title>instagram [#fffff]</title>
								<desc>Created with Sketch.</desc>
								<defs> </defs>
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)" fill="#fff">
										<g id="icons" transform="translate(56.000000, 160.000000)">
											<path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#fffff]"> </path>
										</g>
									</g>
								</g>
							</g>
						</svg>
					</a>
					<a class="duration-300 hover:font-semibold" href="<?= $linkedin["url"] ?>" target="_blank">
						<svg class="w-4 sm:w-6" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
							<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
							<g id="SVGRepo_iconCarrier">
								<title>linkedin [#161]</title>
								<desc>Created with Sketch.</desc>
								<defs> </defs>
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="Dribbble-Light-Preview" transform="translate(-180.000000, -7479.000000)" fill="#fff">
										<g id="icons" transform="translate(56.000000, 160.000000)">
											<path d="M144,7339 L140,7339 L140,7332.001 C140,7330.081 139.153,7329.01 137.634,7329.01 C135.981,7329.01 135,7330.126 135,7332.001 L135,7339 L131,7339 L131,7326 L135,7326 L135,7327.462 C135,7327.462 136.255,7325.26 139.083,7325.26 C141.912,7325.26 144,7326.986 144,7330.558 L144,7339 L144,7339 Z M126.442,7323.921 C125.093,7323.921 124,7322.819 124,7321.46 C124,7320.102 125.093,7319 126.442,7319 C127.79,7319 128.883,7320.102 128.883,7321.46 C128.884,7322.819 127.79,7323.921 126.442,7323.921 L126.442,7323.921 Z M124,7339 L129,7339 L129,7326 L124,7326 L124,7339 Z" id="linkedin-[#161]"> </path>
										</g>
									</g>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('ds_cero_content_start'); ?>

			<main>