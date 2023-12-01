<?php include_once('conexion.php');
require('php/municipalidad/municipalidad.php');
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
	<link rel="stylesheet" href="/cajay/assets/vendor/simplepagination/pagination.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<!-- Head Libs -->
	<script src="/cajay/assets/vendor/modernizr/modernizr.min.js"></script>

</head>

<body data-plugin-page-transition>
	<div class="body">

		<?php include_once('submenu/header.php'); ?>
		<div role="main" class="main">
			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="text-dark font-weight-bold text-8">Bienvenido</h1>
							<span class="sub-title text-dark">Municipalidad Distrital de Cajay!</span>
						</div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center">
								<li><a href="/cajay/inicio">Inicio</a></li>
								<li class="active"><?php echo $titulo; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Contenido dinamico -->
			<?php
			echo $contenido_html;
			?>
			<!-- fin contenido -->
		</div>
		<?php include_once('submenu/footer.php'); ?>
	</div>

	<!-- Vendor -->
	<script src="/cajay/assets/vendor/plugins/js/plugins.min.js"></script>

	<script src="/cajay/assets/vendor/simplepagination/pagination.js"></script>
	<!-- Theme Base, Components and Settings -->
	<script src="/cajay/assets/js/theme.js"></script>

	<!-- Circle Flip Slideshow Script -->
	<script src="/cajay/assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
	<!-- Current Page Views -->
	<script src="/cajay/assets/js/views/view.home.js"></script>

	<!-- Theme Custom -->
	<script src="/cajay/assets/js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="/cajay/assets/js/theme.init.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
		<script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
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
		// 	// Obtener el ID de la URL
		// 	var id = window.location.pathname.split("/").pop();

		// 	// Hacer una petición AJAX al archivo PHP para obtener el contenido
		// 	$.getJSON("municipalidad.php?id=" + id, function(data) {
		// 		// Insertar el contenido en el elemento correspondiente
		// 		$("#contenido-municipalidad").html(data.contenido);
		// 	});
		// });

		$(document).ready(function() {
			// Obtener la URL actual de la página
			var url = window.location.href;

			// Agregar la clase "active" al enlace correspondiente
			if (url.indexOf("index") > -1) {
				$("#enlace-inicio").addClass("active");
			} else if (url.indexOf("alcalde") > -1) {
				$("#enlace-alcalde").addClass("active");
				$("#municipalidad").addClass("active"); // Agregar clase al elemento padre
			} else if (url.indexOf("vision") > -1) {
				$("#enlace-vision").addClass("active");
				$("#municipalidad").addClass("active"); // Agregar clase al elemento padre
			} else if (url.indexOf("mision") > -1) {
				$("#enlace-mision").addClass("active");
				$("#municipalidad").addClass("active"); // Agregar clase al elemento padre
			} else if (url.indexOf("agenda") > -1) {
				$("#enlace-agenda").addClass("active");
				$("#municipalidad").addClass("active"); // Agregar clase al elemento padre
			} else if (url.indexOf("funcionario") > -1) {
				$("#enlace-funcionario").addClass("active");
				$("#municipalidad").addClass("active"); // Agregar clase al elemento padre
			}
		});
	</script>
	<?php
	$javascript = "";
	echo $javascript;
	?>
</body>

</html>