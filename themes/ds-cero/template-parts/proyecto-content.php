<?php
$objeto = get_queried_object();
$caracteristicas = get_field("caracteristicas", $objeto->ID);
$descripcion = get_field("descripcion", $objeto->ID);
?>

<section class="w-full flex flex-row items-start justify-center gap-20 px-40 pt-4 pb-20">
    <div class="w-1/4 flex flex-col gap-10">
        <?php foreach ($caracteristicas as $c) : ?>
            <div class="w-full gap-10 flex flex-row justify-center">
                <div class="text-end font-agencyfb w-full text-xl uppercase">
                    <span><?= $c["titulo"] ?></span>
                </div>
                <div class="text-start flex flex-col gap-4 w-full uppercase">
                    <?php if ($c["caracteristica"] != null) : foreach ($c["caracteristica"] as $x) : ?>
                            <span><?= $x["titulo"] ?></span>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="w-3/4 flex flex-col gap-10 text-xl">
        <?= $descripcion ?>
    </div>
</section>