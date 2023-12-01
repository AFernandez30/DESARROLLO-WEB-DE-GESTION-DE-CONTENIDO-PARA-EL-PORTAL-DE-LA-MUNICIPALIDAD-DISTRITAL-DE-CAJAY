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
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="/cajay/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/cajay/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="/cajay/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="/cajay/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="/cajay/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="/cajay/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="/cajay/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/cajay/css/theme.css">
	<link rel="stylesheet" href="/cajay/css/theme-elements.css">
	<link rel="stylesheet" href="/cajay/css/theme-blog.css">
	<link rel="stylesheet" href="/cajay/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="/cajay/vendor/circle-flip-slideshow/css/component.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="/cajay/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/cajay/css/custom.css">

	<!-- Head Libs -->
	<script src="/cajay/vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>
	<div class="body">

		<?php include_once('submenu/header.php'); ?>
		<div role="main" class="main">
        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold text-dark">404 - Pagina No Encontrada</h1>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb d-block text-center">
									<li><a href="inicio">Inicio</a></li>
									<li class="active">Pagina</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
                <section class="http-error">
						<div class="row justify-content-center py-3">
							<div class="col-md-7 text-center">
								<div class="http-error-main">
									<h2>404!</h2>
									<p>Lo sentimos, pero la página que estabas buscando no existe.</p>
								</div>
							</div>
							<div class="col-md-4 mt-4 mt-md-0">
								<h4 class="text-primary">Aquí hay algunos enlaces útiles</h4>
								<ul class="nav nav-list flex-column">
									<li class="nav-item"><a class="nav-link" href="#">inicio</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Funcionarios</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Directorio Teléfonico</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Normas</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Contactanos</a></li>
								</ul>
							</div>
						</div>
					</section>
			<!-- Contenido dinamico -->
		</div>
		<?php include_once('submenu/footer.php'); ?>
	</div>

	<!-- Vendor -->
	<script src="/cajay/vendor/plugins/js/plugins.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="/cajay/js/theme.js"></script>

	<!-- Circle Flip Slideshow Script -->
	<script src="/cajay/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
	<!-- Current Page Views -->
	<script src="/cajay/js/views/view.home.js"></script>

	<!-- Theme Custom -->
	<script src="/cajay/js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="/cajay/js/theme.init.js"></script>
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
	</script>

</body>

</html>