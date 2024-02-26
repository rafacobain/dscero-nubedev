<?php
$logo = ds_cero_asset("images/logo_white_big.svg");

$correo = get_field("correo_electronico", "options");
$movil = get_field("telefono_movil", "options");
$fijo = get_field("telefono_fijo", "options");

$instagram = get_field("instagram", "options");
$linkedin = get_field("linkedin", "options");
?>


</main>

<?php do_action( 'ds_cero_content_end' ); ?>

</div>

<?php do_action( 'ds_cero_content_after' ); ?>

<footer id="colophon" class="site-footer bg-ds-grey w-screen h-screen flex flex-col items-center justify-center gap-10 text-white" role="contentinfo">
	<?php do_action( 'ds_cero_footer' ); ?>

	<img src="<?= $logo ?>" class="w-1/12">

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<span>PROJECTS</span>
		</div>
		<div class="text-start flex flex-col gap-4 w-full">
			<span>CAN PAU - MALLORCA</span>
			<span>CAN PAU - MALLORCA</span>
			<span>CAN PAU - MALLORCA</span>
			<span>CAN PAU - MALLORCA</span>
			<span>CAN PAU - MALLORCA</span>
		</div>
	</div>

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<span>ABOUT</span>
		</div>
		<div class="text-start flex flex-col gap-4 w-full">
		</div>
	</div>

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<span>CONTACT</span>
		</div>
		<div class="text-start flex flex-col gap-4 w-full uppercase">
			<a href="<?= $correo["title"] ?>"><?= $correo["title"] ?></a>
			<a href="<?= $fijo["title"] ?>">T.: <?= $fijo["title"] ?></a>
			<a href="<?= $movil["title"] ?>">M.: <?= $movil["title"] ?></a>
		</div>
	</div>

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<span>SOCIAL MEDIA</span>
		</div>
		<div class="text-start flex flex-col gap-4 w-full uppercase">
			<a href="<?= $instagram["url"] ?>" target="_blank">Instagram</a>
			<a href="<?= $linkedin["url"] ?>" target="_blank" >Linkedin</a>
		</div>
	</div>

	<div class="w-full gap-10 flex flex-row justify-center">
		<div class="text-end font-agencyfb w-full text-xl">
			<span>CHOOSE YOUR LANGUAGE</span>
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
