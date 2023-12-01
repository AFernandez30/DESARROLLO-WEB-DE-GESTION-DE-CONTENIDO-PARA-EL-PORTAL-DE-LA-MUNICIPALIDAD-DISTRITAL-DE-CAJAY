<?php
include_once('../conexion.php');
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

// use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Step 1 - Enter your email address below.
//$email = 'you@domain.com';
 $email = 'mail.municarabayllo.gob.pe';
// $mail->Host       = 'mail.municarabayllo.gob.pe';
// $mail->SMTPAuth   = true;
// $mail->Username   = 'noreply@municarabayllo.gob.pe';
// $mail->Password   = 'kdDa*28@sa_';
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port       = 25;

// // Recipients
// $mail->setFrom('noreply@municarabayllo.gob.pe', 'Muncipalidad Distrital de Carabayllo - Mesa de partes virtual');
// $mail->addAddress($_POST['sEmail'], $_POST['sNombres'] . ' ' . $_POST['sAppaterno'] . ' ' . $_POST['sApmaterno']);
// $mail->addReplyTo('mesadepartesvirtual@municarabayllo.gob.pe', 'Mesa de partes virtual');
// $mail->addCC('mesadepartesvirtual@municarabayllo.gob.pe');

// If the e-mail is not working, change the debug option to 2 | $debug = 2;
$debug = 0;


//require 'vendor/autoload.php'; // Reemplaza 'vendor/autoload.php' con la ubicación real de la biblioteca PHPMailer

// Recuperar los datos del formulario
$nombres = $_POST['nombres'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


// Consulta para insertar los datos en la tabla
$sql = "INSERT INTO contacto (nombres, correo, asunto, mensaje, id_estado) VALUES ('$nombres', '$correo', '$asunto', '$mensaje','1')";

$response = array();

if ($db->query($sql) === TRUE) {
	$response = array('success' => true, 'type' => 'success', 'message' => 'Los datos se han guardado correctamente en la base de datos.');
   // $response['success'] = true;
   // $response['message'] = "Los datos se han guardado correctamente en la base de datos.";
} else {
	$response = array('success' => false, 'type' => 'error', 'message' => 'Error al guardar los datos: "' . $db->error);
   // $response['success'] = false;
   // $response['message'] = "Error al guardar los datos: " . $db->error;
}

// Enviar correo utilizando PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->Host = 'mail.municarabayllo.gob.pe'; // Cambia esto con la configuración de tu servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'noreply@municarabayllo.gob.pe'; // Reemplaza 'tu_correo@gmail.com' con tu dirección de correo
$mail->Password = 'kdDa*28@sa_'; // Reemplaza 'tu_contraseña' con tu contraseña de correo
$mail->SMTPSecure = 'tls';
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 25;

//$mail->setFrom($correo, $nombres);
//$mail->addAddress($correo); // Cambia 'destinatario@example.com' por la dirección de correo del destinatario

// $mail->Host       = 'mail.municarabayllo.gob.pe';
// $mail->SMTPAuth   = true;
// $mail->Username   = 'noreply@municarabayllo.gob.pe';
// $mail->Password   = 'kdDa*28@sa_';
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port       = 25;

// // Recipients
$mail->setFrom('noreply@municarabayllo.gob.pe', 'Municipalidad Distrital de Carabayllo');
 $mail->addAddress($correo);
 $mail->isHTML(true);
 $mail->Subject = $asunto;
$mail->Body = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Correo de contacto</title>
	<link rel="stylesheet" href="../../cajay/vendor/bootstrap/css/bootstrap.min.css">
    <style>
        /* Aquí puedes agregar los estilos CSS de Porto */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
        }
        .title {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .field {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .value {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Correo de contacto</h1>
        <div class="field">
            <span class="label">Nombre:</span>
            <span class="value">' . $nombres . '</span>
        </div>
        <div class="field">
            <span class="label">Correo:</span>
            <span class="value">' . $correo . '</span>
        </div>
        <div class="field">
            <span class="label">Asunto:</span>
            <span class="value">' . $asunto . '</span>
        </div>
        <div class="field">
            <span class="label">Mensaje:</span>
            <span class="value">' . $mensaje . '</span>
        </div>
    </div>
</body>
</html>';

if ($mail->send()) {
	$response = array('success' => true, 'type' => 'success', 'message' => 'El correo se ha enviado correctamente.');
  //  $response['mail_success'] = true;
   // $response ['type']="success" ['mail_message'] = "El correo se ha enviado correctamente.";
} else {
	$response = array('success' => false, 'type' => 'error', 'message' => 'Error al guardar los datos: "'  . $mail->ErrorInfo);
   // $response['mail_success'] = false;
    //$response['mail_message'] = "Error al enviar el correo: " . $mail->ErrorInfo;
}

// Cerrar la conexión a la base de datos
$db->close();

// Devolver los mensajes en formato JSON
header('Content-Type: application/json');
echo json_encode($response);
?>