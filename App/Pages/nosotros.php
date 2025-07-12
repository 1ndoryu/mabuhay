<?php

/*

En Mabuhay, creemos que viajar es mucho más que conocer nuevos destinos: es una forma de redescubrirse, de abrir la mirada al mundo y de vivir momentos que transforman para siempre. Nos especializamos en diseñar viajes de novios exclusivos y a medida, cuidando cada detalle para que cada experiencia sea única e inolvidable.

Nuestro nombre, «Mabuhay», es un saludo filipino que expresa deseos de felicidad y prosperidad, y eso es precisamente lo que queremos transmitir en cada viaje que creamos. Diseñamos itinerarios que van más allá del turismo convencional, permitiendo a nuestros clientes sumergirse en la autenticidad de cada destino, cambiar la forma en que vemos el mundo y nuestra propia vida.

Con un enfoque en la autenticidad, la inspiración y la confianza, trabajamos mano a mano con expertos locales para garantizar que cada viaje sea una experiencia genuina y enriquecedora. Nos aseguramos de que cada destino refleje la esencia de quienes lo visitan, permitiendo que cada persona viva su viaje de ensueño con la tranquilidad de estar en las mejores manos.

¡Bienvenidos a la experiencia Mabuhay!


MISIÓN
Despertar la sensibilidad de nuestros clientes mediante experiencias únicas.

Tu viaje a medida

Experiencias personalizadas
Ofrecemos una variedad de experiencias únicas para complementar tu viaje, como cenas privadas en lugares exclusivos, tours guiados por expertos locales y actividades diseñadas a tu medida.


Itinerarios Exclusivos y Flexibles
Diseñamos viajes a medida adaptados a tus intereses y ritmo, combinando aventura, cultura y descanso para que vivas una experiencia auténtica y sin preocupaciones.


Impulso Local
Colaboramos con proveedores locales en cada destino para que tu viaje tenga un impacto directo y positivo en la comunidad. Así apoyamos la economía local, creamos experiencias más auténticas y fomentamos un turismo más justo y enriquecedor.

*/

use Glory\Utility\AssetsUtility;

function pageNosotros()
{
    ob_start();
?>
    <div class="hero secundario" style="background-image: url(<?php AssetsUtility::imagenUrl('inicio', 'jpg'); ?>);">
        <h2>Nosotros</h2>
    </div>
    <div class="section nosotros" style="background-color: var(--blanco); padding-bottom: 10px;">
        <div class="container" style="margin-bottom: 20px;">
            <div class="logo">
                <?php echo $GLOBALS['logomabuhay']; ?>
            </div>
            <h2>
                En Mabuhay, creemos que viajar es mucho más que conocer nuevos destinos.
            </h2>
            <h3>
                Es una forma de redescubrirse, de abrir la mirada al mundo y de vivir momentos que transforman para siempre. Nos especializamos en diseñar viajes de novios exclusivos y a medida, cuidando cada detalle para que cada experiencia sea única e inolvidable.
            </h3>
            <h3>
                Nuestro nombre, «Mabuhay», es un saludo filipino que expresa deseos de felicidad y prosperidad, y eso es precisamente lo que queremos transmitir en cada viaje que creamos. Diseñamos itinerarios que van más allá del turismo convencional, permitiendo a nuestros clientes sumergirse en la autenticidad de cada destino, cambiar la forma en que vemos el mundo y nuestra propia vida.
            </h3>
            <button class="borde principal">
                <a href="/contacto">
                    Contactar
                </a>
            </button>
        </div>
    </div>

    <!--
    
    Un detalle esta seccion
    Al hacer scroll la imagen y el texto tiene que cambiar suavemente
    este sera el segundo texto

    Itinerarios Exclusivos y Flexibles
    Diseñamos viajes a medida adaptados a tus intereses y ritmo, combinando aventura, cultura y descanso para que vivas una experiencia auténtica y sin preocupaciones.

    Y el tercer texto

    Impulso Local
    Colaboramos con proveedores locales en cada destino para que tu viaje tenga un impacto directo y positivo en la comunidad. Así apoyamos la economía local, creamos experiencias más auténticas y fomentamos un turismo más justo y enriquecedor.
    
    La primera imagen es viaje1.jpg y la segunda es viaje2.jpg y asi hasta la 3 viaje3.jpg
    
    -->

    <div class="nosotrosSlidesWrapper">
        <div id="nosotrosSlides" class="nosotrosSlides">
            <div class="section nosotros imagentexto" style="background-color: var(--tercero);">
                <div class="container" style="width: 50%; height: -webkit-fill-available; background-image: url(<?php AssetsUtility::imagenUrl('viaje1', 'jpg'); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
                <div class="container texto" style="width: 50%;">
                    <div class="textoContainer">
                        <h2>
                            Experiencias personalizadas
                        </h2>
                        <h3>
                            Ofrecemos una variedad de experiencias únicas para complementar tu viaje, como cenas privadas en lugares exclusivos, tours guiados por expertos locales y actividades diseñadas a tu medida.
                        </h3>
                    </div>
                </div>
            </div>

            <div class="section nosotros imagentexto" style="background-color: var(--blanco);">
                <div class="container" style="width: 50%; height: -webkit-fill-available; background-image: url(<?php AssetsUtility::imagenUrl('viaje2', 'jpg'); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
                <div class="container texto" style="width: 50%;">
                    <div class="textoContainer">
                        <h2>
                            Itinerarios Exclusivos y Flexibles
                        </h2>
                        <h3>
                            Diseñamos viajes a medida adaptados a tus intereses y ritmo, combinando aventura, cultura y descanso para que vivas una experiencia auténtica y sin preocupaciones.
                        </h3>
                    </div>
                </div>
            </div>

            <div class="section nosotros imagentexto" style="background-color: var(--tercero);">
                <div class="container" style="width: 50%; height: -webkit-fill-available; background-image: url(<?php AssetsUtility::imagenUrl('viaje3', 'jpg'); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
                <div class="container texto" style="width: 50%;">
                    <div class="textoContainer">
                        <h2>
                            Impulso Local
                        </h2>
                        <h3>
                            Colaboramos con proveedores locales en cada destino para que tu viaje tenga un impacto directo y positivo en la comunidad. Así apoyamos la economía local, creamos experiencias más auténticas y fomentamos un turismo más justo y enriquecedor.
                        </h3>
                    </div>
                </div>
            </div>
        </div> <!-- #nosotrosSlides -->
    </div> <!-- .nosotrosSlidesWrapper -->

    <script>

    </script>

<?php
    return ob_get_clean();
}
?>