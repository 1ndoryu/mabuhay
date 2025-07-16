<?php

use Glory\Components\ContentRender;

function pageCategoria()
{
    // Determinar la imagen y los estilos del hero según la categoría actual
    $cat_obj = get_queried_object();
    $cat_name = $cat_obj->name ?? '';
    $imagenHeroUrl = '';
    if (isset($GLOBALS['glory_imagen_por_categoria'][$cat_name])) {
        $fileName = $GLOBALS['glory_imagen_por_categoria'][$cat_name];
        $imagenHeroUrl = get_template_directory_uri() . '/assets/images/' . $fileName;
    }

    // Construir los estilos para el hero
    $heroStyles = 'color:var(--blanco);text-align:center;';
    if ($imagenHeroUrl) {
        $heroStyles .= "background:linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{$imagenHeroUrl}');background-size:cover;background-position:center;";
    } else {
        $heroStyles .= 'background-color:var(--primero);';
    }

    ob_start();
?>
    <section class="section categoria-hero" style="<?php echo esc_attr($heroStyles); ?> min-height:unset; height:300px;">
        <div class="container">
            <h2><?php single_cat_title(); ?></h2>
        </div>
    </section>


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
