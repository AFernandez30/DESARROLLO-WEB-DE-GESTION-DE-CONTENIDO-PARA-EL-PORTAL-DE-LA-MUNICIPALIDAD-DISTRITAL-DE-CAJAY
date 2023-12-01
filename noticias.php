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

    <!-- Head Libs -->
    <script src="/cajay/assets/vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>
    <div class="body">

        <?php include_once('submenu/header.php'); ?>
        <div role="main" class="main">

            <!-- Contenido dinamico -->

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-dark font-weight-bold text-8">Bienvenido</h1>
                            <span class="sub-title text-dark">Consulta nuestras últimas noticias!</span>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center">
                                <li><a href="#">Inicio</a></li>
                                <li class="active">Noticias</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog< -->
            <div class="container py-4">

                <div class="row">
                    <div class="col-lg-12 order-lg-1">
                        <div class="blog-posts">
                            <?php
                            // Consulta para obtener las noticias ordenadas por fecha descendente
                            $sql = "SELECT * FROM noticias ORDER BY actividad_fecha DESC";
                            $result = mysqli_query($db, $sql);

                            // Configuración de la paginación
                            $num_noticias_por_pagina = 5;
                            $num_total_noticias = mysqli_num_rows($result);
                            $num_paginas = ceil($num_total_noticias / $num_noticias_por_pagina);

                            if (!isset($_GET['pagina'])) {
                                $pagina = 1;
                            } else {
                                $pagina = $_GET['pagina'];
                            }

                            $inicio_limit = ($pagina - 1) * $num_noticias_por_pagina;

                            // Consulta para obtener las noticias de la página actual
                            $sql_pagina = "SELECT  DATE_FORMAT(actividad_fecha, '%d de %M del %Y') as fecha_noticia, actividad_imagen, actividad_titulo, actividad_resumen, url  from noticias order by actividad_fecha desc LIMIT $inicio_limit, $num_noticias_por_pagina";

                            $result_pagina = mysqli_query($db, $sql_pagina);

                            // Ciclo para mostrar las noticias de la página actual
                            while ($row = mysqli_fetch_assoc($result_pagina)) {

                            ?>
                                <article class="post post-medium">
                                    <div class="row mb-3">
                                        <div class="col-lg-5">
                                            <div class="post-image">
                                                <a href="blog-post.html">
                                                    <img src="archivos/noticias/<?php echo $row['actividad_imagen'] ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="post-content">
                                                <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="noticia/<?php echo $row['url'] ?>"><?php echo $row['actividad_titulo'] ?></a></h2>
                                                <p class="mb-0"><?php echo $row['actividad_resumen'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i><?php echo $row['fecha_noticia'] ?> </span>
                                   
                                                <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="noticia/<?php echo $row['url'] ?>" class="btn btn-xs btn-light text-1 text-uppercase">Leer más</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- <ul class="pagination float-end">
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul> -->
                            <?php
                            }            
                            echo '<ul class="pagination float-end">';

                            for ($i = 1; $i <= $num_paginas; $i++) {
                                if ($i == $pagina) {

                                    echo '<li class="page-item"><a class="page-link" href="#">' . $i . '</a></li>';
                                } else {
                                    echo '<li class="page-item"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
                                }
                            }

                            echo '</ul>';                       
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- php -->

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
            // Obtener el ID de la URL
            var id = window.location.pathname.split("/").pop();

            // Hacer una petición AJAX al archivo PHP para obtener el contenido
            $.getJSON("municipalidad.php?id=" + id, function(data) {
                // Insertar el contenido en el elemento correspondiente
                $("#contenido-municipalidad").html(data.contenido);
            });
        });
        $(document).ready(function() {
            // Obtener la URL actual de la página
            var url = window.location.href;
            // Agregar la clase "active" al enlace correspondiente
            if (url.indexOf("index") > -1) {
                $("#enlace-inicio").addClass("active");
            } else if (url.indexOf("noticias") > -1) {
                $("#noticiasid").addClass("active");
                $("#noticias").addClass("active"); // Agregar clase al elemento padre
            }
        });
    </script>

</body>

</html>