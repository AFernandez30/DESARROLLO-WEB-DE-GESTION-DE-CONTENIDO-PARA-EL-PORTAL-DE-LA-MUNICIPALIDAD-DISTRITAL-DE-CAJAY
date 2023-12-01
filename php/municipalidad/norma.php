<?php
require_once "../../conexion.php";
$documentos = '';
$pagina = isset($_POST['pagina']) ? $_POST['pagina'] : 1;
$registros_por_pagina = 5;

// Construir la consulta SQL base
$sql = "SELECT  * FROM documentos where id_Estado='1' ";

// Agregar el filtro por tipo de documento (si se especificó)
if (isset($_POST['tipo_documento']) && $_POST['tipo_documento'] != '') {
    $tipo_documento = $_POST['tipo_documento'];
    $sql .= " AND id_tipodoc = '$tipo_documento'";
}

// Agregar el filtro por palabra clave (si se especificó)
if (isset($_POST['palabra_clave']) && $_POST['palabra_clave'] != '') {
    $palabra_clave = $_POST['palabra_clave'];
    $sql .= " AND (numero_doc LIKE '%$palabra_clave%' OR descripcion LIKE '%$palabra_clave%')";
}

// Agregar el filtro por ordenamiento (si se especificó)
if (isset($_POST['orden']) && $_POST['orden'] != '') {
    $orden = $_POST['orden'];
    if ($orden == 'ascendente') {
        $sql .= " ORDER BY fecha_doc ASC";
    } elseif ($orden == 'descendente') {
        $sql .= " ORDER BY fecha_doc DESC";
    }
}

// Ejecutar la consulta SQL para obtener el número total de registros
$sql_count = str_replace('*', 'COUNT(*)', $sql);
$result_count = mysqli_query($db, $sql_count);
$num_registros = mysqli_fetch_array($result_count)[0];

// Calcular el número total de páginas y la página actual
$num_paginas = ceil($num_registros / $registros_por_pagina);
$pagina = max(min($pagina, $num_paginas), 1);

// Agregar la limitación para la paginación
$limit = " LIMIT " . ($pagina - 1) * $registros_por_pagina . ", $registros_por_pagina";
$sql .= $limit;

$resultado = mysqli_query($db, $sql);

if (mysqli_num_rows($resultado) > 0) {
  while ($row = mysqli_fetch_assoc($resultado)) {
      $titulo = $row['numero_doc'];
      $descripcion = $row['descripcion'];
      $url = $row['url'];
      $fecha_publicacion = date("j F, Y", strtotime($row['fecha_doc']));
      $tipo_documento = $row['id_tipodoc'];
      $nombredocumento = $row['url'];
      $documentos .= "
                      <article class='post'>
                      <div class='post-date'>
                        <span class='day'>" . date('d', strtotime($row['fecha_doc'])) . "</span>
                        <span class='month'>" . date('M', strtotime($row['fecha_doc'])) . "</span>
                        <span class='day'>" . date('Y', strtotime($row['fecha_doc'])) . "</span>
                      </div>
                      <h4><a href='norma/$url' class='text-decoration-none'>$titulo</a></h4>
                      <a href='archivos/normas/$nombredocumento' target='_blank' class='btn btn-outline btn-primary btn-lg float-end mb-2'><i class='fas fa-download'></i> Descargar</a>
      
                      <p></p>
                      <div class='post-meta'>
                        <span><i class='fa-solid fa-calendar-days'></i>aaaa </span>
                        <a href='norma/' class='read-more text-color-primary font-weight-semibold mt-2 float-end text-4'>Leer más <i class='fas fa-angle-right position-relative top-1 ms-1'></i></a>
                        <hr class='solid'>
                      </div>
                    </article>";
  }

  // Imprimir la lista de documentos
  echo $documentos;
  
  // Calcular el número total de páginas y la página actual
  $num_registros = mysqli_fetch_array($result_count)[0];
  $num_paginas = ceil($num_registros / $registros_por_pagina);
  $total_paginas = max($num_paginas, 1); // Si no hay registros, al menos hay una página
  $pagina = max(min($pagina, $total_paginas), 1);
  
  // Paginado
  if (isset($total_paginas) && $total_paginas > 1) {
    echo "<div class='pagination'>
              <ul class='pagination-list'>";
    if ($pagina != 1) {
        echo "<li class='pagination-item'>
                  <a href='#' class='pagination-link' onclick='cargarContenido(\"" . ($pagina - 1) . "\", \"$palabraclave\", \"$documento\")'><i class='fas fa-chevron-left'></i></a>
                </li>";
    }
    for ($i = 1; $i <= $total_paginas; $i++) {
        if ($pagina == $i) {
            echo "<li class='pagination-item is-active'><a href='#' class='pagination-link'>$i</a></li>";
        } else {
            echo "<li class='pagination-item'><a href='#' class='pagination-link' onclick='cargarContenido(\"$i\", \"$palabraclave\", \"$documento\")'>$i</a></li>";
        }
    }
    if ($pagina != $total_paginas) {
        echo "<li class='pagination-item'>
                  <a href='#' class='pagination-link' onclick='cargarContenido(\"" . ($pagina + 1) . "\", \"$palabraclave\", \"$documento\")'><i class='fas fa-chevron-right'></i></a>
                </li>";
    }
    echo "</ul></div>";
  }
}

  ?>