<?php

function categoriaItem(\WP_Term $term, string $itemClass)
{
    // 1. Obtener el ID de la imagen desde los metadatos del término.
    $imageId = get_term_meta($term->term_id, 'glory_category_image_id', true);
    $imageUrl = null;

    if ($imageId) {
        // 2. Obtener la URL de la imagen si el ID existe.
        $imageUrl = wp_get_attachment_image_url($imageId, 'medium_large');
    }
?>
    <a href="<?php echo esc_url(get_term_link($term)); ?>" class="<?php echo esc_attr($itemClass); ?> categoriaItem card-style">
        <div class="card-image">
            <?php if ($imageUrl) : ?>
                <img src="<?php echo esc_url($imageUrl); ?>" alt="<?php echo esc_attr($term->name); ?>">
            <?php else : ?>
                <div class="placeholder-image" style="background-color: #e0e0e0; width:100%; height: 100%;"></div>
            <?php endif; ?>

            <div class="card-title-overlay">
                <?php echo esc_html($term->name); ?>
            </div>
        </div>
    </a>
<?php

}
