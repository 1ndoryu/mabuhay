<?php

use Glory\Utility\AssetsUtility;
use Glory\Components\ContentRender;
use Glory\Components\TermRender;

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
            <a href="/destino">
                <button class="borde principal">
                    Ver todos los destinos
                </button>
            </a>
        </div>
        <div class="container destinos" style="margin-bottom: 40px;">
            <?php ContentRender::print('destino', [
                'publicacionesPorPagina' => 10,
                'plantillaCallback'      => 'destinoItem',
                'orden'                  => 'random'
            ]); ?>
        </div>
    </div>

    <!-- aqui va una seccion de llamado a la acción -->
    <div class="section" style="position: relative;">
        <div style="
            position: absolute;
            inset: 0;
            z-index: 0;
            ">
            <img src="<?php AssetsUtility::imagenUrl('inicio1', 'jpg'); ?>" alt="Fondo" style="width:100%;height:100%;object-fit:cover;filter:brightness(60%);display:block;">
        </div>
        <div class="container" style="position: relative; z-index: 1;">
            <h2 style="color: var(--blanco);">
                Descubra el mundo con una nueva mirada. Atrévase a vivir experiencias que transforman, conectan y dejan huella. <br>
            </h2>
            <h3 style="color: var(--blanco);">Su próxima aventura comienza aquí. ¿Está listo para sentir, explorar y crear recuerdos inolvidables?</h3>
            <a href="/contacto">
                <button class="borde principal" style="border-color: var(--blanco); color: var(--blanco);">
                    Planificar mi viaje
                </button>
            </a>
        </div>
    </div>

    <div class="section categorias" style="background-color: var(--segundo);">

        <div class="container categorias">
            <h2>¿Qué tipo de viaje estás buscando?</h2>
            <?php TermRender::print('category', [
                'numero'            => 12,
                'plantillaCallback' => 'categoriaItem',
                'ordenRandom'       => true,
                'argumentosConsulta' => [
                    'exclude'    => [get_option('default_category')],
                    'hide_empty' => false,
                ],
            ]); ?>
        </div>
    </div>

    <div class="section experiencias" style="background-color: var(--blanco);">
        <div class="container experiencias">
            <h2>Experiencias</h2>
            <div class="galeria-wrapper">
                <button class="galeria-prev" aria-label="Anterior">&#10094;</button>
                <div class="grid-galeria">
                    <?php ContentRender::print('experiencia', [
                        'publicacionesPorPagina' => 6,
                        'plantillaCallback'      => 'experienciaGaleria',
                        'orden'                  => 'random'
                    ]); ?>
                </div>
                <button class="galeria-next" aria-label="Siguiente">&#10095;</button>
            </div>
        </div>
    </div>

    <?php
    return ob_get_clean();
}
