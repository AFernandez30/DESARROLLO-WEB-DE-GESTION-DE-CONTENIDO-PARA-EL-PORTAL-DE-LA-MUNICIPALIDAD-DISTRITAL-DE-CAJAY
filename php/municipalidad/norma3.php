<?php
require_once "../../conexion.php";


// Consulta SQL para obtener los documentos paginados
$query = "SELECT concat(td.nombre_tipo,' ',d.numero_doc)  as nombredocumento, d.descripcion, DATE_FORMAT(d.fecha_doc, '%d de %M del %Y') as fecha, day(d.fecha_doc) as dia, monthname(d.fecha_doc) as mes, 
year(d.fecha_doc) as anio, d.nombre_doc  from documentos d 
inner join tipo_documentos td on td.id_tipodoc =d.id_tipodoc 
where id_estado = 1 order by d.fecha_doc desc";


 $stmt = $dbpdo->prepare($query);
 if ($stmt->execute()) {
   $documentos = $stmt->fetch(PDO::FETCH_ASSOC);
   header('Content-Type: application/json');
   echo json_encode($documentos);

 } else {
   // Si hay un error en la ejecución de la consulta, devolver un mensaje de error
   header('HTTP/1.1 500 Internal Server Error');
   echo "Error en la ejecución de la consulta: " . $stmt->errorInfo()[2];
 }

?>