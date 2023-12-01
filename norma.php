<?php include_once('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Municipalidad Distrital de Cajay</title>

    <meta name="keywords" content="Municipalidad Distrital de Cajay" />
    <meta name="description" content="Cajay">
    <meta name="author" content="Alexander Fernandez">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/cajay/assets/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/cajay/assets/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/cajay/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/cajay/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/cajay/assets/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="/cajay/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/cajay/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/cajay/assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/cajay/assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/cajay/assets/css/theme.css">
    <link rel="stylesheet" href="/cajay/assets/css/theme-elements.css">
    <link rel="stylesheet" href="/cajay/assets/css/theme-blog.css">
    <link rel="stylesheet" href="/cajay/assets/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="/cajay/assets/vendor/circle-flip-slideshow/css/component.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="/cajay/assets/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/cajay/assets/css/custom.css">
    <link rel="stylesheet" href="/cajay/assets/vendor/toast/toastr.min.css">

    <!-- Head Libs -->
    <script src="/cajay/assets/vendor/modernizr/modernizr.min.js"></script>
    <script src="/cajay/assets/vendor/pdfjs/pdf.js"></script>

</head>

<body data-plugin-page-transition>
    <div class="body">

        <?php include_once('submenu/header.php'); ?>
        <div role="main" class="main">

            <!-- Contenido dinamico -->


            <input id="noticiaone" type="hidden">
            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-dark font-weight-bold text-8">Normas Legales</h1>
                            <span class="sub-title text-dark">Lee nuestro articulo completo!</span>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center">
                                <li><a href="#">Inicio</a></li>
                                <li class="active">Normas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <style>
                #view-pdf {
                    border: 1px solid black;
                    direction: ltr;
                    max-width: 150px;
                }
            </style>
            <div class="container py-4">
                <!-- <div class="text-center">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareModal"><i class="fa-solid fa-share-nodes fa-2xl"></i> Compartir</button>
                </div> -->
                <!-- Modal -->
                <!-- Modal -->
                <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!-- <h5 class="modal-title" id="shareModalLabel">Compartir</h5> -->
                                <h4 class="modal-title" id="defaultModalLabel">Compartir</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" aria-label="Cerrar">&times;</button>
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"> 
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>-->
                            </div>
                            <div class="modal-body">
                                <p>Copiar enlace:</p>
                                <input type="text" id="shareLinkInput" readonly>
                                <button class="btn btn-primary btn-success" onclick="copyShareLink()">Copiar</button>
                                <p>Compartir en:</p>
                                <button class="btn btn-success" onclick="shareOnWhatsApp()"><i class="fa-brands fa-whatsapp fa-xl"></i> WhatsApp</button>
                                <button class="btn btn-primary" onclick="shareOnFacebook()"><i class="fa-brands fa-facebook fa-xl"></i> Facebook</button>
                                <button class="btn btn-primary" onclick="shareByEmail()"><i class="fa-solid fa-envelope fa-xl"></i> Correo</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //FIN MODAL -->
                <!-- prueba -->
                <div class="col-md-12">
                    <div class="card border-radius-0 bg-color-light box-shadow-6 anim-hover-translate-top-10px transition-3ms">
                        <div class="card-body py-5">

                            <div class="">
                                <?php
                                $url = ''; 
                                // Recuperar el valor de la URL de la noticia que el usuario ha hecho clic
                                if (isset($_GET['url'])) {
                                    $url = $_GET['url'];
                                    // Resto de tu código que utiliza la variable $url
                                  } else {
                                    // Acciones a realizar si la clave 'url' no está presente en la consulta GET
                                    
                                  }
                                  
                                // Realizar una consulta a la base de datos para obtener la información de la noticia
                                $sql = "SELECT
                                LPAD(DAY(fecha_doc), 2, '0') AS dia,
                                MONTHNAME(fecha_doc) AS mes,
                                YEAR(fecha_doc) AS anio,
                                descripcion,
                                numero_doc,
                                nombre_doc,
                                CONCAT(td.nombre_tipo, ' ', d.numero_doc) AS nombredocu,
                                UPPER(SUBSTRING_INDEX(nombre_doc, '.', -1)) AS extension,
                                SUBSTRING_INDEX(nombre_doc, '.', 1) AS nombre_sin_extension,
                                CONCAT(FORMAT(ROUND((LENGTH(nombre_doc) - LENGTH(REPLACE(nombre_doc, '/', '')) + 1) * 1024 / 1000), 1), ' KB') AS tamano_archivo
                              --  CONCAT(SUBSTRING_INDEX(nombre_doc, '.', 1), ' ', FORMAT(ROUND((LENGTH(nombre_doc) - LENGTH(REPLACE(nombre_doc, '/', '')) + 1) * 1024 / 1000), 1), ' KB') AS tamano_archivo
                              FROM
                                documentos d
                                INNER JOIN tipo_estados te ON d.id_estado = te.id_estado
                                INNER JOIN tipo_documentos td ON d.id_tipodoc = td.id_tipodoc
                                        where url = '$url' and te.id_estado=1
                                        ";
                                $resultado = mysqli_query($db, $sql);
                                // Verificar si se encontró una noticia con la URL proporcionada
                                if (mysqli_num_rows($resultado) == 1) {
                                    // Obtener los datos de la noticia
                                    $row = mysqli_fetch_assoc($resultado);
                                    // Mostrar el contenido completo de la noticia
                                ?>
                                    <div class="text-center">
                                        <div class="plan-price bg-transparent mb-4">
                                            <h2 class="mb-1"> <span class="font-weight-bold text-color-primary"><?php echo $row['nombredocu'] ?></span></h2>
                                            <label class="price-label"><?php echo $row['dia'] ?> de <?php echo $row['mes'] ?> del <?php echo $row['anio'] ?></label>
                                        </div>
                                    </div>
                                    <ul class="list list-icons list-icons-style-3 list-primary list-icons-sm ms-3">
                                        <li><i class="fas fa-check"></i> <?php echo $row['descripcion'] ?></li>
                                        <li></li>
                                    </ul>
                                    <div class="text-center">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareModal"><i class="fa-solid fa-share-nodes fa-2xl"></i> Compartir</button>
                                    </div>
                                    <!-- Modal -->
                                    <!-- Modal -->
                                    <?php
                                    function formatBytes($bytes, $decimals = 2)
                                    {
                                        $size = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
                                        $factor = floor((strlen($bytes) - 1) / 3);
                                        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . @$size[$factor];
                                    }

                                    $archivo = '/cajay/archivos/normas/' . $row['nombre_doc'];
                                    $rutaArchivo = $_SERVER['DOCUMENT_ROOT'] . '/cajay/archivos/normas/' . $row['nombre_doc'];
                                    $tamano = 0;
                                    //echo $archivo;
                                    if (file_exists($rutaArchivo)) {
                                        $tamano = filesize($rutaArchivo);
                                        //echo 'Tamaño del archivo: ' . formatBytes($tamano);
                                    } else {
                                        echo 'El archivo no existe.';
                                    }

                                    ?>
                                    <!-- //FIN MODAL -->
                                    <div class="col-lg-6">
                                        <div class="featured-box  featured-box-primary featured-box-effect-2" style="background-color:#F8F9F9;">
                                            <div class="box-content box-content-border-bottom p-0">
                                                <div class="card-body p-relative zindex-1">
                                                    <div class="feature-box feature-box-primary">
                                                        <a href="/cajay/archivos/normas/<?php echo $row['nombre_doc'] ?>" target="_blank"><canvas id="view-pdf"></canvas></a>
                                                        <div class="feature-box-info">
                                                            <h4 class="mb-2"><?php echo $row['nombre_sin_extension']; ?></h4>
                                                            <p class="mb-0 font-weight-semi-bold"><?php echo $row['extension'] ?> | <?php  echo  formatBytes($tamano)?> </p>
                                                            <!-- <div class="document__type">PDF</div>
                                                            <div class="document__separator"></div>
                                                            <div class="document__size">61.2 KB</div> -->
                                                            <p class="mb-0"></p>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-4 pt-1">
                                                        <a href="/cajay/archivos/normas/<?php echo $row['nombre_doc'] ?>" class="btn btn-primary btn-outline p-2" style="width:100%;" target="_blank">
                                                            <i class="fa-solid fa-cloud-arrow-down fa-2xl"></i> <span class="font-weight-bold">DESCARGAR</span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- tamaño del archivo -->
                            <?php
                                    //$archivo = 'http://localhost/cajay/archivos/normas/' . urlencode($row['nombre_doc']);
                                    //$nombreArchivo = str_replace(' ', '_', $row['nombre_doc']);
                                    // $archivo = 'http://localhost/cajay/archivos/normas/' . $nombreArchivo;


                            ?>
                            <!-- //openShareModal -->

                            <script>
                                // If absolute URL from the remote server is provided, configure the CORS
                                // header on that server.
                                //var url = 'https://raw.githubusercontent.com/mozilla/pdf.js/ba2edeae/examples/learning/helloworld.pdf';
                                var url = '/cajay/archivos/normas/<?php echo $row['nombre_doc'] ?>';

                                // Loaded via <script> tag, create shortcut to access PDF.js exports.
                                var pdfjsLib = window['pdfjs-dist/build/pdf'];

                                // The workerSrc property shall be specified.
                                //     pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';
                                pdfjsLib.GlobalWorkerOptions.workerSrc = '/cajay/assets/vendor/pdfjs/pdf.worker.js';

                                // Asynchronous download of PDF
                                var loadingTask = pdfjsLib.getDocument(url);
                                loadingTask.promise.then(function(pdf) {
                                    // console.log('PDF loaded');

                                    // Fetch the first page
                                    var pageNumber = 1;
                                    pdf.getPage(pageNumber).then(function(page) {
                                        // console.log('Page loaded');

                                        var scale = 1.5;
                                        var viewport = page.getViewport({
                                            scale: scale
                                        });

                                        // Prepare canvas using PDF page dimensions
                                        var canvas = document.getElementById('view-pdf');
                                        var context = canvas.getContext('2d');
                                        canvas.height = viewport.height;
                                        canvas.width = viewport.width;

                                        // Render PDF page into canvas context
                                        var renderContext = {
                                            canvasContext: context,
                                            viewport: viewport
                                        };
                                        var renderTask = page.render(renderContext);
                                        renderTask.promise.then(function() {
                                            // console.log('Page rendered');
                                        });
                                    });
                                }, function(reason) {
                                    // PDF loading error
                                    // console.error(reason);
                                });
                            </script>
                        <?php
                                } else {
                                    // Mostrar un mensaje de error si no se encontró la noticia
                                    //echo 'Lo sentimos, la noticia que estás buscando no se encuentra disponible.';
                                    echo "	<div class='alert alert-danger'>
                                            <strong>Oh lo sentimos!</strong> El documento no se encuentra disponible? <a href='/cajay/normas-legales' class='alert-link'>Ver más Documentos</a>.
                                        </div>";
                                }
                        ?>
                        </div>
                    </div>
                </div>
                <!-- cierre prueba -->

            </div>
            <!-- fin contenido -->
        </div>
        <?php include_once('submenu/footer.php'); ?>
    </div>

    <!-- Vendor -->
    <script src="/cajay/assets/vendor/plugins/js/plugins.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="/cajay/assets/js/theme.js"></script>

    <!-- Circle Flip Slideshow Script -->
    <script src="/cajay/assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <!-- Current Page Views -->
    <script src="/cajay/assets/js/views/view.home.js"></script>

    <!-- Theme Custom -->
    <script src="/cajay/assets/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="/cajay/assets/js/theme.init.js"></script>
    <script src="/cajay/assets/vendor/toast/toastr.min.js"></script>
    <script>
        // Obtener la fecha y hora actual
        var now = new Date();
        // Configurar la fecha y hora en el formato deseado
        var options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        var dateString = now.toLocaleDateString("es-ES", options);
        var hours = now.getHours();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12;
        var minutes = now.getMinutes();
        minutes = minutes < 10 ? '0' + minutes : minutes;
        var timeString = hours + ':' + minutes + ' ' + ampm;

        // Agregar la fecha y hora al contenido del elemento li utilizando jQuery
        $("#date-time").append(" " + dateString + " " + timeString);

        // Obtener el año actual
        var currentYear = new Date().getFullYear();

        // Agregar el año actual al contenido del elemento span utilizando jQuery
        $("#current-year").text(currentYear);
        $(document).ready(function() {
            // Obtener la URL actual de la página
            var url = window.location.href;
            // Verificar si la URL contiene la URL de la noticia
            if (url.indexOf("<?php echo $url ?>") > -1) {
                // Agregar la clase "active" al enlace correspondiente en tu menú
                $("#noticiasid").addClass("active");
            }
        });
        //LIS
        function openShareModal() {
            document.getElementById("shareModal").style.display = "block";
        }

        function closeShareModal() {
            document.getElementById("shareModal").style.display = "none";
        }


        function copyShareLink() {
            var shareLink = window.location.href;
            var shareLinkInput = document.getElementById("shareLinkInput");
            shareLinkInput.value = shareLink;
            shareLinkInput.select();
            document.execCommand("copy");
            // Mostrar la notificación de éxito con Sonner
            // toastr.success("¡Enlace copiado correctamente!");
            toastr.success("¡Enlace copiado correctamente!");
            // Mostrar el mensaje de éxito
            // var alertElement = document.getElementById("successAlert");
            // alertElement.style.display = "block";
        }

        function shareOnWhatsApp() {
            var shareLink = window.location.href;
            var whatsappURL = "https://api.whatsapp.com/send?text=" + encodeURIComponent(shareLink);
            window.open(whatsappURL);
        }

        function shareOnFacebook() {
            var shareLink = window.location.href;

            var facebookShareURL = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(shareLink);

            window.open(facebookShareURL, '_blank');
        }

        // function shareOnFacebook() {
        //     var shareLink = window.location.href;
        //     // Comprueba si el SDK de Facebook está cargado
        //     if (typeof FB !== 'undefined') {
        //         FB.ui({
        //             method: 'share',
        //             href: shareLink
        //         }, function(response) {
        //             // Callback para manejar la respuesta después de compartir en Facebook
        //             if (response && !response.error_code) {
        //                 console.log('¡Se compartió en Facebook correctamente!');
        //             } else {
        //                 console.log('Error al compartir en Facebook: ' + response.error_message);
        //             }
        //         });
        //     } else {
        //         console.log('El SDK de Facebook no está cargado.');
        //     }

        // }

        function shareByEmail() {
            var shareLink = window.location.href;
            var subject = "¡Mira este enlace interesante!";
            var body = "¡Hola! He encontrado este enlace que creo que te podría interesar:\n\n" + shareLink;

            // Abre el cliente de correo electrónico predeterminado
            var mailtoUrl = "mailto:?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
            window.location.href = mailtoUrl;
        }
    </script>

</body>

</html>