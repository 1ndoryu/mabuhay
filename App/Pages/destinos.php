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

    <?php
    ContentRender::print('destino', [
        'publicacionesPorPagina' => -1,              // Todos los destinos
        'plantillaCallback'      => 'destinoGaleria',
        'metaKey'               => 'continente',    // Meta para ordenar y agrupar
        'orden'                 => 'ASC',           // Alfabético ascendente
        'grupoEncabezado'          => true,            // Mostrar encabezado de continente
        'claseContenedor'       => 'destinoGaleriaContenedor',
        'claseItem'             => 'destinoGaleria'
    ]);
    ?>

<?php
    return ob_get_clean();
}
?>