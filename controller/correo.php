<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    // Recoge otros datos del formulario
    $asunto = $_POST['subject'];
    $nombre = $_POST['name'];
    $telefono = $_POST['phone'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];
    $mi_email = '';

    // Archivo adjunto
    $archivo_adjunto = $_FILES['attachment']['tmp_name'];
    $nombre_adjunto = $_FILES['attachment']['name'];
    
    // Construir el mensaje en formato HTML
    $mensajeHTML = '<p><strong>Asunto:</strong> ' . $asunto . '</p>';
    $mensajeHTML .= '<p><strong>Nombre:</strong> ' . $nombre . '</p>';
    $mensajeHTML .= '<p><strong>Email:</strong> ' . $email . '</p>';
    $mensajeHTML .= '<p><strong>Teléfono:</strong> ' . $telefono . '</p>';
    $mensajeHTML .= '<p><strong>Mensaje:</strong> ' . $mensaje . '</p>';

    // Configuración de PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor de correo
        $mail->isSMTP();
        $mail->Host       = '';
        $mail->SMTPAuth   = true;
        $mail->Username   = '';
        $mail->Password   = '';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64'; 
        // Detalles del mensaje
        $mail->setFrom('', 'Remitente');
        $mail->addAddress($mi_email);
        $mail->Subject = $asunto;
        $mail->Body    = $mensajeHTML;
        $mail->isHTML(true);
        // Adjuntar archivos
        if ($_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
            $mail->addAttachment($archivo_adjunto, $nombre_adjunto);
        } else {
            echo 'Error al adjuntar el archivo. Código de error: ' . $_FILES['attachment']['error'];
        }
        // Enviar el correo
        $mail->send();
        echo 'ok';
    } catch (Exception $e) {
        echo $e;
    }
} else {
    return 'Método incorrecto.';
}
