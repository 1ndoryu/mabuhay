<?php
// App/SEO/SitemapGenerator.php

namespace App\SEO;

class SitemapGenerator
{
    /**
     * Inicializa el generador de sitemap añadiendo la regla de reescritura.
     */
    public static function init()
    {
        add_action('init', [self::class, 'addSitemapRewriteRule']);
        add_action('template_redirect', [self::class, 'renderSitemap']);
    }

    /**
     * Añade la regla para que /sitemap.xml sea gestionado por WordPress.
     */
    public static function addSitemapRewriteRule()
    {
        add_rewrite_rule('^sitemap\.xml$', 'index.php?sitemap=1', 'top');
    }

    /**
     * Si la URL es /sitemap.xml, genera y muestra el XML.
     */
    public static function renderSitemap()
    {
        if (get_query_var('sitemap')) {
            header('Content-Type: text/xml; charset=utf-8');
            echo '<?xml version="1.0" encoding="UTF-8"?>';
            ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
            // Páginas estáticas
            $pages = get_pages();
            foreach ($pages as $page) {
                self::sitemapUrl(get_permalink($page->ID), '0.8', 'monthly');
            }

            // Destinos y Experiencias
            $post_types = ['destino', 'experiencia'];
            $query      = new \WP_Query([
                'post_type'      => $post_types,
                'posts_per_page' => -1,
                'post_status'    => 'publish',
            ]);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    self::sitemapUrl(get_permalink(), '1.0', 'weekly');
                }
            }
            wp_reset_postdata();

            // Categorías
            $categories = get_categories(['hide_empty' => true]);
            foreach ($categories as $category) {
                self::sitemapUrl(get_category_link($category->term_id), '0.7', 'monthly');
            }
?>
</urlset>
<?php
            exit();
        }
    }

    /**
     * Helper para imprimir una entrada <url> dentro del sitemap.
     */
    private static function sitemapUrl($loc, $priority, $changefreq)
    {
        echo '<url>';
        echo '<loc>' . esc_url($loc) . '</loc>';
        echo '<priority>' . esc_html($priority) . '</priority>';
        echo '<changefreq>' . esc_html($changefreq) . '</changefreq>';
        echo '</url>';
    }
} 