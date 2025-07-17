<?php

use Glory\Manager\DefaultContentManager;

$experiencias = [
    [
        'slugDefault' => 'TemploBudista',
        'titulo' => 'Dormir en un Templo Budista (Shukubo) en Japón',
        'contenido' => 'Vive la hospitalidad japonesa en su estado más puro y espiritual. Esta experiencia te invita a alejarte del bullicio para encontrar una calma profunda en un entorno de absoluto silencio. Al pasar la noche en un templo activo en Koyasan, conocido como "shukubo", tendrás la oportunidad de participar en ceremonias matutinas junto a los monjes y probar la cocina vegetariana zen, llamada "shōjin ryōri". Es una inmersión total en la espiritualidad japonesa, durmiendo en tatamis y vistiendo yukatas, en un ambiente donde cada ritual es una invitación a la paz interior.',
        'imagenDestacadaAsset' => 'templo.jpg',
        'metaEntrada' => [
            'descripcion_corta' => 'Noche espiritual en un templo budista en Koyasan, entre cantos matutinos y tatamis tradicionales.',
            'pais' => 'Japón'
        ]
    ],
    [
        'slugDefault' => 'DiaMuertosOaxaca',
        'titulo' => 'Vivir el Día de los Muertos en Oaxaca, México',
        'contenido' => 'Participa en una de las celebraciones más mágicas y únicas del mundo. Lejos de ser una ocasión sombría, el Día de los Muertos en lugares como Oaxaca es una fiesta a la vida, donde las calles se transforman con un torrente de flores, velas y altares dedicados a los seres queridos que han partido. Esta experiencia te permite conectar con una tradición ancestral vibrante, donde la alegría, el color y el profundo respeto por la memoria se entrelazan en un espectáculo cultural y emocional que contagia y conmueve.',
        'imagenDestacadaAsset' => 'muertos.jpg',
        'metaEntrada' => [
            'descripcion_corta' => 'Celebra el colorido Día de Muertos en Oaxaca, entre altares floridos y calacas festivas.',
            'pais' => 'México'
        ]
    ],
    [
        'slugDefault' => 'GloboSerengeti',
        'titulo' => 'Paseo en Globo sobre el Serengeti al Amanecer en Tanzania',
        'contenido' => 'Eleva tus sentidos con una de las experiencias más serenas y sobrecogedoras de África. Flotar en silencio sobre las vastas llanuras del Serengeti mientras el sol tiñe el horizonte de dorado es un espectáculo inolvidable. Desde el aire, la vida salvaje se revela en su máximo esplendor: jirafas, elefantes y leones se mueven en libertad por la sabana. Esta aventura combina la inmensidad del paisaje africano con una perspectiva única, creando un recuerdo que transforma el alma.',
        'imagenDestacadaAsset' => 'globo.jpg',
        'metaEntrada' => [
            'descripcion_corta' => 'Surca el amanecer sobre la sabana del Serengeti, observando la fauna salvaje desde las alturas.',
            'pais' => 'Tanzania'
        ]
    ],
    [
        'slugDefault' => 'CapsulaValleSagrado',
        'titulo' => 'Dormir en una Cápsula Colgante en el Valle Sagrado, Perú',
        'contenido' => 'Para los viajeros más atrevidos, esta es una experiencia que redefine el concepto de alojamiento. Imagina pasar la noche en una cápsula de lujo, completamente transparente, suspendida a más de 400 metros de altura en un acantilado del Valle Sagrado de los Incas. Esta vivencia no solo ofrece adrenalina y aventura, sino también vistas panorámicas imponentes de un paisaje místico. Es una forma extrema y única de conectar con la grandeza de los Andes, combinando la emoción con el confort en un entorno espectacular.',
        'imagenDestacadaAsset' => 'capsula.jpg',
        'metaEntrada' => [
            'descripcion_corta' => 'Duerme suspendido sobre el majestuoso Valle Sagrado, con vistas panorámicas a los Andes peruanos.',
            'pais' => 'Perú'
        ]
    ],
    [
        'slugDefault' => 'CampamentoWadiRum',
        'titulo' => 'Noche bajo las Estrellas en un Campamento Beduino en Jordania',
        'contenido' => 'Adéntrate en el corazón del desierto de Wadi Rum, conocido como el "Valle de la Luna", y vive una experiencia auténtica y memorable. Pasar la noche en un campamento beduino te permite desconectar del mundo y maravillarte con un cielo estrellado de una claridad sobrecogedora. La experiencia se completa con una cena tradicional, música y relatos ancestrales compartidos al calor del fuego, sumergiéndote por completo en la legendaria hospitalidad de la cultura del desierto.',
        'imagenDestacadaAsset' => 'desierto.jpg',
        'metaEntrada' => [
            'descripcion_corta' => 'Noche estrellada en el desierto de Wadi Rum, al calor del fuego beduino y leyendas ancestrales.',
            'pais' => 'Jordania'
        ]
    ],
    [
        'slugDefault' => 'CuevasWaitomo',
        'titulo' => 'Explorar las Cuevas de Waitomo y sus Luciérnagas en Nueva Zelanda',
        'contenido' => 'Embárcate en un viaje mágico a un mundo subterráneo iluminado por miles de seres vivos. Un paseo silencioso en bote bajo los techos de las cuevas de Waitomo revela un espectáculo natural casi surrealista: miles de luciérnagas brillan en la oscuridad, creando un firmamento subterráneo. Esta experiencia te conecta con la belleza serena y misteriosa de la naturaleza, ofreciendo un momento de asombro puro en uno de los fenómenos más singulares del planeta.',
        'imagenDestacadaAsset' => 'waitomo.jpg',
        'metaEntrada' => [
            'descripcion_corta' => 'Navega entre luciérnagas en las cuevas de Waitomo, bajo un firmamento subterráneo resplandeciente.',
            'pais' => 'Nueva Zelanda'
        ]
    ]
];

// Agregar automáticamente la galería a cada experiencia
foreach ($experiencias as &$e) {
    if (isset($e['imagenDestacadaAsset'])) {
        $base = preg_replace('/\.[^.]+$/', '', strtolower($e['imagenDestacadaAsset']));
        $e['galeriaAssets'] = [
            $e['imagenDestacadaAsset'],
            $base . '1.jpg',
            $base . '2.jpg',
            $base . '3.jpg',
        ];
    }
}
unset($e);

DefaultContentManager::define('experiencia', $experiencias, 'smart', true);

DefaultContentManager::register(); 