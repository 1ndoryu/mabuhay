<?php

function pageSingleExperiencia(\WP_Post $post)
{
    ob_start();
?>
    <div class="hero secundario" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, 'full'); ?>); height: 50vh;">

    </div>

    <div class="container singleExperiencia" style="background-color: var(--tercero);">
        <h2><?php echo get_the_title($post); ?></h2>
        <p><?php echo get_the_content($post); ?></p>
        <button class="borde principal">
            <a href="/contacto">
                Solicitar experiencia
            </a>
        </button>
    </div>

    <div class="container singleExperiencia galeria" style="background-color: var(--segundo);">
        <h2>Galería</h2>
        <div class="galeria-wrapper">
            <button class="galeria-prev" aria-label="Anterior">&#10094;</button>
            <div class="grid-galeria">
                <?php
                $idsGaleria = get_post_meta($post->ID, '_glory_default_galeria_ids', true);
                if (is_array($idsGaleria)) {
                    foreach ($idsGaleria as $idAdjunto) {
                        $urlImg = wp_get_attachment_image_url($idAdjunto, 'large');
                        if ($urlImg) {
                            echo '<img src="' . esc_url($urlImg) . '" alt="Galería" class="item-galeria">';
                        }
                    }
                }
                ?>
            </div>
            <button class="galeria-next" aria-label="Siguiente">&#10095;</button>
        </div>
    </div>

    <!-- Overlay para imagen ampliada -->
    <div class="galeria-overlay oculto">
        <img src="" alt="Imagen ampliada" />
    </div>

<?php
    return ob_get_clean();
}
?> 