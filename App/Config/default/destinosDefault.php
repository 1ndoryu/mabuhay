<?php

use Glory\Manager\DefaultContentManager;

$destinos = [
    [
        'slugDefault' => 'Japon',
        'titulo' => 'Japon',
        'contenido' => 'Japon es un viaje a la armonía entre tradición y modernidad. Desde los santuarios silenciosos de Kioto hasta el dinamismo luminoso de Tokio, cada rincón ofrece una lección de belleza, respeto y detalle. Es un país donde el arte de vivir se expresa en cada gesto, cada jardín, cada plato servido con ceremonia.',
        'imagenDestacadaAsset' => 'japon.jpg'
    ],
    [
        'slugDefault' => 'China',
        'titulo' => 'China',
        'contenido' => 'China es un viaje al alma de una civilización milenaria que sigue latiendo con fuerza. Desde la Gran Muralla que serpentea entre montañas eternas hasta las luces vibrantes de Shanghái, cada paso revela historia, sabiduría y contraste. Es un país donde los dragones del pasado conviven con la innovación del futuro, y donde cada templo, cada calle y cada sabor cuentan una historia ancestral.',
        'imagenDestacadaAsset' => 'china.jpg'
    ],
    [
        'slugDefault' => 'India',
        'titulo' => 'India',
        'contenido' => 'India es un viaje hacia lo sagrado, lo caótico y lo profundamente humano. Un país donde cada calle es una escena viva, cada templo una historia, y cada plato un universo de sabores. Desde el majestuoso Taj Mahal hasta los ghats de Varanasi, desde los palacios del Rajastán hasta los retiros espirituales del Himalaya, India no se recorre: se siente. Es un destino que transforma, que reta y que maravilla a partes iguales. Un lugar donde lo ancestral y lo contemporáneo conviven sin fronteras.',
        'imagenDestacadaAsset' => 'india.jpg'
    ],
    [
        'slugDefault' => 'Tailandia',
        'titulo' => 'Tailandia',
        'contenido' => 'Tailandia es un destino donde los sentidos despiertan. Templos dorados que brillan bajo el sol, playas de aguas turquesas, mercados flotantes llenos de aromas exóticos y una hospitalidad que se siente en cada sonrisa. Viajar a Tailandia es sumergirse en una cultura vibrante, en la armonía del budismo y en una gastronomía que conquista desde el primer bocado. Un país que combina lo sagrado y lo sensual, lo ancestral y lo moderno, con una naturalidad única.',
        'imagenDestacadaAsset' => 'tailandia.jpg'
    ],
    [
        'slugDefault' => 'Vietnam',
        'titulo' => 'Vietnam',
        'contenido' => 'Vietnam es un país que cautiva desde el primer instante. Montañas envueltas en niebla, bahías salpicadas de islas de piedra, campos de arroz que brillan al sol y ciudades donde la historia y la vida moderna se entrelazan sin esfuerzo. Viajar a Vietnam es recorrer un territorio marcado por la resiliencia, la belleza natural y una cultura profundamente hospitalaria. Cada paso, cada plato, cada mirada, deja huella.',
        'imagenDestacadaAsset' => 'vietnam.jpg'
    ],
    [
        'slugDefault' => 'Indonesia',
        'titulo' => 'Indonesia',
        'contenido' => 'Indonesia es un universo de islas donde cada paisaje cuenta una historia distinta. Desde los templos milenarios de Java hasta los arrozales esmeralda de Bali, pasando por selvas vírgenes, volcanes activos y playas ocultas, este archipiélago es una invitación al asombro. Es un país donde la espiritualidad se vive en cada gesto, donde la diversidad cultural se fusiona con la naturaleza, y donde cada viaje se transforma en una experiencia profunda y transformadora.',
        'imagenDestacadaAsset' => 'indonesia.jpg'
    ],
    [
        'slugDefault' => 'Filipinas',
        'titulo' => 'Filipinas',
        'contenido' => 'Filipinas es un archipiélago de 7.000 islas que despliega playas de arena blanca, selvas tropicales y una calidez humana única. Entre su biodiversidad marina y su cultura vibrante, cada rincón es un descubrimiento. Es un destino que invita a la aventura, la relajación y la conexión profunda con la naturaleza y sus gentes.',
        'imagenDestacadaAsset' => 'filipinas.jpg'
    ],
    [
        'slugDefault' => 'CoreaDelSur',
        'titulo' => 'Corea del Sur',
        'contenido' => 'Corea del Sur es un país donde la tradición milenaria convive con una innovación imparable. Desde palacios ancestrales y templos serenos hasta ciudades vibrantes llenas de tecnología y cultura pop, cada rincón ofrece un equilibrio perfecto entre historia y modernidad. Es un destino que sorprende y emociona, donde el pasado y el futuro se entrelazan con armonía.',
        'imagenDestacadaAsset' => 'corea.jpg'
    ],
    [
        'slugDefault' => 'Nepal',
        'titulo' => 'Nepal',
        'contenido' => 'Nepal es un santuario espiritual en medio de las imponentes montañas del Himalaya, donde la naturaleza y la cultura se fusionan en un viaje inolvidable. Desde el místico valle de Katmandú hasta los senderos que llevan al Everest, Nepal ofrece paisajes sobrecogedores, templos ancestrales y una hospitalidad que toca el alma.',
        'imagenDestacadaAsset' => 'nepal.jpg'
    ],
    [
        'slugDefault' => 'SriLanka',
        'titulo' => 'Sri Lanka',
        'contenido' => 'Sri Lanka es un país que encierra la esencia de Asia en una sola isla. Antiguos templos budistas, plantaciones de té infinitas, playas vírgenes y parques nacionales con elefantes salvajes conviven en un territorio compacto y vibrante. Viajar a Sri Lanka es sumergirse en la amabilidad de su gente, en su sabiduría milenaria y en una naturaleza tan exuberante como sagrada. Es un destino que conecta el alma con el entorno, ideal para quienes buscan aventura, calma y cultura en igual medida.',
        'imagenDestacadaAsset' => 'sri.jpg'
    ],
    [
        'slugDefault' => 'Marruecos',
        'titulo' => 'Marruecos',
        'contenido' => 'Marruecos es una puerta sensorial a otro mundo: un país donde los mercados huelen a especias, las montañas rozan el cielo y el tiempo se detiene en los callejones de las medinas. Aquí, el pasado no ha sido reemplazado: se vive. Desde las dunas del Sáhara hasta las callejuelas de Fez, Marruecos ofrece una experiencia auténtica, cálida y profundamente humana. Cada viaje se convierte en un cuento, en una travesía entre la tradición bereber, la arquitectura islámica y la hospitalidad más generosa del norte de África.',
        'imagenDestacadaAsset' => 'marruecos.jpg'
    ],
    [
        'slugDefault' => 'Egipto',
        'titulo' => 'Egipto',
        'contenido' => 'Egipto no es solo un destino, es una llamada del pasado que resuena con fuerza en cada viajero. Las pirámides se alzan como enigmas que desafían al tiempo, el Nilo fluye con la sabiduría de milenios y cada templo, cada piedra, susurra secretos de faraones, dioses y civilizaciones gloriosas. Viajar a Egipto es entrar en el corazón del Antiguo Mundo, donde el mito y la historia conviven con la energía vibrante de los bazares, el aroma del té con menta y la luz dorada del desierto.',
        'imagenDestacadaAsset' => 'egipto.jpg'
    ],
    [
        'slugDefault' => 'Sudafrica',
        'titulo' => 'Sudafrica',
        'contenido' => 'Sudáfrica es un viaje a lo extraordinario. Desde los rugidos de leones en las llanuras del Kruger hasta los acantilados bañados por el Atlántico en Ciudad del Cabo, el país te invita a descubrirlo con todos los sentidos. Es un mosaico de culturas, paisajes y emociones. Aquí conviven selvas y sabanas, montañas y viñedos, océanos y desiertos. Cada paso es una aventura y cada rostro, una historia. Sudáfrica no se visita, se vive.',
        'imagenDestacadaAsset' => 'sudafrica.jpg'
    ],
    [
        'slugDefault' => 'Tanzania',
        'titulo' => 'Tanzania',
        'contenido' => 'Tanzania es un destino donde la naturaleza despliega su máximo esplendor y la vida salvaje reina en libertad. Desde la imponente cima del Kilimanjaro hasta las vastas llanuras del Serengeti, este país invita a sumergirse en un mundo de aventuras, cultura ancestral y paisajes que quitan el aliento. En Tanzania, cada amanecer es un espectáculo y cada encuentro con su fauna, una experiencia que transforma el alma.',
        'imagenDestacadaAsset' => 'tanzania.jpg'
    ],
    [
        'slugDefault' => 'Kenia',
        'titulo' => 'Kenia',
        'contenido' => 'Kenia no es solo un país, es un escenario épico donde la naturaleza y la cultura se entrelazan en cada horizonte. Desde las vastas llanuras del Masai Mara hasta los lagos del Gran Valle del Rift, pasando por montañas sagradas y costas bañadas por el Índico, Kenia ofrece una conexión profunda con el corazón de África. Es tierra de colores intensos, cielos infinitos y encuentros salvajes que transforman la mirada. Aquí, el tiempo se detiene, y cada paso es una historia por descubrir.',
        'imagenDestacadaAsset' => 'kenia.jpg'
    ],
    [
        'slugDefault' => 'Namibia',
        'titulo' => 'Namibia',
        'contenido' => 'Namibia es una tierra de contrastes extremos y belleza inalterada. En ningún otro lugar la naturaleza se muestra con una elegancia tan despojada: dunas rojizas que se alzan como olas en el desierto, cañones que cortan la tierra con la fuerza del tiempo, y cielos tan claros que la Vía Láctea parece al alcance de la mano. Es un destino para quienes buscan una conexión profunda con el mundo natural, lejos de lo convencional, cerca del asombro.',
        'imagenDestacadaAsset' => 'namibia.jpg'
    ],
    [
        'slugDefault' => 'Etiopia',
        'titulo' => 'Etiopia',
        'contenido' => 'Etiopía no es solo un país, es un viaje a los orígenes del mundo. En sus paisajes volcánicos, montañas sagradas y ciudades talladas en roca late una historia que desafía el tiempo. Cuna de la humanidad, patria del café, tierra de reinos antiguos y religiones vivas, Etiopía es un lugar donde lo espiritual, lo natural y lo humano conviven en una armonía tan intensa como conmovedora. Un destino para los viajeros que buscan autenticidad, belleza cruda y una conexión profunda con la historia y la tierra.',
        'imagenDestacadaAsset' => 'etiopia.jpg'
    ],
    [
        'slugDefault' => 'Senegal',
        'titulo' => 'Senegal',
        'contenido' => 'Senegal es ritmo, calidez y resistencia. Es el latido de los tambores en las calles de Dakar, la brisa atlántica que acaricia la isla de Gorée, y la sonrisa de su gente, siempre hospitalaria. Es un país donde la historia pesa y emociona, donde la naturaleza sorprende en cada rincón y donde la cultura es tan vibrante como sus colores. Senegal no es solo un destino: es una lección de vida, una invitación a sentir África desde su costado más humano, musical y resiliente.',
        'imagenDestacadaAsset' => 'senegal.jpg'
    ],
    [
        'slugDefault' => 'Ghana',
        'titulo' => 'Ghana',
        'contenido' => 'Ghana es un país de sonrisas abiertas, tradiciones ancestrales y naturaleza exuberante. Desde sus doradas playas atlánticas hasta sus bosques tropicales y su legado cultural inigualable, Ghana invita a viajar con todos los sentidos despiertos. Aquí la historia se siente en cada castillo colonial y en cada mercado, la música es un pulso constante que une generaciones y la calidez de su gente transforma cualquier visita en una experiencia auténtica e inolvidable. Ghana es más que un destino: es una invitación a conectar con el alma más genuina de África.',
        'imagenDestacadaAsset' => 'ghana.jpg'
    ],
    [
        'slugDefault' => 'Madagascar',
        'titulo' => 'Madagascar',
        'contenido' => 'Madagascar es un destino que despierta la imaginación de cualquier viajero. Esta isla extraordinaria, aislada durante millones de años, guarda un tesoro natural insólito: especies que no existen en ningún otro lugar del planeta, paisajes que parecen sacados de otro mundo y una cultura rica en tradiciones y leyendas. Viajar a Madagascar es sumergirse en un universo donde la biodiversidad, la aventura y el encuentro con comunidades ancestrales se entrelazan para ofrecer una experiencia inolvidable y profundamente transformadora.',
        'imagenDestacadaAsset' => 'madagascar.jpg'
    ],
    [
        'slugDefault' => 'EstadosUnidos',
        'titulo' => 'Estados Unidos',
        'contenido' => 'Estados Unidos es un país que encarna la diversidad en todos sus sentidos: desde majestuosos parques naturales que parecen de otro planeta hasta ciudades vibrantes que marcan tendencias culturales, tecnológicas y artísticas en todo el mundo. Viajar a Estados Unidos es sumergirse en un mosaico de experiencias donde el pasado y el futuro se encuentran, donde cada región ofrece su propia identidad, y donde la aventura, la innovación y la historia se combinan para ofrecer un viaje tan emocionante como inolvidable.',
        'imagenDestacadaAsset' => 'usa.jpg'
    ],
    [
        'slugDefault' => 'Canada',
        'titulo' => 'Canada',
        'contenido' => 'Canadá es un país que se despliega como una sinfonía de paisajes vastos, ciudades vibrantes y culturas acogedoras. Desde las auroras boreales que iluminan el cielo del norte hasta las modernas metrópolis que abrazan la multiculturalidad, Canadá es una invitación a explorar sin prisa. Aquí, la naturaleza no es un escenario: es la protagonista. Lagos de agua turquesa, glaciares eternos, montañas majestuosas y bosques infinitos hacen de este país un santuario para los sentidos. Viajar a Canadá es abrir la puerta a lo salvaje y a lo humano, a lo ancestral y a lo contemporáneo. Es vivir con intensidad, respirar con amplitud y descubrir la libertad en estado puro.',
        'imagenDestacadaAsset' => 'canada.jpg'
    ],
    [
        'slugDefault' => 'Mexico',
        'titulo' => 'Mexico',
        'contenido' => 'México no es solo un destino, es una emoción que se vive con los cinco sentidos. Desde las pirámides del sol en Teotihuacán hasta los callejones coloniales de Guanajuato, pasando por las playas turquesas del Caribe, el país late con una mezcla vibrante de historia, arte, gastronomía y alegría contagiosa. Cada paso es un encuentro con lo ancestral y lo contemporáneo, con pueblos que aún celebran el día de los muertos como una fiesta a la vida y ciudades donde la creatividad florece en murales, mercados y música.',
        'imagenDestacadaAsset' => 'mexico.jpg'
    ],
    [
        'slugDefault' => 'Peru',
        'titulo' => 'Peru',
        'contenido' => 'Perú es un país que se vive con el alma. Desde las alturas míticas de Machu Picchu hasta el silencio profundo del Amazonas, cada rincón revela un legado milenario. Culturas vivas, paisajes que quitan el aliento y una gastronomía reconocida a nivel mundial hacen de Perú un destino para los que buscan algo más que un viaje: buscan conexión. Entre ruinas incas, mercados andinos y cañones infinitos, Perú ofrece un encuentro auténtico con el pasado, la naturaleza y la espiritualidad.',
        'imagenDestacadaAsset' => 'peru.jpg'
    ],
    [
        'slugDefault' => 'Brasil',
        'titulo' => 'Brasil',
        'contenido' => 'Brasil no se visita, se siente. Es selva y samba, playa y favela, arte urbano y pueblos indígenas. Es la energía que vibra en Río de Janeiro, el misterio de la Amazonía, la elegancia colonial de Ouro Preto y la fuerza telúrica de las Cataratas de Iguazú. Brasil es donde la alegría no es solo una emoción: es una forma de estar en el mundo. Un país inmenso que te invita a moverte al ritmo de la vida, sin filtros, con intensidad, belleza y contradicciones.',
        'imagenDestacadaAsset' => 'brasil.jpg'
    ],
    [
        'slugDefault' => 'Argentina',
        'titulo' => 'Argentina',
        'contenido' => 'Argentina no se recorre, se vive. Desde la fuerza de los glaciares patagónicos hasta la calidez del tango porteño, es un país donde los extremos se abrazan con una intensidad que conmueve. El viajero encuentra aquí la inmensidad de la Pampa, la altura sobrecogedora de los Andes, la poesía de los cafetines y la hospitalidad que se brinda con un mate. Es un viaje a lo profundo del alma sudamericana, donde la naturaleza es grandiosa y la cultura, profundamente humana.',
        'imagenDestacadaAsset' => 'argentina.jpg'
    ],
    [
        'slugDefault' => 'Ecuador',
        'titulo' => 'Ecuador',
        'contenido' => 'Ecuador es un país pequeño en tamaño, pero gigantesco en maravillas. Aquí, en apenas unas horas de viaje, puedes pasar de la selva amazónica a las nieves de los Andes, del Pacífico a los volcanes activos y a las legendarias islas Galápagos. Ecuador no solo es biodiversidad, es también historia viva, pueblos indígenas, ciudades coloniales y una cultura que vibra con autenticidad. Viajar por Ecuador es experimentar el planeta a escala humana.',
        'imagenDestacadaAsset' => 'ecuador.jpg'
    ],
    [
        'slugDefault' => 'Chile',
        'titulo' => 'Chile',
        'contenido' => 'Chile es una tierra de extremos, de silencios milenarios y belleza conmovedora. Desde el desierto más árido del planeta hasta los glaciares del fin del mundo, este país largo y estrecho encierra una diversidad paisajística asombrosa. Sus volcanes activos, valles vinícolas, lagos de espejo y ciudades vibrantes convierten cada viaje en una travesía emocional. Chile no se visita, se recorre con el alma.',
        'imagenDestacadaAsset' => 'chile.jpg'
    ],
    [
        'slugDefault' => 'Colombia',
        'titulo' => 'Colombia',
        'contenido' => 'Colombia es un país vibrante, lleno de contrastes naturales y culturales que capturan el alma del viajero. Desde la selva amazónica hasta las playas caribeñas, pasando por las montañas de los Andes y las ciudades coloniales, Colombia te invita a descubrir su alegría, su historia y su riqueza inagotable. Es un lugar donde cada rincón tiene una historia que contar, donde la música y la gastronomía se viven con pasión, y donde la naturaleza se expresa en toda su grandeza.',
        'imagenDestacadaAsset' => 'colombia.jpg'
    ],
    [
        'slugDefault' => 'CostaRica',
        'titulo' => 'Costa Rica',
        'contenido' => 'Costa Rica es un destino que enamora por su compromiso con la conservación, su biodiversidad inigualable y la calidez de su gente. Con selvas tropicales, volcanes imponentes, playas de arena blanca y una vida silvestre vibrante, este pequeño país centroamericano ofrece experiencias únicas para viajeros que buscan conectar con la naturaleza, vivir aventuras auténticas y descubrir una cultura rica en tradición y respeto por el entorno.',
        'imagenDestacadaAsset' => 'costarica.jpg'
    ],
    [
        'slugDefault' => 'Guatemala',
        'titulo' => 'Guatemala',
        'contenido' => 'Guatemala es un país donde la historia ancestral y la naturaleza vibrante se encuentran en cada rincón. Sus paisajes, que van desde volcanes imponentes y lagos cristalinos hasta ciudades coloniales llenas de vida, te invitan a sumergirte en una experiencia auténtica y enriquecedora. Viajar a Guatemala es descubrir un mundo lleno de tradiciones indígenas, arquitectura colonial y biodiversidad fascinante que despiertan los sentidos y el alma.',
        'imagenDestacadaAsset' => 'guatemala.jpg'
    ],
    [
        'slugDefault' => 'Australia',
        'titulo' => 'Australia',
        'contenido' => 'Australia es un país-continente donde la naturaleza deslumbrante se mezcla con ciudades vibrantes y culturas ancestrales que perduran. Desde las vastas y rojizas tierras del Outback hasta las costas repletas de arrecifes y playas icónicas, Australia es un destino para viajeros que buscan descubrir paisajes únicos, biodiversidad incomparable y una experiencia cultural rica y variada. Aquí, cada rincón cuenta una historia y ofrece aventuras inolvidables.',
        'imagenDestacadaAsset' => 'australia.jpg'
    ],
    [
        'slugDefault' => 'NuevaZelanda',
        'titulo' => 'Nueva Zelanda',
        'contenido' => 'Nueva Zelanda es un destino de ensueño para los amantes de la naturaleza y la aventura. Sus paisajes, que van desde fiordos profundos y montañas majestuosas hasta playas salvajes y bosques milenarios, invitan a vivir experiencias únicas y a conectar con la tierra en su estado más puro. Es un país que despierta el alma viajera y ofrece un refugio para quienes buscan explorar, descubrir y relajarse en un entorno natural de impresionante belleza.',
        'imagenDestacadaAsset' => 'nuevazelanda.jpg'
    ],
    [
        'slugDefault' => 'Fiji',
        'titulo' => 'Fiyi',
        'contenido' => 'Fiyi es un archipiélago de ensueño, donde las aguas cristalinas, playas de arena blanca y una vibrante cultura local se combinan para crear una experiencia inolvidable. Este destino es un refugio para quienes buscan desconexión, aventuras marinas y la calidez de su gente. Aquí, cada amanecer invita a descubrir un mundo donde la naturaleza y la tradición se funden en perfecta armonía.',
        'imagenDestacadaAsset' => 'fiyi.jpg'
    ],
    [
        'slugDefault' => 'PolinesiaFrancesa',
        'titulo' => 'Polinesia Francesa',
        'contenido' => 'La Polinesia Francesa es el epítome del paraíso tropical, un conjunto de islas que capturan el alma con sus lagunas turquesas, playas de arena fina y montañas volcánicas que emergen del océano. Este destino es un refugio para los amantes de la naturaleza, la cultura ancestral y el lujo relajado. Viajar aquí es sumergirse en un mundo remoto donde el tiempo se detiene y cada instante se vive con intensidad, explorando desde atolones remotos hasta vibrantes comunidades locales que mantienen viva su herencia.',
        'imagenDestacadaAsset' => 'polinesia.jpg'
    ],
    [
        'slugDefault' => 'PapuaNuevaGuinea',
        'titulo' => 'Papua Nueva Guinea',
        'contenido' => 'Papua Nueva Guinea es un destino que desafía lo convencional. Más allá de sus impresionantes paisajes tropicales, selvas densas y arrecifes de coral, este país guarda la riqueza cultural más diversa del planeta, con cientos de tribus que mantienen vivas tradiciones ancestrales únicas. Viajar a Papua Nueva Guinea es adentrarse en un mundo remoto donde la naturaleza indómita y la historia humana se funden en una experiencia de exploración auténtica y profunda. Aquí, cada encuentro es una aventura, cada ruta un descubrimiento.',
        'imagenDestacadaAsset' => 'papua.jpg'
    ],
    [
        'slugDefault' => 'Samoa',
        'titulo' => 'Samoa',
        'contenido' => 'Samoa es un tesoro escondido en el Pacífico Sur que ofrece una mezcla única de belleza natural y cultura ancestral. Sus paisajes de selvas tropicales, cascadas y playas de arena blanca están impregnados del espíritu de fa\'a Samoa, la forma tradicional de vida samoana, que privilegia la comunidad, el respeto y la armonía con la naturaleza. Viajar a Samoa es adentrarse en un paraíso donde cada experiencia es auténtica, tranquila y enriquecedora, ideal para quienes buscan desconexión y contacto real con culturas milenarias.',
        'imagenDestacadaAsset' => 'samoa.jpg'
    ],
    [
        'slugDefault' => 'Emiratos',
        'titulo' => 'Emiratos Arabes Unidos',
        'contenido' => 'Emiratos Árabes Unidos es un destino que sorprende y cautiva, una tierra donde el lujo futurista se mezcla con la riqueza de tradiciones milenarias. Desde las impresionantes torres de Dubái hasta las dunas doradas del desierto, este país ofrece experiencias que combinan aventura, cultura y tecnología de vanguardia. Viajar a EAU es descubrir un oasis de innovación en medio de paisajes áridos, donde cada rincón invita a explorar tanto la majestuosidad de su historia como la fascinación de su presente dinámico.',
        'imagenDestacadaAsset' => 'emiratos.jpg'
    ],
    [
        'slugDefault' => 'Israel',
        'titulo' => 'Israel',
        'contenido' => 'Israel es un destino único que fusiona siglos de historia sagrada con una vibrante vida contemporánea. Tierra de milenarias tradiciones, paisajes que van desde el Mar Muerto hasta el Mar Mediterráneo, y ciudades que combinan cultura, espiritualidad y modernidad. Viajar a Israel es sumergirse en un mosaico cultural y espiritual, donde cada paso cuenta una historia y cada experiencia despierta los sentidos .',
        'imagenDestacadaAsset' => 'Israel.jpg'
    ],
    [
        'slugDefault' => 'Jordania',
        'titulo' => 'Jordania',
        'contenido' => 'Jordania es un país que combina la majestuosidad del desierto con tesoros arqueológicos y una hospitalidad que hace sentir a cada viajero como en casa. Desde la ciudad perdida de Petra hasta las aguas curativas del Mar Muerto, Jordania invita a descubrir una tierra de contrastes, leyendas y paisajes inolvidables. Viajar a Jordania es adentrarse en un relato épico que une naturaleza, historia y cultura viva.',
        'imagenDestacadaAsset' => 'jordania.jpg'
    ],
    [
        'slugDefault' => 'Turquia',
        'titulo' => 'Turquia',
        'contenido' => 'Turquía es un país que cautiva con su riqueza histórica, su diversidad cultural y paisajes que parecen sacados de un sueño. Desde la mística Estambul, ciudad que une dos continentes, hasta las formaciones de roca y valles de Capadocia, cada rincón invita a un viaje lleno de contrastes y descubrimientos. En Turquía, la historia milenaria convive con la vibrante modernidad, creando una experiencia única para todo tipo de viajeros.',
        'imagenDestacadaAsset' => 'turquia.jpg'
    ],
    [
        'slugDefault' => 'Oman',
        'titulo' => 'Oman',
        'contenido' => 'Omán es un país donde la autenticidad y la hospitalidad se viven en cada rincón. Sus paisajes combinan majestuosas montañas, desiertos infinitos y una costa bañada por el mar Arábigo, creando un escenario único para quienes buscan una experiencia cultural profunda y una naturaleza intacta. Omán invita a descubrir la tradición beduina, los antiguos fuertes y su esencia milenaria, lejos del turismo masivo. Un destino que despierta los sentidos y regala calma.',
        'imagenDestacadaAsset' => 'oman.jpg'
    ]
];

// Mapeo de categoría por destino para la meta "categoria"
$categoriaPorSlug = [
    'Japon' => 'Cultura e Historia Milenaria, Lunas de Miel y Escapadas Románticas, Viajes Espirituales y de Conexión',
    'China' => 'Cultura e Historia Milenaria',
    'India' => 'Cultura e Historia Milenaria, Viajes Espirituales y de Conexión',
    'Tailandia' => 'Cultura e Historia Milenaria, Lunas de Miel y Escapadas Románticas, Paraísos Tropicales y Relax',
    'Vietnam' => 'Cultura e Historia Milenaria, Paraísos Tropicales y Relax',
    'Indonesia' => 'Lunas de Miel y Escapadas Románticas, Paraísos Tropicales y Relax, Viajes Espirituales y de Conexión',
    'Filipinas' => 'Paraísos Tropicales y Relax',
    'CoreaDelSur' => 'Cultura e Historia Milenaria',
    'Nepal' => 'Aventura y Exploración, Viajes Espirituales y de Conexión',
    'SriLanka' => 'Cultura e Historia Milenaria, Naturaleza y Vida Salvaje, Paraísos Tropicales y Relax',
    'Marruecos' => 'Cultura e Historia Milenaria, Lunas de Miel y Escapadas Románticas',
    'Egipto' => 'Cultura e Historia Milenaria',
    'Sudafrica' => 'Aventura y Exploración, Naturaleza y Vida Salvaje',
    'Tanzania' => 'Naturaleza y Vida Salvaje',
    'Kenia' => 'Naturaleza y Vida Salvaje',
    'Namibia' => 'Aventura y Exploración, Naturaleza y Vida Salvaje',
    'Etiopia' => 'Cultura e Historia Milenaria',
    'Senegal' => 'Cultura e Historia Milenaria',
    'Ghana' => 'Cultura e Historia Milenaria',
    'Madagascar' => 'Naturaleza y Vida Salvaje',
    'EstadosUnidos' => 'Aventura y Exploración, Naturaleza y Vida Salvaje',
    'Canada' => 'Aventura y Exploración, Naturaleza y Vida Salvaje',
    'Mexico' => 'Cultura e Historia Milenaria, Aventura y Exploración, Lunas de Miel y Escapadas Románticas, Paraísos Tropicales y Relax',
    'Peru' => 'Cultura e Historia Milenaria, Aventura y Exploración, Viajes Espirituales y de Conexión',
    'Brasil' => 'Naturaleza y Vida Salvaje, Paraísos Tropicales y Relax',
    'Argentina' => 'Aventura y Exploración, Naturaleza y Vida Salvaje',
    'Ecuador' => 'Aventura y Exploración, Naturaleza y Vida Salvaje',
    'Chile' => 'Aventura y Exploración, Naturaleza y Vida Salvaje',
    'Colombia' => 'Cultura e Historia Milenaria, Aventura y Exploración, Paraísos Tropicales y Relax',
    'CostaRica' => 'Aventura y Exploración, Naturaleza y Vida Salvaje, Paraísos Tropicales y Relax',
    'Guatemala' => 'Cultura e Historia Milenaria',
    'Australia' => 'Aventura y Exploración, Naturaleza y Vida Salvaje',
    'NuevaZelanda' => 'Aventura y Exploración, Lunas de Miel y Escapadas Románticas',
    'Fiji' => 'Lunas de Miel y Escapadas Románticas, Paraísos Tropicales y Relax',
    'PolinesiaFrancesa' => 'Lunas de Miel y Escapadas Románticas, Paraísos Tropicales y Relax',
    'PapuaNuevaGuinea' => 'Aventura y Exploración',
    'Samoa' => 'Paraísos Tropicales y Relax',
    'Emiratos' => 'Cultura e Historia Milenaria',
    'Israel' => 'Cultura e Historia Milenaria, Viajes Espirituales y de Conexión',
    'Jordania' => 'Cultura e Historia Milenaria',
    'Turquia' => 'Cultura e Historia Milenaria, Lunas de Miel y Escapadas Románticas',
    'Oman' => 'Cultura e Historia Milenaria, Aventura y Exploración',
];

$GLOBALS['glory_imagen_por_categoria'] = [
    'Cultura e Historia Milenaria' => 'cultura.jpg',
    'Lunas de Miel y Escapadas Románticas' => 'romantico.jpg',
    'Viajes Espirituales y de Conexión' => 'espiritual.jpg',
    'Paraísos Tropicales y Relax' => 'playa.jpg',
    'Aventura y Exploración' => 'aventura.jpg',
    'Naturaleza y Vida Salvaje' => 'naturaleza.jpg',
];

// Agregar automáticamente la galería a cada destino
foreach ($destinos as &$d) {
    if (isset($d['imagenDestacadaAsset'])) {
        $base = preg_replace('/\.[^.]+$/', '', strtolower($d['imagenDestacadaAsset']));
        $d['galeriaAssets'] = [
            $d['imagenDestacadaAsset'],
            $base . '1.jpg',
            $base . '2.jpg',
            $base . '3.jpg',
        ];
    }

    if (isset($categoriaPorSlug[$d['slugDefault']])) {
        if (!isset($d['metaEntrada']) || !is_array($d['metaEntrada'])) {
            $d['metaEntrada'] = [];
        }
        $d['metaEntrada']['categoria'] = $categoriaPorSlug[$d['slugDefault']];
    }
}
unset($d);

DefaultContentManager::define('destino', $destinos, 'smart', true);

DefaultContentManager::register();
