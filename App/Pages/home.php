<?php

use Glory\Utility\AssetsUtility;

function home()
{
    ob_start();
?>
    <div class="hero" style="background-image: url(<?php AssetsUtility::imagenUrl('inicio', 'jpg'); ?>);">
        <h2>Diseñamos experiencias auténticas, vividas con un confort sin precedentes, para que su única preocupación sea sentir.</h2>
    </div>
    <div class="section" style="background-color: var(--blanco);">
        <div class="container">
            <div class="logo">
                <?php echo $GLOBALS['logomabuhay']; ?>
            </div>
            <h2>
                Creemos que el poder de un viaje para transformarle es tan vital como su capacidad para enriquecer el mundo que nos rodea.
            </h2>
            <h3>
                En Mabuhay, somos artesanos de experiencias. Diseñamos viajes que no solo cambian su perspectiva, sino que también dejan un legado positivo en las culturas, las comunidades y el patrimonio que visitamos. Creamos un espacio de serenidad y confort para que reconecte con usted mismo y con sus seres querido
            </h3>
        </div>
    </div>
<?php
    return ob_get_clean();
}
