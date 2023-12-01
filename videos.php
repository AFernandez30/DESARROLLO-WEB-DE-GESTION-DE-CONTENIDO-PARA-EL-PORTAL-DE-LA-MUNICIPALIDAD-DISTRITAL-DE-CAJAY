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
    <link rel="apple-touch-icon" href="/cajay/img/apple-touch-icon.png">

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
    <link rel="stylesheet" href="/cajay/assets/vendor/simplepagination/pagination.css">
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


            <input id="noticiaone" type="hidden">
            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-dark font-weight-bold text-8">VIDEOS</h1>
                            <span class="sub-title text-dark">Mira todos nuestros videos!</span>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center">
                                <li><a href="inicio">Inicio</a></li>
                                <li class="active">Videos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <div class="container py-4">
                <div class="row">
                    <div class="col">
                        <div class="blog-posts single-post">
                            <div class="row mt-5">
                                <div class="col">
                                    <h4>Videos de la Municipalidad de Cajay</h4>
                                    <hr class="solid mt-3">
                                    <div class="row">
                                        <div class="col-lg-12 mb-8 mb-lg-0">
                                            <div id="videos">
                                            </div>
                                            <div id="loader" class="bounce-loader">
                                                <div class="cssload-zenith-container">
                                                    <div class="cssload-zenith"> </div>
                                                </div>
                                            </div>
                                            <!-- <div id="loader" class="loading-overlay">
                                                <div class="bounce-loader">
                                                    <div class="cssload-zenith-container">
                                                        <div class="cssload-pulse-loader"></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <input type="hidden" id="clave" value="123456">
                                            <div id="pagination-container">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

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
    <script src="/cajay/assets/vendor/simplepagination/pagination.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script> -->
    <script src="/cajay/assets/vendor/plugins/cryptojs/dist/cryptojs-aes.min.js"></script>
    <script src="/cajay/assets/vendor/plugins/cryptojs/dist/cryptojs-aes-format.js"></script>

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
        // $(document).ready(function() {
        //                                 //   // Obtener la URL actual de la página
        //                                    var url = window.location.href;

        //                                 // Verificar si la URL contiene "noticia/hola-como-es"
        //                                 if (url.indexOf("noticia/hola-como-es") > -1) {

        //                                     // Agregar la clase "active" al enlace correspondiente en tu menú
        //                                     $("#noticiasid").addClass("active");
        //                                 }
        //                             });





        // Por Defecto
<?php 
$clave ='123456';
?>

        function cargarvideos(data) {
            // console.log(data);
            const container = $("#videos");
            container.empty();
            if (data.length === 0) {
                container.append(`<div class='alert alert-danger'>
                                <strong>Oh lo sentimos!</strong><p> No se encontraron resultados &#128531;</p>
                            </div>`);
                return;
            }
            data.forEach((video) => {
                const el = $(`<article class="post post-large pb-5">                                              
                        <div class="post-image">
                            <div class="ratio ratio-16x9 ratio-borders">
                                <iframe src="${video.url}" width="640" height="360" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="post-date">
                            <span class="day">${video.dia}</span>
                            <span class="month">${video.mes}</span>
                            <span class="year">${video.anio}</span>
                        </div>

                        <div class="post-content">

                            <h4><a href="blog-post.html" class="text-decoration-none">${video.titulo}</a></h4>
                            <p class="mb-1">${video.Descripcion}</p>
                        </div>
                    </article>`);
                container.append(el);
            });
            $("#noticiasid").addClass("active"); // agregamos la clase "active"
        }
//         $.ajax({
//   url: 'config.php',
//   method: 'GET',
//   dataType: 'json',
//   success: function(configData) {
//     // Obtén la clave del objeto de configuración
//     const clave = configData.clave;

    // Realiza la petición AJAX para obtener la data encriptada
        $.ajax({
            url: 'php/municipalidad/videos.php',
            method: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#loader').show();
            },

            success: function(response) {
         
                // const clave = config.clave;
                const clave = document.getElementById('clave').value;
                let data = CryptoJSAesJson.decrypt(response, clave)
                //console.log(data);
                // Si los datos son solo una cadena de texto, analizarlos como JSON
                if (typeof data === "string") {
                    data = JSON.parse(data);
                }

                // Verificar si los datos son un array de objetos
                if (Array.isArray(data) && data.length > 0 && typeof data[0] === "object") {
                    const paginationOptions = {
                        dataSource: data,
                        pageSize: 3,
                        className: 'paginationjs-theme-blue paginationjs-big',
                        callback: function(data, pagination) {
                            cargarvideos(data);
                        }
                    };
                    const pagination = $("#pagination-container").pagination(paginationOptions);
                } else {
                    const container = $("#videos");
                    container.append(`<div class='alert alert-danger'>
                                <strong>Oh lo sentimos!</strong><p> No se encontraron resultados &#128531;</p>
                            </div>`);
                }
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(xhr, status, error) {
        console.log(error);
      }
    });
//   },
//   error: function(xhr, status, error) {
//     console.log(error);
//   }
// });

        // $.ajax({
        //     url: 'php/municipalidad/videos.php',
        //     method: 'GET',
        //     dataType: 'json',
        //     beforeSend: function() {
        //         $('#loader').show();
        //     },
        //     complete: function() {
        //         $('#loader').hide();
        //     },
        //     success: function(data) {
        //         const paginationOptions = {
        //             dataSource: {
        //                 data: data
        //             }, // objeto con propiedad "data" que contiene los datos
        //             pageSize: 3,
        //             className: 'paginationjs-theme-blue paginationjs-big',
        //             locator: 'data', // indicar a Pagination.js que los datos se encuentran en el campo "data"
        //             callback: function(data, pagination) {
        //                 cargarvideos(data); // Mostramos los artículos de la página actual
        //             }
        //         };
        //         //$("#noticiasid").addClass("active");
        //         // Inicializamos la paginación
        //         const pagination = $("#pagination-container").pagination(paginationOptions);
        //     },
        //     error: function(xhr, status, error) {
        //         console.log(error);
        //         // $("#noticiasid").addClass("active");
        //     }
        // });
    </script>

</body>

</html>