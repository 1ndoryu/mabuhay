<?php 

use Glory\Core\AssetManager;
use Glory\Core\PageManager;
use Glory\Manager\CreditosManager;

// Configuración unificada para todos los assets a través de AssetManager
AssetManager::setGlobalDevMode(true);
AssetManager::setThemeVersion('0.1.2');

// Definición de carpetas de assets
AssetManager::defineFolder('script', '/js/');
AssetManager::defineFolder('style', '/assets/css/');

// Definición de páginas
PageManager::define('home');

// Inicialización de otros servicios
CreditosManager::init();
CreditosManager::recargaPeriodica(true, 10, 1);

function themeSetup()
{
    # Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'themeSetup');

add_filter('show_admin_bar', '__return_false');