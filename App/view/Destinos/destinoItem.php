<?php

function destinoItem(\WP_Post $post, string $itemClass)
{
?>
    <div id="post-<?php echo esc_attr($post->ID); ?>" class="<?php echo esc_attr($itemClass); ?> card-style">
        <?php if (has_post_thumbnail($post)) : ?>
            <a href="<?php echo esc_url(get_permalink($post)); ?>" class="destino-link">
                <div class="card-image">
                    <?php echo get_the_post_thumbnail($post, 'medium_large'); ?>
                    <div class="titulo">
                        <?php echo esc_html(get_the_title($post)); ?>
                    </div>
                </div>
            </a>
        <?php endif; ?>
    </div>
<?php
}
