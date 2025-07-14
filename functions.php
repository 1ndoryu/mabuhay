<?php

$directorioTemaActivo = get_stylesheet_directory();

$autoloader = get_template_directory() . '/vendor/autoload.php';
if (file_exists($autoloader)) {
    require_once $autoloader;
} else {
    error_log('Error: Composer autoload no encontrado. Ejecuta "composer install".');
}

$glory_loader = get_template_directory() . '/Glory/load.php';
if (file_exists($glory_loader)) {
    require_once $glory_loader;
} else {
    error_log('Error: Glory Framework loader no encontrado.');
}

require_once __DIR__ . '/vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
} catch (Exception $e) {
    error_log('Error al cargar el archivo .env: ' . $e->getMessage());
}


function incluirArchivos($directorio)
{
    $ruta_completa = get_template_directory() . "/$directorio";

    $archivos = glob($ruta_completa . "*.php");
    foreach ($archivos as $archivo) {
        include_once $archivo;
    }

    $subdirectorios = glob($ruta_completa . "*/", GLOB_ONLYDIR);
    foreach ($subdirectorios as $subdirectorio) {
        $ruta_relativa = str_replace(get_template_directory() . '/', '', $subdirectorio);
        incluirArchivos($ruta_relativa);
    }
}

$directorios = [
    'App/',
    'Glory/',

];

foreach ($directorios as $directorio) {
    incluirArchivos($directorio);
}


function fuentes()
{

}
add_action('wp_head', 'fuentes', 1);

// Asegurar que los archivos de categoría solo muestren destinos.
add_action('pre_get_posts', function ($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_category()) {
        $query->set('post_type', ['destino']);
    }
});

// --- Sincronización de contenido por defecto también en frontend ---
add_action('init', function () {
    if (is_admin()) {
        return; // El sincronizador ya corre en admin
    }

    $needsSync = false;

    // Detectar si existen categorías distintas a la default
    $defaultCat = (int) get_option('default_category');
    $termsCheck  = get_terms([
        'taxonomy'   => 'category',
        'hide_empty' => false,
        'exclude'    => [$defaultCat],
        'number'     => 1,
        'fields'     => 'ids',
    ]);

    if (empty($termsCheck)) {
        \Glory\Core\GloryLogger::info('Frontend: No hay categorías personalizadas, se forzará sincronización.');
        $needsSync = true;
    }

    if ($needsSync || false === get_transient('glory_default_content_synced_front')) {
        // Ejecutar sincronización manual
        if (class_exists('\\Glory\\Services\\DefaultContentSynchronizer')) {
            \Glory\Core\GloryLogger::info('Frontend: Ejecutando sincronización de contenido por defecto');
            $sync = new \Glory\Services\DefaultContentSynchronizer();
            $sync->sincronizar();
        } else {
            \Glory\Core\GloryLogger::error('Frontend: DefaultContentSynchronizer no encontrado');
        }
        // Guardamos transient por 24h para evitar sobrecarga
        if (!$needsSync) {
            set_transient('glory_default_content_synced_front', 1, DAY_IN_SECONDS);
        }
    }
}, 11);

/**
 * =========================================================================
 * Botón y Lógica para Forzar la Sincronización de Contenido de Glory
 * =========================================================================
 */

// 1. Añade el botón "Forzar Sincronización Glory" a la barra de administración de WordPress.
add_action('admin_bar_menu', function ($wp_admin_bar) {
    // Asegurarse de que solo los administradores vean el botón.
    if (!current_user_can('manage_options')) {
        return;
    }

    // Argumentos para el nuevo botón.
    $args = [
        'id'    => 'glory_force_sync',
        'title' => '🔄 Forzar Sincronización Glory',
        'href'  => add_query_arg('force_glory_sync', 'true'), // Añade el parámetro a la URL actual.
        'meta'  => [
            'class' => 'glory-force-sync-button',
            'title' => 'Ejecuta manualmente el sincronizador de contenido por defecto de Glory (destinos, categorías, etc.)'
        ]
    ];

    // Añade el botón a la barra de administración.
    $wp_admin_bar->add_node($args);
}, 999); // Prioridad alta para que aparezca al final.

// 2. Escucha la petición del botón y ejecuta la sincronización.
add_action('init', function () {
    // Comprobar que el usuario puede, que el parámetro existe y que no estamos ya mostrando un aviso.
    if (isset($_GET['force_glory_sync']) && $_GET['force_glory_sync'] === 'true' && current_user_can('manage_options') && !isset($_GET['glory_sync_notice'])) {
        
        // Ejecuta la lógica de sincronización.
        if (class_exists('\\Glory\\Services\\DefaultContentSynchronizer')) {
            \Glory\Core\GloryLogger::info('Sincronización manual forzada por el usuario desde la barra de admin.');
            $sync = new \Glory\Services\DefaultContentSynchronizer();
            $sync->sincronizar();
            
            // Prepara la URL para redirigir, añadiendo un parámetro para mostrar el aviso.
            $redirect_url = add_query_arg('glory_sync_notice', 'true', remove_query_arg('force_glory_sync'));
            wp_safe_redirect($redirect_url);
            exit;
        }
    }
});

// 3. Muestra un aviso de éxito después de la redirección.
add_action('admin_notices', function () {
    if (isset($_GET['glory_sync_notice']) && $_GET['glory_sync_notice'] === 'true') {
        echo '<div class="notice notice-success is-dismissible"><p><strong>Sincronización de Glory completada con éxito.</strong></p></div>';
    }
});
