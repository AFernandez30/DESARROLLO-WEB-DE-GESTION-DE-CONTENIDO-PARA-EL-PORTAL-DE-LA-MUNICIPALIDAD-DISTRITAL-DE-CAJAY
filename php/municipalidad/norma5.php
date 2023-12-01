<?php
require_once "../../conexion.php";

$query = "SELECT d.id_doc, concat(td.nombre_tipo,' ',d.numero_doc)  as nombredocumento, d.descripcion, DATE_FORMAT(d.fecha_doc, '%d de %M del %Y') as fecha, day(d.fecha_doc) as dia, monthname(d.fecha_doc) as mes, 
year(d.fecha_doc) as anio, d.nombre_doc, d.url 
FROM documentos d 
INNER JOIN tipo_documentos td ON td.id_tipodoc = d.id_tipodoc 
WHERE d.id_estado = 1";
if (!empty($_GET['documento'])) {
  $query .= " AND td.id_tipodoc = {$_GET['documento']}";
}
if (!empty($_GET['palabraclave'])) {
  $query .= " AND (d.descripcion LIKE '%{$_GET['palabraclave']}%' OR d.numero_doc LIKE '%{$_GET['palabraclave']}%')";
}
if (!empty($_GET['orden'])) {
  $query .= " ORDER BY d.fecha_doc {$_GET['orden']}";
}
$resultado = $dbpdo->query($query);

$documentos = [];
while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
  $documento = [
    'nro' => $row['id_doc'],  
    'nombredocumento' => $row['nombredocumento'],
    'descripcion' => $row['descripcion'],
    'fecha' => $row['fecha'],
    'dia' => $row['dia'],    
    'mes' => $row['mes'],    
    'anio' => $row['anio'],    
    'nombre_doc' => $row['nombre_doc'],                                     
    'url' => $row['url'],                                     
  ];
  $documentos[] = $documento;
}
echo json_encode($documentos);


?>