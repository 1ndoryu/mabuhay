<?php 

use Glory\Core\AssetManager;
use Glory\Core\PageManager;

AssetManager::setGlobalDevMode(true);
AssetManager::setThemeVersion('0.1.1');
AssetManager::defineFolder('script', '/assets/js/');
AssetManager::defineFolder('style', '/assets/css/');

PageManager::define('home');
PageManager::define('destino');
PageManager::define('nosotros');

# CreditosManager::init();
# CreditosManager::recargaPeriodica(true, 10, 1);

function themeSetup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'themeSetup');

add_filter('show_admin_bar', '__return_false');