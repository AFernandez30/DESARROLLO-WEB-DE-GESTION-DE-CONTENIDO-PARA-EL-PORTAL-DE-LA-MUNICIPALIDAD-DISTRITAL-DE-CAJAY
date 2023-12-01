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
    <style>
        /* CSS personalizado para limitar el tamaño de la imagen */

        /* Media query para dispositivos móviles */
        @media (max-width: 768px) {
            .image_resized {
                max-width: 100%;
                /* Ajusta el ancho al 100% en dispositivos móviles */
                max-height: auto;
                /* Ajusta la altura automáticamente en dispositivos móviles */
            }
        }
    </style>
</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 0, 'effect': 'pulse'}">
    <div class="body">

        <?php include_once('submenu/header.php'); ?>
        <div role="main" class="main">

            <!-- Contenido dinamico -->


            <input id="noticiaone" type="hidden">
            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-dark font-weight-bold text-8">Noticia Completa</h1>
                            <span class="sub-title text-dark">¡Agradecemos que hayas visto nuestra noticia completa!</span>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center">
                                <li><a href="/cajay/inicio">Inicio</a></li>
                                <li class="active"><a href="cajay/noticias">Noticias</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <div class="blog-posts single-post">

                            <?php
                            // Recuperar el valor de la URL de la noticia que el usuario ha hecho clic
                            $url = $_GET['url'];
                            // Realizar una consulta a la base de datos para obtener la información de la noticia
                            $sql = "SELECT  actividad_id,LPAD(DAY(actividad_fecha), 2, '0') as dia, MONTHNAME(actividad_fecha) as mes, year(actividad_fecha) as anio, actividad_imagen, actividad_titulo, actividad_desarrollo   from noticias  WHERE url = '$url'";
                            $resultado = mysqli_query($db, $sql);

                            // Verificar si se encontró una noticia con la URL proporcionada
                            if (mysqli_num_rows($resultado) == 1) {
                                // Obtener los datos de la noticia
                                $row = mysqli_fetch_assoc($resultado);
                                // Mostrar el contenido completo de la noticia
                            ?>

                                <article class="post post-large blog-single-post border-0 m-0 p-0">
                                    <div class="post-image ms-0">
                                        <a >
                                            <img src="/cajay/archivos/noticias/<?php echo $row['actividad_imagen'] ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />

                                        </a>
                                    </div>

                                    <div class="post-date ms-0">
                                        <span class="day"><?php echo $row['dia'] ?></span>
                                        <span class="month"><?php echo $row['mes'] ?></span>
                                        <span class="day"><?php echo $row['anio'] ?></span>
                                    </div>

                                    <div class="post-content ms-2">

                                        <h2 class="font-weight-semi-bold"><a href="#"><?php echo $row['actividad_titulo'] ?></a></h2>

                                        <!-- <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div> -->
                                        <?php echo html_entity_decode($row['actividad_desarrollo']); ?>

                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
										<p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
										<p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>
										<p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.</p>
										<p>Aenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue. </p>
                                         -->
                                    </div>
                                </article>
                            <?php
                            } else {
                                // Mostrar un mensaje de error si no se encontró la noticia
                                //echo 'Lo sentimos, la noticia que estás buscando no se encuentra disponible.';
                                echo "	<div class='alert alert-danger'>
                                            <strong>Oh lo sentimos!</strong> La noticia no se encuentra disponible? <a href='/cajay/noticias' class='alert-link'>Ver más Noticias</a>.
                                        </div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
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
    <script src="/cajay/intranet/assets/js/theme.init.js"></script>
    <script src="/cajay/intranet/assets/plugins/custom/ckfinder/ckeditor.js"></script>
    <script src="/cajay/intranet/assets/plugins/custom/ckfinder/ckfinder.js"></script>
    <script>
        // Obtener la fecha y hora actual
        var now = new Date();
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
        // $(document).ready(function() {
        //                                 //   // Obtener la URL actual de la página
        //                                    var url = window.location.href;

        //                                 // Verificar si la URL contiene "noticia/hola-como-es"
        //                                 if (url.indexOf("noticia/hola-como-es") > -1) {

        //                                     // Agregar la clase "active" al enlace correspondiente en tu menú
        //                                     $("#noticiasid").addClass("active");
        //                                 }
        //                             });




        $(document).ready(function() {
            // Obtener la URL actual de la página
            var url = window.location.href;
            // Verificar si la URL contiene la URL de la noticia
            if (url.indexOf("<?php echo $url ?>") > -1) {
                // Agregar la clase "active" al enlace correspondiente en tu menú
                $("#noticiasid").addClass("active");
            }
        });
        // Obtén todas las etiquetas <img>
        var imagenes = document.querySelectorAll('img');

        // Itera a través de las imágenes y agrega la clase
        for (var i = 0; i < imagenes.length; i++) {
            imagenes[i].classList.add('img-fluid', 'rounded');
        }
    </script>

</body>

</html>