<?php

use Glory\Utility\AssetsUtility;

function home()
{
    ob_start();
?>
    <div class="hero">
        <?php
        AssetsUtility::imagen('inicio', 'jpg', [
            'class' => 'img-fluid',
            'alt' => 'Fondo principal de la web',
            'id' => 'hero-img'
        ]);
        ?>
    </div>
<?php
    return ob_get_clean();
}
