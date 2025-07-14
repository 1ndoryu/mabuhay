<?php
/**
 * Plantilla para mostrar los archivos de categoría.
 *
 * Muestra los destinos asociados a la categoría actual usando el componente
 * ContentRender y la plantilla visual destinoItem.
 *
 * @package Mabuhay
 */

use Glory\Components\ContentRender;

get_header();

?>
<main id="contentAjax">
    <section class="section categoria-hero" style="padding-top:120px;padding-bottom:60px;background-color:var(--primero);color:var(--blanco);text-align:center;">
        <div class="container">
            <h1 class="category-title" style="font-size:48px;margin-bottom:15px;"><?php single_cat_title(); ?></h1>
            <?php if (category_description()) : ?>
                <p class="categoria-descripcion" style="font-size:20px;max-width:800px;margin:0 auto;">
                    <?php echo category_description(); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>

    <section class="section categoria-lista" style="padding-top:60px;padding-bottom:60px;background-color:var(--blanco);">
        <div class="container destinos">
            <?php
            $cat_id = get_queried_object_id();
            ContentRender::print('destino', [
                'publicacionesPorPagina' => 12,
                'plantillaCallback'      => 'destinoItem',
                'paginacion'             => true,
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
        </div>
    </section>
</main>
<?php get_footer(); ?> 