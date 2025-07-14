<?php

function categoriaItem(\WP_Term $term, string $itemClass)
{
?>
    <div class="<?php echo esc_attr($itemClass); ?> categoriaItem card-style">
        <?php echo esc_html($term->name); ?>
    </div>
<?php
}
