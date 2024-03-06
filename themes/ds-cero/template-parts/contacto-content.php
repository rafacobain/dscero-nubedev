<?php
$correo = get_field("correo_electronico", "options");
$movil = get_field("telefono_movil", "options");
$fijo = get_field("telefono_fijo", "options");

$instagram = get_field("instagram", "options");
$linkedin = get_field("linkedin", "options");
?>

<section class="px-4 sm:px-20 lg:px-40 py-20 flex flex-col lg:flex-row items-start justify-center gap-20 fondo-blanco text-xs xl:text-sm 2xl:text-base">
    <div class="w-full lg:w-1/2 flex flex-col gap-10">
        <div class="w-full gap-10 flex flex-row justify-center">
            <div class="text-end font-semibold w-full text-xl">
                <a href="<?= __("/contacto/", "dscero") ?>"><?= __("CONTACTO", "dscero") ?></a>
            </div>
            <div class="text-start flex flex-col gap-4 w-full uppercase">
                <a href="<?= $correo["url"] ?>"><?= $correo["title"] ?></a>
                <a href="<?= $fijo["url"] ?>">T.: <?= $fijo["title"] ?></a>
                <a href="<?= $movil["url"] ?>">M.: <?= $movil["title"] ?></a>
            </div>
        </div>

        <div class="w-full gap-10 flex flex-row justify-center">
            <div class="text-end font-semibold w-full text-xl">
                <span><?= __("REDES SOCIALES", "dscero") ?></span>
            </div>
            <div class="text-start flex flex-col gap-4 w-full uppercase">
                <a href="<?= $instagram["url"] ?>" target="_blank">Instagram</a>
                <a href="<?= $linkedin["url"] ?>" target="_blank">Linkedin</a>
            </div>
        </div>
    </div>



    <div class="w-full lg:w-1/2 flex items-center justify-center">
        <?= do_shortcode('[contact-form-7 id="0902f8d" title="Contacto"]') ?>
    </div>
</section>