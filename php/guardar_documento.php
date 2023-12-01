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

// Verifica si se pudo establecer la conexión a la base de datos
if ($tipodepersona == 1) {
    $sql = "INSERT INTO mpvirtual
    (tipodepersona, nrodocumento, nombres, apellidos, direccion, celular, email, tipodocumento, nrofolios, asunto, docPrincipal, fecha_registro, fecha_respuesta, usuario_rep, id_estado)
    VALUES('$tipodepersona', '$nrodocumento', '$nombres', '$apellidos', '$direccion', '$celular', '$email', '$tipodocumento', '$nrofolios', '$asunto', '$archivoPrincipal', current_timestamp(), NULL, NULL, 1)";
} elseif ($tipodepersona == 2) {
    $sql = "INSERT INTO mpvirtual
    (tipodepersona, nrodocumento, razon_social, direccion, celular, email, tipodocumento, nrofolios, asunto, docPrincipal, fecha_registro, fecha_respuesta, usuario_rep, id_estado)
    VALUES('$tipodepersona', '$nrodocumento', '$razonsocial', '$direccion', '$celular', '$email', '$tipodocumento', '$nrofolios', '$asunto', '$archivoPrincipal', current_timestamp(), NULL, NULL, 1)";
}

// Inserta los datos del formulario en la tabla correspondiente (adaptar según tu estructura de base de datos)
try {
    // Ejecutar la consulta SQL para insertar los archivos principales
    if ($db->query($sql) === TRUE) {
        $documentoID = $db->insert_id;
        
        // Verificar si hay archivos anexos
        if (!empty($archivosAnexo)) {
            foreach ($archivosAnexo as $fileName) {
                // Ejecutar la consulta SQL para insertar los archivos anexos
                $sql = "INSERT INTO anexos (id_mpvirtual, nombreAnexo, fecha_registro, id_estado) VALUES ('$documentoID', '$fileName', current_timestamp(), 1)";
                if ($db->query($sql) === FALSE) {
                    throw new Exception('Error al insertar los detalles del archivo anexo en la base de datos: ' . $db->error);
                }
            }
        }
        
        // Enviar una respuesta en formato JSON al cliente para indicar que la operación fue exitosa
        $response = array('success' => true, 'type' => 'success', 'message' => 'Los archivos se han guardado en la base de datos correctamente.');
        echo json_encode($response);
    } else {
        // Si la consulta principal falla, enviar un mensaje de error
        throw new Exception('Error al insertar los datos en la base de datos: ' . $db->error);
    }
} catch (Exception $e) {
    // Si hay una excepción, enviar un mensaje de error
    $response = array('success' => false, 'type' => 'error', 'message' => 'Error al guardar los datos: ' . $e->getMessage());
    echo json_encode($response);
}

$db->close();

?>
