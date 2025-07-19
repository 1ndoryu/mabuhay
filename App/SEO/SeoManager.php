<?php
// App/SEO/SeoManager.php

namespace App\SEO;

class SeoManager
{
    /**
     * Inicializa el gestor de SEO añadiendo los hooks necesarios.
     */
    public static function init()
    {
        // Usamos una prioridad alta (99) para asegurarnos de que nuestras etiquetas se impriman al final del <head>.
        add_action('wp_head', [self::class, 'renderSeoTags'], 99);

        // Eliminamos la acción de WordPress que genera el título para tener control total.
        remove_action('wp_head', '_wp_render_title_tag', 1);
    }

    /**
     * Renderiza todas las etiquetas SEO en el <head> de la página.
     */
    public static function renderSeoTags()
    {
        $site_name        = get_bloginfo('name');
        $site_description = get_bloginfo('description');
        $current_url      = home_url($_SERVER['REQUEST_URI']);

        $title       = self::generateTitle($site_name);
        $description = self::generateDescription($site_description);

        // --- Etiquetas fundamentales ---
        echo '<title>' . esc_html($title) . "</title>\n";
        echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
        echo '<link rel="canonical" href="' . esc_url($current_url) . '">' . "\n";

        // --- Open Graph ---
        echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url($current_url) . '">' . "\n";
        echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
        echo '<meta property="og:type" content="' . (is_singular(['destino', 'experiencia']) ? 'article' : 'website') . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url(self::generateImage()) . '">' . "\n";

        // --- Datos estructurados (JSON-LD) ---
        echo self::generateJsonLd($site_name, $description);
    }

    /**
     * Genera el título de la página de forma dinámica.
     */
    private static function generateTitle($site_name)
    {
        if (is_front_page() || is_home()) {
            $tagline = get_bloginfo('description');
            return $tagline ? ($site_name . ' | ' . $tagline) : $site_name;
        } elseif (is_singular()) {
            return get_the_title() . ' | ' . $site_name;
        } elseif (is_category() || is_tax()) {
            return single_term_title('', false) . ' | ' . $site_name;
        } elseif (is_page()) {
            return get_the_title() . ' | ' . $site_name;
        }
        return $site_name;
    }

    /**
     * Genera la meta descripción de la página.
     */
    private static function generateDescription($default_description)
    {
        if (is_singular(['destino', 'experiencia'])) {
            $excerpt = get_the_excerpt();
            if (has_excerpt()) {
                return esc_attr(strip_tags($excerpt));
            }
            $content = strip_tags(get_the_content());
            return esc_attr(wp_trim_words($content, 25, '...'));
        }

        if (is_category() || is_tax()) {
            $term_description = term_description();
            if (!empty($term_description)) {
                return esc_attr(strip_tags($term_description));
            }
        }

        if (empty($default_description) && (is_front_page() || is_home())) {
            // Intentamos usar el extracto de la página de inicio si existe
            $front_page_id = get_option('page_on_front');
            if ($front_page_id) {
                $front_excerpt = get_post_field('post_excerpt', $front_page_id);
                if (!empty($front_excerpt)) {
                    return esc_attr(strip_tags($front_excerpt));
                }
                $front_content = get_post_field('post_content', $front_page_id);
                if (!empty($front_content)) {
                    return esc_attr(wp_trim_words(strip_tags($front_content), 25, '...'));
                }
            }
        }

        return esc_attr($default_description);
    }

    /**
     * Obtiene la URL de la imagen destacada o una imagen por defecto.
     */
    private static function generateImage()
    {
        if (is_singular() && has_post_thumbnail()) {
            return get_the_post_thumbnail_url(get_the_ID(), 'large');
        }
        // Imagen por defecto
        return get_template_directory_uri() . '/assets/images/inicio.jpg';
    }

    /**
     * Genera el script JSON-LD con datos estructurados.
     */
    private static function generateJsonLd($site_name, $site_description)
    {
        $schema = [
            '@context' => 'https://schema.org',
        ];

        if (is_singular('destino')) {
            $schema['@type']      = 'TouristDestination';
            $schema['name']       = get_the_title();
            $schema['description'] = self::generateDescription('');
            $schema['image']      = self::generateImage();
        } else {
            $schema['@type']       = 'TravelAgency';
            $schema['name']        = $site_name;
            $schema['description'] = $site_description;
            $schema['url']         = home_url('/');
            $schema['telephone']   = '+34640366580';
            $schema['email']       = 'rodrigo@mabuhayviajes.com';
        }

        return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
} 