<?php

use Glory\Components\ContentRender;
use Glory\Utility\AssetsUtility;

function pageDestinos()
{
    ob_start();
?>
    <div class="hero secundario" style="background-image: url(<?php AssetsUtility::imagenUrl('inicio', 'jpg'); ?>);">
        <h2>Destinos</h2>
    </div>

    
    <?php ContentRender::print('destino', [
        'publicacionesPorPagina' => 50,
        'plantillaCallback'      => 'destinoGaleria',
        'orden'                  => 'random',
        'itemClass'              => 'destinoGaleria',
        'claseContenedor'        => 'destinoGaleriaContenedor'
    ]); ?>

<?php
    return ob_get_clean();
}
?>