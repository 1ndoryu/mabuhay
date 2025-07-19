<?php

use Glory\Components\ContentRender;
use Glory\Utility\AssetsUtility;

function pageDestinos()
{
    ob_start();
?>
    <div class="heroTercero">
        <h2>Destinos</h2>
        <h3>
            Descubre nuestros destinos exclusivos alrededor del mundo. Cada lugar ha sido seleccionado para ofrecerte experiencias auténticas, confort inigualable y la oportunidad de conectar con culturas fascinantes. Explora, sueña y déjate inspirar por la diversidad de paisajes y aventuras que te esperan.
        </h3>
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