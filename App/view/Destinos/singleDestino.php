<?php


function pageSingleDestino(\WP_Post $post)
{
    ob_start();
?>
    <div class="hero secundario" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'full'); ?>); height: 50vh;">

    </div>

    <div class="container singleDestino" style="background-color: var(--tercero);">
        <h2><?php echo get_the_title($post); ?></h2>
        <p><?php echo get_the_content($post); ?></p>
        <button class="borde principal">
            <a href="/contacto">
                Solicitar viaje
            </a>
        </button>
    </div>

    <div class="container singleDestino galeria" style="background-color: var(--segundo);">
        <h2>Galeria</h2>
    </div>




<?php
    return ob_get_clean();
}
?>