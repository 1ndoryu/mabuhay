<?php
// Archivo de configuración de categorías de Glory.
// Aquí podrás añadir, modificar o eliminar categorías, junto con su descripción
// y la imagen por defecto que se usará para el término de WordPress.
// -----------------------------------------------------------------------------
// Estructura de cada elemento:
// [
//     'nombre'        => 'Nombre visible de la categoría',
//     'descripcion'   => 'Texto descriptivo que se mostrará en listados/páginas',
//     'imagenAsset'   => 'nombre-del-archivo.jpg' // Ubicado en assets/images
// ]
// -----------------------------------------------------------------------------

$categoriasDefinicion = [
    [
        'nombre'      => 'Cultura e Historia Milenaria',
        'descripcion' => 'Viajes centrados en descubrir civilizaciones ancestrales, su legado arquitectónico y tradiciones vivas.',
        'imagenAsset' => 'cultura.jpg',
    ],
    [
        'nombre'      => 'Lunas de Miel y Escapadas Románticas',
        'descripcion' => 'Destinos pensados para parejas que buscan celebrar el amor en entornos exclusivos y llenos de encanto.',
        'imagenAsset' => 'romantico.jpg',
    ],
    [
        'nombre'      => 'Viajes Espirituales y de Conexión',
        'descripcion' => 'Experiencias que invitan a la introspección, la calma y el encuentro con tradiciones espirituales milenarias.',
        'imagenAsset' => 'espiritual.jpg',
    ],
    [
        'nombre'      => 'Paraísos Tropicales y Relax',
        'descripcion' => 'Playas de ensueño, aguas cristalinas y la tranquilidad perfecta para desconectar de la rutina.',
        'imagenAsset' => 'playa.jpg',
    ],
    [
        'nombre'      => 'Aventura y Exploración',
        'descripcion' => 'Rutas para espíritus intrépidos que buscan emociones fuertes y paisajes imponentes.',
        'imagenAsset' => 'aventura.jpg',
    ],
    [
        'nombre'      => 'Naturaleza y Vida Salvaje',
        'descripcion' => 'Encuentros auténticos con la fauna y la flora más espectaculares del planeta en su hábitat natural.',
        'imagenAsset' => 'naturaleza.jpg',
    ],
];

// ----------------------------------------------------------------------------
// A partir de la definición construimos los mapas que utilizará el framework
// ----------------------------------------------------------------------------
$GLOBALS['glory_imagen_por_categoria']        = $GLOBALS['glory_imagen_por_categoria'] ?? [];
$GLOBALS['glory_descripcion_por_categoria']  = [];

foreach ($categoriasDefinicion as $cat) {
    if (isset($cat['nombre'], $cat['imagenAsset'])) {
        // Si ya existía una imagen previa para la categoría, la respetamos
        if (!isset($GLOBALS['glory_imagen_por_categoria'][$cat['nombre']])) {
            $GLOBALS['glory_imagen_por_categoria'][$cat['nombre']] = $cat['imagenAsset'];
        }
    }
    if (isset($cat['nombre'], $cat['descripcion'])) {
        $GLOBALS['glory_descripcion_por_categoria'][$cat['nombre']] = $cat['descripcion'];
    }
}

// Si deseas acceder a la definición completa en otro punto del código:
$GLOBALS['glory_categorias_definidas'] = $categoriasDefinicion; 