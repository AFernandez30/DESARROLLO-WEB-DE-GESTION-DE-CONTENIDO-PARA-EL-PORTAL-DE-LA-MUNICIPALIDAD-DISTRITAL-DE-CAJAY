<?php
require_once "../../conexion.php";

$query = "SELECT d.id_doc, concat(td.nombre_tipo,' ',d.numero_doc)  as nombredocumento, d.descripcion, DATE_FORMAT(d.fecha_doc, '%d de %M del %Y') as fecha, day(d.fecha_doc) as dia, monthname(d.fecha_doc) as mes, 
year(d.fecha_doc) as anio, d.nombre_doc  from documentos d 
inner join tipo_documentos td on td.id_tipodoc =d.id_tipodoc 
where id_estado = 1 order by d.fecha_doc desc";
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
        'nombre_doc' => $row['nombre_doc']                                       
    ];
    $documentos[] = $documento;
}

// echo json_encode(['data' => $documentos]);
echo json_encode($documentos);
?>