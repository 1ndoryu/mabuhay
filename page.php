<?php
/*
 * Plantilla genérica para páginas (page.php)
 * Muestra el título y el contenido de la página con el estilo global.
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding: 60px 20px; max-width: 800px; margin: 0 auto;">
            <h1 class="entry-title" style="text-align: center; margin-bottom: 40px;">
                <?php the_title(); ?>
            </h1>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php
get_footer();
?> 