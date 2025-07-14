<?php

use Glory\Core\PostTypeManager;

PostTypeManager::define(
    'destino',
    [
        'has_archive' => true,
        'rewrite'     => ['slug' => 'destinos'],
        'menu_icon'   => 'dashicons-location',
        'supports'    => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'taxonomies'  => ['category'],
    ],
    'Destino',
    'Destinos'
);

// Registra todos los CPTs definidos anteriormente.
PostTypeManager::register();