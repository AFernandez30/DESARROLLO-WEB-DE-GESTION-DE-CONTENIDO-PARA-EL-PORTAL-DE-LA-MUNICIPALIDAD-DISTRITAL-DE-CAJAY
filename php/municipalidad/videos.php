
<?php
header('Content-Type: application/json');
require_once "../../conexion.php";
// use ../../vendor/plugins/Nullix\CryptoJsAes\CryptoJsAes;
use Nullix\CryptoJsAes\CryptoJsAes;
require_once '../../assets/vendor/plugins/cryptojs/src/CryptoJsAes.php';
// require_once "../../vendor/plugins/cryptojs/src/CryptoJsAes.php";
// $query = "SELECT url, titulo, Descripcion, dayname(fecha_publicacion) as dia, monthname(fecha_publicacion)  as mes, 
// year(fecha_publicacion) as anio FROM videos  WHERE id_estado = 1 ORDER BY id_videos DESC";
// $resultado = $dbpdo->query($query);

// $videos = [];
// while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
//   $video = [
//     'url' => $row['url'],  
//     'titulo' => $row['titulo'],  
//     'Descripcion' => $row['Descripcion'],
//     'dia' => $row['dia'],
//     'mes' => $row['mes'],    
//     'mes' => $row['mes'],    
//     'anio' => $row['anio']                                     
//   ];
//   $videos[] = $video;
// }
//echo json_encode($videos);
// Crear un array con el IV y el JSON cifrado
// $datos_cifrados = [
//     'iv' => base64_encode($iv),
//     'json' => base64_encode($json_cifrado)
//   ];
// Crear un vector de inicialización aleatorio
// Crear un vector de inicialización aleatorio
// Generar un vector de inicialización aleatorio
// Obtener el vector de inicialización
// Generar un vector de inicialización aleatorio
// Obtener el vector de inicialización aleatorio

// Obtener el vector de inicialización
// Generar el vector de inicialización
// $query = "SELECT url, titulo, Descripcion, dayname(fecha_publicacion) as dia, monthname(fecha_publicacion)  as mes, 
// year(fecha_publicacion) as anio FROM videos  WHERE id_estado = 1 ORDER BY id_videos DESC";
// $resultado = $dbpdo->query($query);

// $videos = [];
// while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
//   $video = [
//     'url' => $row['url'],  
//     'titulo' => $row['titulo'],  
//     'Descripcion' => $row['Descripcion'],
//     'dia' => $row['dia'],
//     'mes' => $row['mes'],    
//     'mes' => $row['mes'],    
//     'anio' => $row['anio']                                     
//   ];
//   $videos[] = $video;
// }

// $clave = "123456";
// $encrypted = CryptoJsAes::encrypt($videos, $clave);

// $decrypted = CryptoJsAes::decrypt($encrypted, $clave);

// echo "Encrypted: " . $encrypted . "\n";
//echo "Decrypted: " . print_r($videos, true) . "\n";
// Cargar la librería CryptoJS


if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // aquí pones el código que quieres que se ejecute si la petición viene de AJAX
    $query = "SELECT url, titulo, Descripcion, dayname(fecha_publicacion) as dia, monthname(fecha_publicacion)  as mes, year(fecha_publicacion) as anio FROM videos 
     WHERE id_estado = 1 ORDER BY id_videos DESC";
$resultado = $dbpdo->query($query);

$videos = [];
while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
  $video = [
    'url' => $row['url'],  
    'titulo' => $row['titulo'],  
    'Descripcion' => $row['Descripcion'],
    'dia' => $row['dia'],
    'mes' => $row['mes'],    
    'anio' => $row['anio']                                     
  ];
  $videos[] = $video;
}

$clave = "123456";
$encrypted = CryptoJsAes::encrypt(json_encode($videos), $clave);
echo json_encode($encrypted);
 } else {
    // aquí pones el código que quieres que se ejecute si la petición no viene de AJAX
   // echo('Error no esta permitido');
 }
 
?>