<?php

function destinoGaleria(\WP_Post $post, string $itemClass)
{
?>
    <div id="post<?php echo esc_attr($post->ID); ?>" class="<?php echo esc_attr($itemClass); ?> destinoGaleria">
        <?php if (has_post_thumbnail($post)) : ?>
            <div class="imagen">
                <a href="<?php echo esc_url(get_permalink($post)); ?>">
                    <?php echo get_the_post_thumbnail($post, 'medium_large'); ?>
                </a>
                <div class="titulo">
                    <?php echo esc_html(get_the_title($post)); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php
}
