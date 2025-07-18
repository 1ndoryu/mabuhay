<?php
// App/Handlers/Form/SolicitudViajeHandler.php

namespace App\Handlers\Form;

use Glory\Core\GloryLogger;
use Glory\Handler\Form\FormHandlerInterface;
use Glory\Utility\EmailUtility;

class SolicitudViajeHandler implements FormHandlerInterface
{
    /**
     * Procesa la solicitud de viaje del formulario de contacto.
     *
     * @param array $postDatos Datos del formulario ($_POST).
     * @param array $archivos Archivos subidos ($_FILES).
     * @return array Respuesta para el frontend.
     */
    public function procesar(array $postDatos, array $archivos): array
    {
        GloryLogger::info('Procesando nueva solicitud de viaje.');

        // 1. Sanitizar todos los datos recibidos
        $datosSaneados = [];
        foreach ($postDatos as $clave => $valor) {
            if (is_array($valor)) {
                $datosSaneados[$clave] = array_map('sanitize_text_field', $valor);
            } else {
                if (in_array($clave, ['idea_viaje', 'direccion'])) {
                    $datosSaneados[$clave] = sanitize_textarea_field($valor);
                } else {
                    $datosSaneados[$clave] = sanitize_text_field($valor);
                }
            }
        }

        // 2. Construir el cuerpo del correo en HTML
        $mensaje = "<h1>Nueva Solicitud de Presupuesto de Viaje</h1>";
        $mensaje .= "<p>Se ha recibido una nueva solicitud a través del formulario de contacto. A continuación se detallan los datos:</p>";
        $mensaje .= "<hr>";

        $campos = [
            'Destino Principal' => 'destino_principal',
            'Otro Destino de Interés' => 'destino_secundario',
            'Tipo de Viaje' => 'tipo_viaje',
            'Sabe las Fechas' => 'sabe_fechas',
            'Fecha de Ida' => 'fecha_ida',
            'Fecha de Vuelta' => 'fecha_vuelta',
            'Número de Noches' => 'noches',
            'Viaja Con' => 'acompanantes',
            'Adultos' => 'adultos',
            'Niños' => 'ninos',
            'Presupuesto por Persona (€)' => 'presupuesto',
            'Idea del Viaje' => 'idea_viaje',
            'Nombre' => 'nombre',
            'Apellidos' => 'apellidos',
            'Email' => 'email',
            'Teléfono' => 'telefono',
            'Dirección' => 'direccion',
            'Ciudad' => 'ciudad',
            'Código Postal' => 'codigo_postal'
        ];

        $mensaje .= "<table style='width: 100%; border-collapse: collapse; font-family: sans-serif;'>";
        foreach ($campos as $etiqueta => $clave) {
            if (isset($datosSaneados[$clave]) && !empty($datosSaneados[$clave]) && $datosSaneados[$clave] !== 'No lo sé') {
                $valor = is_array($datosSaneados[$clave]) ? implode(', ', $datosSaneados[$clave]) : nl2br(esc_html($datosSaneados[$clave]));

                if ($clave === 'noches' && $valor === '31') {
                    $valor = '30+';
                }

                $mensaje .= "<tr><td style='padding: 10px; border: 1px solid #ddd; background-color: #f7f7f7; font-weight: bold; width: 30%;'>{$etiqueta}:</td><td style='padding: 10px; border: 1px solid #ddd;'>{$valor}</td></tr>";
            }
        }
        $mensaje .= "</table>";
        $mensaje .= "<hr>";
        $mensaje .= "<p><em><small>Correo enviado automáticamente desde el sitio web Mabuhay Viajes.</small></em></p>";

        // 3. Enviar el correo
        $nombreCompleto = trim(($datosSaneados['nombre'] ?? '') . ' ' . ($datosSaneados['apellidos'] ?? ''));
        $asunto = "Nueva Solicitud de Viaje de: " . (!empty($nombreCompleto) ? $nombreCompleto : 'N/A');

        $enviado = EmailUtility::sendToAdmins($asunto, $mensaje);

        if (!$enviado) {
            GloryLogger::error('El correo de solicitud de viaje no pudo ser enviado.');
            throw new \Exception('El servidor no pudo enviar la notificación por correo. Por favor, inténtalo de nuevo más tarde.');
        }

        // 4. Devolver respuesta al frontend
        return [
            'alert' => '¡Gracias! Tu solicitud ha sido enviada con éxito. Nos pondremos en contacto contigo muy pronto.'
        ];
    }
}
