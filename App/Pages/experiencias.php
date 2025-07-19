<?php

use Glory\Components\ContentRender;
use Glory\Utility\AssetsUtility;

function pageExperiencias()
{
    ob_start();
?>
    <div class="heroTercero">
        <h2>Experiencias</h2>
        <h3>
            Descubre una selección de experiencias únicas y memorables, inspiradas en los destinos exclusivos que ofrece nuestra agencia de viajes. Cada experiencia está diseñada para sorprenderte, emocionarte y acercarte a la esencia de cada lugar, permitiéndote vivir momentos inolvidables alrededor del mundo.
        </h3>
    </div>
    <?php
    ContentRender::print('experiencia', [
        'publicacionesPorPagina' => -1,
        'plantillaCallback'      => 'experienciaGaleria',
        'orden'                  => 'ASC',
        'claseContenedor'        => 'experienciaGaleriaContenedor',
        'claseItem'              => 'experienciaGaleria'
    ]);
    ?>
<?php
    return ob_get_clean();
}
?>