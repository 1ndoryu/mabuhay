<?php
// App/Pages/contacto.php

use Glory\Utility\AssetsUtility;
use Glory\Components\FormBuilder;

function pageContacto()
{

    // Obtener destinos para el desplegable
    $destinos_posts = get_posts([
        'post_type' => 'destino',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
    ]);

    // PROFILER: medir la consulta de destinos
    if (function_exists('glory_mark')) {
        glory_mark('contacto_get_posts');
    }

    $opciones_destinos = ['' => 'Selecciona un destino...'];
    foreach ($destinos_posts as $post) {
        $opciones_destinos[$post->ID] = $post->post_title;
    }

    ob_start();
?>
    <div class="hero secundario" style="background-image: url(<?php AssetsUtility::imagenUrl('inicio', 'jpg'); ?>);">
    </div>
    <div class="section contacto" style="background-color: #f9f9f9;">
        <div class="contactoForm">
            <h2>Planifica tu Viaje</h2>
            <?php
            echo FormBuilder::inicio(['atributos' => ['id' => 'form-contacto']]);
            ?>

            <div class="form-section">

                <div class="form-grid">
                    <?php
                    echo FormBuilder::campoSelect([
                        'nombre' => 'destino_principal',
                        'label' => '¿Cuál es el destino que quieres en tu próximo viaje?',
                        'opciones' => $opciones_destinos,
                        'obligatorio' => true,
                        'alertaObligatorio' => 'Por favor, selecciona un destino principal.'
                    ]);
                    echo FormBuilder::campoTexto([
                        'nombre' => 'destino_secundario',
                        'label' => '¿Qué otro destino te interesa?',
                        'placeholder' => 'Ej: Tailandia, Costa Rica...'
                    ]);
                    ?>
                </div>
            </div>

            <div class="form-section">
                <h3 class="form-section-title">Intereses</h3>
                <?php
                echo FormBuilder::campoCheckboxGrupo([
                    'nombre' => 'tipo_viaje[]',
                    'label' => '¿Qué tipo de viaje os gustaría hacer? (elige varias opciones)',
                    'opciones' => [
                        'Playas paradisíacas' => 'Playas paradisíacas ',
                        'Naturaleza y aventura' => 'Naturaleza y aventura',
                        'Cultura e historia' => 'Cultura e historia',
                        'Experiencias gastronómicas' => 'Experiencias gastronómicas',
                        'Lujo y relax' => 'Lujo y relax',
                        'Vida nocturna y entretenimiento' => 'Vida nocturna y entretenimiento',
                    ],
                    'classContainer' => 'full-width'
                ]);
                ?>
            </div>

            <div class="form-section">
                <h3 class="form-section-title">Fechas y Duración</h3>
                <div class="form-grid">
                    <?php
                    echo FormBuilder::campoSelect([
                        'nombre' => 'sabe_fechas',
                        'label' => '¿Cuándo quieres viajar?',
                        'opciones' => [
                            'No' => 'No lo sé',
                            'Si' => 'Sí, tengo fechas cerradas'
                        ],
                        'valor' => 'No',
                        'classContainer' => 'full-width'
                    ]);
                    ?>
                    <?php
                    echo FormBuilder::campoRango([
                        'nombre' => 'noches',
                        'label' => '¿Cuántas noches?',
                        'classContainer' => 'full-width'
                    ]);
                    ?>
                </div>

                <div id="fechas-container">
                    <?php
                    echo FormBuilder::campoFecha(['nombre' => 'fecha_ida', 'label' => 'Ida']);
                    echo FormBuilder::campoFecha(['nombre' => 'fecha_vuelta', 'label' => 'Vuelta']);
                    ?>
                </div>

            </div>

            <div class="form-section">
                <h3 class="form-section-title">Viajeros y Presupuesto</h3>
                <div class="form-grid">
                    <?php
                    echo FormBuilder::campoSelect([
                        'nombre' => 'acompanantes',
                        'label' => '¿Con quién viajas?',
                        'opciones' => [
                            '' => 'Selecciona una opción...',
                            'Familia' => 'Familia',
                            'Pareja' => 'Pareja',
                            'Amigos' => 'Amigos',
                            'Solo' => 'Solo',
                            'Viaje de novios' => 'Viaje de novios',
                            'Viaje de empresa' => 'Viaje de empresa'
                        ]
                    ]);
                    echo FormBuilder::campoNumero(['nombre' => 'adultos', 'label' => 'Nº de adultos', 'min' => 1, 'valor' => 2]);
                    echo FormBuilder::campoNumero(['nombre' => 'ninos', 'label' => 'Nº de niños (hasta 12 años)', 'min' => 0, 'valor' => 0]);
                    echo FormBuilder::campoSelect([
                        'nombre' => 'presupuesto',
                        'label' => 'Presupuesto',
                        'opciones' => [
                            'menos_5000' => 'Menos de 5.000 €',
                            '5000_8000' => '5.000 € - 8.000 €',
                            '8000_10000' => '8.000 € - 10.000 €',
                            'mas_10000' => 'Más de 10.000 €',
                        ],
                        'valor' => '',
                    ]);
                    ?>
                </div>
            </div>

            <div class="form-section">
                <h3 class="form-section-title">Cuéntanos más</h3>
                <?php
                echo FormBuilder::campoTextarea([
                    'nombre' => 'idea_viaje',
                    'label' => 'Descríbenos tu idea de viaje',
                    'placeholder' => 'Cuantos más detalles nos des, mejor podremos diseñar tu experiencia...',
                    'rows' => 6,
                    'classContainer' => 'full-width'
                ]);
                ?>
            </div>

            <div class="form-section">
                <h3 class="form-section-title">Tus Datos</h3>
                <div class="form-grid">
                    <?php
                    echo FormBuilder::campoTexto(['nombre' => 'nombre', 'label' => 'Nombre', 'obligatorio' => true, 'alertaObligatorio' => 'El nombre es obligatorio.']);
                    echo FormBuilder::campoTexto(['nombre' => 'apellidos', 'label' => 'Apellidos', 'obligatorio' => true, 'alertaObligatorio' => 'Los apellidos son obligatorios.']);
                    ?>
                </div>
                <div class="form-grid">
                    <?php
                    echo FormBuilder::campoTexto(['nombre' => 'email', 'label' => 'Email', 'obligatorio' => true, 'alertaObligatorio' => 'El email es obligatorio.']);
                    echo FormBuilder::campoTexto(['nombre' => 'telefono', 'label' => 'Teléfono', 'obligatorio' => true, 'alertaObligatorio' => 'El teléfono es obligatorio.']);
                    ?>
                </div>
                <div class="form-grid">
                    <?php
                    echo FormBuilder::campoTexto(['nombre' => 'direccion', 'label' => 'Dirección']);
                    echo FormBuilder::campoTexto(['nombre' => 'ciudad', 'label' => 'Ciudad']);
                    ?>
                </div>
                <div class="form-grid" id="codigo-postal">
                    <?php
                    echo FormBuilder::campoTexto(['nombre' => 'codigo_postal', 'label' => 'Código Postal']);
                    ?>
                    <div style="width: 100%;"></div>
                </div>
            </div>

            <?php
            echo FormBuilder::botonEnviar(['accion' => 'solicitudViaje', 'texto' => 'Enviar Solicitud']);
            echo FormBuilder::fin();
            ?>
        </div>
    </div>

    <?php if (function_exists('glory_mark')) {
        glory_mark('contacto_form_rendered');
    } ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectFecha = document.querySelector('select[name="sabe_fechas"]');
            const contenedorFechas = document.getElementById('fechas-container');

            function toggleFechas() {
                if (selectFecha.value === 'Si') {
                    contenedorFechas.style.display = 'grid';
                } else {
                    contenedorFechas.style.display = 'none';
                }
            }

            selectFecha.addEventListener('change', toggleFechas);

            // Ejecutar al cargar por si el valor inicial es 'Si'
            toggleFechas();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rangeInput = document.querySelector('input[name="noches"]');
            if (rangeInput) {
                function updateRangeFill() {
                    const min = rangeInput.min || 0;
                    const max = rangeInput.max || 100;
                    const val = rangeInput.value;
                    const percentage = ((val - min) * 100) / (max - min);

                    rangeInput.style.setProperty('--fill-percentage', `${percentage}%`);
                }

                rangeInput.addEventListener('input', updateRangeFill);

                // Initial fill
                updateRangeFill();
            }
        });
    </script>
<?php
    return ob_get_clean();
}
