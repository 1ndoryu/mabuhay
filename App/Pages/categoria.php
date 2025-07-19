<?php

use Glory\Components\ContentRender;

function pageCategoria()
{

    ob_start();
?>
    <div class="heroTercero">
        <h2><?php single_cat_title(); ?></h2>
        <h3>
            <?php
            // Obtener el objeto de la categoría actual y mostrar su descripción, si existe
            $categoriaActual = get_queried_object();
            if ($categoriaActual instanceof WP_Term && !empty($categoriaActual->description)) {
                echo esc_html($categoriaActual->description);
            }
            ?>
        </h3>
    </div>

    <?php
    $cat_id = get_queried_object_id();

    ContentRender::print('destino', [
        'publicacionesPorPagina' => -1,
        'plantillaCallback'      => 'destinoGaleria',
        'metaKey'               => 'continente',
        'orden'                 => 'ASC',
        'grupoEncabezado'          => true,
        'grupoOrdenCantidad'      => true,
        'claseContenedor'       => 'destinoGaleriaContenedor',
        'claseItem'             => 'destinoGaleria',
        'argumentosConsulta'     => [
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'field'    => 'term_id',
                    'terms'    => $cat_id,
                ],
            ],
        ],
    ]);

    ?>


<?php
    return ob_get_clean();
}
