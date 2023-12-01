<?php
require_once "../../conexion.php";

// Ejecutar la consulta para obtener el número total de registros
$stmt = $dbpdo->query("SELECT COUNT(*) FROM documentos where id_estado = 1");
if ($stmt) {
    // Si la consulta se ejecuta correctamente, obtener el número total de registros
    $total_records = $stmt->fetchColumn();
} else {
    // Si hay un error en la ejecución de la consulta, devolver un mensaje de error
    header('HTTP/1.1 500 Internal Server Error');
    echo "Error en la ejecución de la consulta: " . $stmt->errorInfo()[2];
    exit();
}

// Obtener el número de página actual
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Definir el número de registros que se mostrarán por página
$records_per_page = 5;

// Calcular el offset
$offset = ($page - 1) * $records_per_page;

// Consulta SQL para obtener los documentos paginados
$query = "SELECT concat(td.nombre_tipo,' ',d.numero_doc)  as nombredocumento, d.descripcion, DATE_FORMAT(d.fecha_doc, '%d de %M del %Y') as fecha, day(d.fecha_doc) as dia, monthname(d.fecha_doc) as mes, 
year(d.fecha_doc) as anio, d.nombre_doc  from documentos d 
inner join tipo_documentos td on td.id_tipodoc =d.id_tipodoc 
where id_estado = 1 order by d.fecha_doc desc limit :limit offset :offset";

// Preparar la consulta
$stmt = $dbpdo->prepare($query);

// Asignar los valores de los parámetros
$stmt->bindValue(':limit', $records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

// Ejecutar la consulta
if ($stmt->execute()) {
    // Obtener los resultados
    $documentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Calcular el número total de páginas
    $total_pages = ceil($total_records / $records_per_page);

    $response = array(
        'records' => $documentos,
        'pagination' => array(
            'total_records' => $total_records,
            'total_pages' => $total_pages,
            'current_page' => $page,
            'records_per_page' => $records_per_page
        )
    );    
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Si hay un error en la ejecución de la consulta, devolver un mensaje de error
    header('HTTP/1.1 500 Internal Server Error');
    echo "Error en la ejecución de la consulta: " . $stmt->errorInfo()[2];
}
?>