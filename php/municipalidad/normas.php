<?php
require_once "../../../conexion.php";
// Consulta SQL para obtener los datos de la tabla
// $query = 'SELECT id, nombre, apellidos, numero_documento, usuario, foto, fecha_creacion, fecha_actualizacion, perfil_id
// FROM usuarios';
//$query = 'SELECT u.id AS id_usuario, u.nombre AS usuario_nombre, u.apellidos, u.numero_documento, u.usuario, u.foto, DATE_FORMAT(u.fecha_actualizacion, "%d-%m-%Y") as fecha_actualizacion, p.nombre AS perfil_nombre, a.nombre_area  from usuarios u inner join perfiles p on u.perfil_id  = p.id inner join areas a on u.id_area = a.id_area';
$query = "select d.numero_doc, d.descripcion, DATE_FORMAT(d.fecha_doc , '%d de %M del %Y') as fecha  from documentos d where id_estado =1";
$resultado = $dbpdo->query($query);

// Generamos el JSON necesario para el datatable
$tickets = [];

while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    $ticket = [
       // 'asunto' => $row['asunto'],
        'numero_doc' => $row['numero_doc'],
        'id_estado' => $row['id_estado'],
        'descripcion' => $row['descripcion'],    
        'fecha' => $row['fecha'],               
        'id_ticket' => $row['id_ticket']         
    ];
    $tickets[] = $ticket;
}

echo json_encode(['data' => $tickets]);


?>
