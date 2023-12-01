<?php
include_once('../conexion.php');
// Obtén los datos del formulario
$tipodepersona = $_POST['tipodepersona'];
$nrodocumento = $_POST['nrodocumento'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$razonsocial = $_POST['razonsocial'];
$direccion = $_POST['direccion'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$tipodocumento = $_POST['tipodocumento'];
$nrofolios = $_POST['nrofolios'];
$asunto = $_POST['asunto'];

// Obtén los detalles de los archivos principales
$archivoPrincipal = $_POST['archivoPrincipal'];

// Obtén los detalles de los archivos anexos
$archivosAnexo = $_POST['archivosAnexo'];
$archivosAnexo = !empty($archivosAnexo) ? explode(',', $archivosAnexo) : $archivosAnexo;

//$archivosAnexo = !empty($archivosAnexo) ? explode(',', $archivosAnexo) : array();


// Verifica si se pudo establecer la conexión a la base de datos
if ($tipodepersona == 1) {
    $sql = "INSERT INTO mpvirtual
    (tipodepersona, nrodocumento, nombres, apellidos, direccion, celular, email, tipodocumento, nrofolios, asunto, docPrincipal, fecha_registro, fecha_respuesta, id_usuario, id_estado)
    VALUES('$tipodepersona', '$nrodocumento', '$nombres', '$apellidos', '$direccion', '$celular', '$email', '$tipodocumento', '$nrofolios', '$asunto', '$archivoPrincipal', current_timestamp(), NULL, NULL, 1)";
} elseif ($tipodepersona == 2) {
    $sql = "INSERT INTO mpvirtual
    (tipodepersona, nrodocumento, razon_social, direccion, celular, email, tipodocumento, nrofolios, asunto, docPrincipal, fecha_registro, fecha_respuesta, id_usuario, id_estado)
    VALUES('$tipodepersona', '$nrodocumento', '$razonsocial', '$direccion', '$celular', '$email', '$tipodocumento', '$nrofolios', '$asunto', '$archivoPrincipal', current_timestamp(), NULL, NULL, 1)";
}
// header('Content-Type: application/json');
// Inserta los datos del formulario en la tabla correspondiente (adaptar según tu estructura de base de datos)
if ($db->query($sql) === FALSE) {
    //$response = array('success' => false, 'type' => 'error', 'message' => 'Error al insertar los datos en la base de datos: ' . $db->error);
    $response = array('success' => false, 'type' => 'error', 'message' => 'Error al insertar los datos en la base de datos: ');
    echo json_encode($response);
    return;
} else {
    $documentoID = $db->insert_id;
    $hasAnexos = false;

    if (!empty($archivosAnexo)) {
        $hasAnexos = true;
        foreach ($archivosAnexo as $fileName) {
            $sql = "INSERT INTO anexos
            (id_mpvirtual, nombreAnexo, fecha_registro, id_estado)
            VALUES('$documentoID', '$fileName', current_timestamp(), 1)";

            if ($db->query($sql) === FALSE) {
                $response = array('success' => false, 'type' => 'error', 'message' => 'Error al insertar los datos en la base de datos: ' . $db->error);
                //$response = array('success' => true, 'type' => 'success', 'message' => 'Los archivos se han guardado en la base de datos correctamente.');
                echo json_encode($response);
                return;
            }
        }
    }

    if (!$hasAnexos) {
        $response = array('success' => true, 'type' => 'success', 'message' => 'Los archivos se han guardado en la base de datos correctamente.');
        echo json_encode($response);
    }
}

$db->close();


?>
