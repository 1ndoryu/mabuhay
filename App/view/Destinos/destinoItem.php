<?php

function destinoItem(\WP_Post $post, string $itemClass)
{
?>
    <div id="post-<?php echo esc_attr($post->ID); ?>" class="<?php echo esc_attr($itemClass); ?> card-style">
        <?php if (has_post_thumbnail($post)) : ?>
            <div class="card-image">
                <a href="<?php echo esc_url(get_permalink($post)); ?>">
                    <?php echo get_the_post_thumbnail($post, 'medium_large'); ?>
                </a>
                <div class="card-title-overlay">
                    <?php echo esc_html(get_the_title($post)); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php
}
