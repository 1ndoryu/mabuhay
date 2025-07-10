<?php

/*
// En cualquier plantilla de tu tema (ej. page.php)

use Glory\Components\ContentPrinter;

// Incluir tu archivo de plantillas personalizadas si es necesario
// require_once get_template_directory() . '/view/Examples/content-template.php';

// Imprimir los últimos 5 'proyectos' usando una plantilla de tarjeta personalizada
ContentPrinter::print('proyecto', [
    'publicacionesPorPagina' => 5,
    'claseContenedor'        => 'grid-proyectos',
    'claseItem'              => 'grid-item-proyecto',
    'paginacion'             => true,
    'plantillaCallback'      => 'mi_plantilla_de_tarjeta' 
]);
*/

/**
 * Ejemplo de una función de plantilla de contenido personalizada para ContentPrinter.
 *
 * @param WP_Post $post El objeto del post actual.
 * @param string $itemClass La clase CSS para el contenedor del item.
 */
/*
function mi_plantilla_de_tarjeta(\WP_Post $post, string $itemClass)
{
?>
    <div id="post-<?php echo esc_attr($post->ID); ?>" class="<?php echo esc_attr($itemClass); ?> card-style">
        <?php if (has_post_thumbnail($post)) : ?>
            <div class="card-image">
                <a href="<?php echo esc_url(get_permalink($post)); ?>">
                    <?php echo get_the_post_thumbnail($post, 'medium_large'); ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="card-content">
            <h3 class="card-title">
                <a href="<?php echo esc_url(get_permalink($post)); ?>">
                    <?php echo esc_html(get_the_title($post)); ?>
                </a>
            </h3>
            <div class="card-excerpt">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php echo esc_url(get_permalink($post)); ?>" class="card-read-more">Leer más</a>
        </div>
    </div>
<?php
}
*/