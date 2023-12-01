<?php
require_once "../../conexion.php";
$query = "SELECT a.nombre_area, a.telefono, a.anexo  from areas a  where a.id_estado = 1";
$resultado = $dbpdo->query($query);

$directorios = [];
while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    $directorio = [
        'nombre' => isset($row['nombre_area']) ? $row['nombre_area'] : '',
        'telefono' => isset($row['telefono']) ? $row['telefono'] : '',
        'anexo' => isset($row['anexo']) ? $row['anexo'] : ''
    ];
    $directorios[] = $directorio;
}

echo json_encode(['data' => $directorios]);

?>
