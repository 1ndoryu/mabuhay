<?php

use Glory\Components\ContentRender;
use Glory\Utility\AssetsUtility;

function pageExperiencias()
{
    ob_start();
?>
    <div class="hero secundario" style="background-image: url(<?php AssetsUtility::imagenUrl('inicio', 'jpg'); ?>);">
        <h2>Experiencias</h2>
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