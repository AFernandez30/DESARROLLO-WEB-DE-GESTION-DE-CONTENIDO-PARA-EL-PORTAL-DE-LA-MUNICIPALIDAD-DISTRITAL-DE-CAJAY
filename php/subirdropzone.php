<?php
// Verificar si se recibieron archivos
if (!empty($_FILES)) {
    // Obtener el archivo subido
    $file = $_FILES["file"];

    // Determinar la ruta de destino según el tipo de archivo
    if ($_POST["tipoArchivo"] === "principal") {
        $uploadPath = "../archivos/mpvirtual/principal/";
    } elseif ($_POST["tipoArchivo"] === "anexo") {
        $uploadPath = "../archivos/mpvirtual/anexos/";
    } else {
        // Tipo de archivo desconocido, enviar respuesta de error
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Tipo de archivo desconocido."]);
        exit;
    }

    // Crear el directorio si no existe
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true); // Crea el directorio con permisos 0777 (puedes ajustar los permisos según sea necesario)
    }

    // Mover el archivo a la ubicación deseada
    $fileName = uniqid() . "_" . $file["name"];
    if (move_uploaded_file($file["tmp_name"], $uploadPath . $fileName)) {
        // Enviar una respuesta de éxito al cliente
        http_response_code(200);
        echo json_encode(["status" => "success", "fileName" => $fileName]);
    } else {
        // Error al mover el archivo
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Ha ocurrido un error al subir el archivo."]);
    }
} else {
    // No se recibió ningún archivo, enviar respuesta de error
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "No se recibió ningún archivo."]);
}
?>
