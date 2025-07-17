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

PostTypeManager::define(
    'experiencia',
    [
        'has_archive' => true,
        'rewrite'     => ['slug' => 'experiencias'],
        'menu_icon'   => 'dashicons-star-filled',
        'supports'    => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'taxonomies'  => ['category'],
    ],
    'Experiencia',
    'Experiencias'
);

// Registra todos los CPTs definidos anteriormente.
PostTypeManager::register();