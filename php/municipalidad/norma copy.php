<?php

// Obtener los valores enviados por AJAX
  // $filtro_tipo = isset($_POST['filtro_tipo']) ? $_POST['filtro_tipo'] : '';
  // $ordenar_por = isset($_POST['ordenar_por']) ? $_POST['ordenar_por'] : 'fecha_desc';


  require_once ("../../../conexion.php");
  $sql = "SELECT concat(td.nombre_tipo,' ',d.numero_doc)  as nombredocumento, d.descripcion, DATE_FORMAT(d.fecha_doc, '%d de %M del %Y') as fecha, d.nombre_doc
								FROM documentos d 
								INNER JOIN tipo_documentos td ON td.id_tipodoc = d.id_tipodoc 
								WHERE id_estado = 1";
$limit = 10;
$page = (isset($_POST['page']) && $_POST['page'] > 0) ? $_POST['page'] : 1;
$offset = ($page - 1) * $limit;

$documento = $_POST['documento'];
$palabraclave = $_POST['palabraclave'];
$orden = $_POST['orden'];

$where = "";
if (!empty($documento)) {
    $where .= " AND documento_id = '$documento'";
}

if (!empty($palabraclave)) {
    $where .= " AND (titulo_norma LIKE '%$palabraclave%' OR descripcion_norma LIKE '%$palabraclave%')";
}

if ($orden == 'ascendente') {
    $order = "ORDER BY fecha_norma DESC";
} else {
    $order = "ORDER BY fecha_norma ASC";
}

$query = "SELECT * FROM documentos WHERE id_Estado = '1' $where $order LIMIT $offset, $limit";
$resultado = mysqli_query($db, $query);

$contenido = '';

if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $id_norma = $row['id_norma'];
        $titulo_norma = $row['titulo_norma'];
        $descripcion_norma = $row['descripcion_norma'];
        $url_norma = $row['url_norma'];
        $fecha_norma = date('d-m-Y', strtotime($row['fecha_norma']));
        $documento_id = $row['documento_id'];

        $contenido .= '<article class="post">';
        $contenido .= '<div class="post-date">';
        $contenido .= '<span class="day">' . date('d', strtotime($row['fecha_norma'])) . '</span>';
        $contenido .= '<span class="month">' . date('M', strtotime($row['fecha_norma'])) . '</span>';
        $contenido .= '<span class="day">' . date('Y', strtotime($row['fecha_norma'])) . '</span>';
        $contenido .= '</div>';
        $contenido .= '<h4><a href="archivos/normas/' . $url_norma . '" class="text-decoration-none">' . $titulo_norma . '</a></h4>';
        $contenido .= '<a href="archivos/normas/' . $url_norma . '" target="_blank" class="btn btn-outline btn-primary btn-lg float-end mb-2"><i class="fas fa-download"></i> Descargar</a>';
        $contenido .= '<p>' . $descripcion_norma . '</p>';
        $contenido .= '<div class="post-meta">';
        $contenido .= '<span><i class="fa-solid fa-calendar-days"></i> ' . $fecha_norma . '</span>';
        $contenido .= '<a href="archivos/normas/' . $url_norma . '" class="read-more text-color-primary font-weight-semibold mt-2 float-end text-4">Leer más <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>';
        $contenido .= '<hr class="solid">';
        $contenido .= '</div>';
        $contenido .= '</article>';
    }

    $query_count = "SELECT COUNT(*) AS total FROM documentos WHERE id_estado = '1' $where";
   
