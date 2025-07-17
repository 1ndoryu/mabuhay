<?php

use Glory\Components\ContentRender;

function pageExperiencias()
{
    ob_start();
    ?>
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