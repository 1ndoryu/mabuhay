<?php

use Glory\Utility\AssetsUtility;
use Glory\Components\ContentRender;

function home()
{
    ob_start();
?>
    <div class="hero" style="background-image: url(<?php AssetsUtility::imagenUrl('inicio', 'jpg'); ?>);">
        <video class="hero-video" data-src="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/videoplayback.mp4'); ?>" poster="<?php AssetsUtility::imagenUrl('inicio', 'jpg'); ?>" muted loop playsinline preload="none" style="position:absolute;top:50%;left:50%;width:177.78vh;height:100vh;min-width:100vw;min-height:56.25vw;transform:translate(-50%, -50%);object-fit:cover;z-index:-1;pointer-events:none;"></video>
        <h2>Diseñamos experiencias auténticas, vividas con un confort sin precedentes, para que su única preocupación sea sentir.</h2>
    </div>
    <div class="section" style="background-color: var(--blanco); padding-top: 100px;">
        <div class="container" style="margin-bottom: 20px;">
            <div class="logo">
                <?php echo $GLOBALS['logomabuhay']; ?>
            </div>
            <h2>
                Creemos que el poder de un viaje para transformarle es tan vital como su capacidad para enriquecer el mundo que nos rodea.
            </h2>
            <h3>
                En Mabuhay, somos artesanos de experiencias. Diseñamos viajes que no solo cambian su perspectiva, sino que también dejan un legado positivo en las culturas, las comunidades y el patrimonio que visitamos. Creamos un espacio de serenidad y confort para que reconecte con usted mismo y con sus seres querido
            </h3>
            <button class="borde principal">
                <a href="/destinos">
                    Ver todos los destinos
                </a>
            </button>
        </div>
        <div class="container destinos" style="margin-bottom: 40px;">
            <?php ContentRender::print('destino', [
                'publicacionesPorPagina' => 10,
                'plantillaCallback'      => 'destinoItem',
                'orden'                  => 'random'
            ]); ?>
        </div>
    </div>
<?php
    return ob_get_clean();
}
