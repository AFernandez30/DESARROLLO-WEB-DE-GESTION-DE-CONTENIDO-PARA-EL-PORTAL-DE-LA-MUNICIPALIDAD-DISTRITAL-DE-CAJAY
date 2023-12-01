<?php
require_once "../../conexion.php";

$query = "SELECT e.id, e.actividad, e. descripcion, e.lugar,DATE_FORMAT(e.fecha_hora, '%d de %M del %Y') as fecha,  TIME_FORMAT(e.fecha_hora , '%h:%i %p') AS hora  from eventos e
where e.id_estado = 1 and show_portal = 1";
if (!empty($_GET['representante'])) {
  $representante = $_GET['representante'];
  if ($representante == "1") {
    $columna = "for_alcalde";
  } elseif ($representante == "2") {
    $columna = "for_gerentemuni";
  }
  $query .= " AND $columna = 1";
}

if (!empty($_GET['palabraclave'])) {
  $query .= " AND (e.descripcion LIKE '%{$_GET['palabraclave']}%' OR e.actividad LIKE '%{$_GET['palabraclave']}%')";
}

if (!empty($_GET['fechaconsulta'])) {
  $fechaconsulta = $_GET['fechaconsulta'];
  // Asegurarse de que la fecha esté en el formato correcto (por ejemplo, YYYY-MM-DD)
  // Puedes usar funciones como strtotime() y date() para formatear la fecha
  $fechaconsulta_formateada = date('Y-m-d', strtotime($fechaconsulta));
  $query .= " AND e.fecha_inicio = '$fechaconsulta_formateada'";
}
$query .= " ORDER BY e.id DESC";

$resultado = $dbpdo->query($query);

$documentos = [];
while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
  $documento = [
    'nro' => $row['id'],  
    'actividad' => $row['actividad'],
    'descripcion' => $row['descripcion'],
    'lugar' => $row['lugar'], 
    'fecha' => $row['fecha'],                                            
    'hora' => $row['hora'],                                     
  ];
  $documentos[] = $documento;
}
echo json_encode($documentos);


?>