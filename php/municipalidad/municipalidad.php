<?php


$titulo = ''; 
// Recuperar el valor de la URL de la noticia que el usuario ha hecho clic
if (isset($_GET['titulo'])) {
    $titulo = $_GET['titulo'];
    // Resto de tu código que utiliza la variable $url
  } else {
    // Acciones a realizar si la clave 'url' no está presente en la consulta GET    
  }
//$titulo = $_GET['titulo'];
$sql = "SELECT titulo_menu, contenido, javascript FROM menu_contenido WHERE titulo_menu = '$titulo' and id_estado=1";
$resultado = mysqli_query($db, $sql);

if (!$resultado) {
    // Manejar el error aquí, como mostrar un mensaje al usuario o registrar el error
    // en un archivo de registro.
    die("Error en la consulta: " . mysqli_error($db));
}

$fila = mysqli_fetch_assoc($resultado);
if (!$fila) {
    // Manejar el caso en el que no se encontraron resultados.
    $contenido_html = "
        <div class='alert alert-danger'>
            <strong>Oh lo sentimos!</strong> Verifique la url? 
            <a href='/cajay/inicio' class='alert-link'>Regresar al inicio</a>.
        </div>";
} else {
    $contenido_html = $fila["contenido"];
    $titulo = $fila["titulo_menu"];
    $javascript = $fila["javascript"];
}

?>