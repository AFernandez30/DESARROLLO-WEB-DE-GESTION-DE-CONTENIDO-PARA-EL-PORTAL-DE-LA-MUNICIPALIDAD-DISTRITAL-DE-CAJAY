<?php 
$url = $_GET['url'];
$sql = "SELECT  actividad_id, DATE_FORMAT(actividad_fecha, '%d de %M del %Y') as fecha_noticia, actividad_imagen, actividad_titulo, actividad_desarrollo  from noticias  where url = '$url' and id_estado='1'";
$resultado = mysqli_query($db, $sql);

if (!$resultado) {
    // Manejar el error aquí, como mostrar un mensaje al usuario o registrar el error
    // en un archivo de registro.
    die("Error en la consulta: " . mysqli_error($db));
}

$fila = mysqli_fetch_assoc($resultado);

if (!$fila) {
    // Manejar el caso en el que no se encontraron resultados.
    die("No se encontraron resultados para '$url'");
}
$contenido_fecha = $fila["fecha_noticia"];
$contenido_imagen = $fila["actividad_imagen"];
$contenido_titulo = $fila["actividad_titulo"];
$contenido_html = $fila["actividad_desarrollo"];
?>