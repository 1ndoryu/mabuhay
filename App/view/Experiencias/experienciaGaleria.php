<?php

function experienciaGaleria(\WP_Post $post, string $itemClass, int $maxChars = 120)
{
?>
    <div id="post<?php echo esc_attr($post->ID); ?>" class="<?php echo esc_attr($itemClass); ?> experienciaGaleria">
        <?php if (has_post_thumbnail($post)) : ?>
            <div class="imagen">
                <a href="<?php echo esc_url(get_permalink($post)); ?>">
                    <?php echo get_the_post_thumbnail($post, 'medium_large'); ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="titulo">
            <?php echo esc_html(get_the_title($post)); ?>
        </div>
        <div class="descripcion">
            <?php
            // Obtiene la descripción corta (meta) o el excerpt y lo recorta.
            $descripcionMeta = get_post_meta($post->ID, 'descripcion_corta', true);
            if (!empty($descripcionMeta)) {
                $excerpt = $descripcionMeta;
            } else {
                $excerpt = wp_strip_all_tags(get_the_excerpt($post));
                if (mb_strlen($excerpt) > $maxChars) {
                    $excerpt = mb_substr($excerpt, 0, $maxChars - 1) . '…';
                }
            }

            echo esc_html($excerpt);
            ?>
        </div>
    </div>
<?php
}
?> 