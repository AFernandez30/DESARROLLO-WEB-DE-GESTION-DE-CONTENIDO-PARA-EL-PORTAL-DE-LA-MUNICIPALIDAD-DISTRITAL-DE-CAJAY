<?php
include_once('conexion.php');
include_once('funciones.php');
require('php/municipalidad/serviciosenlinea.php');
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
	<link rel="stylesheet" href="/cajay/assets/css/skins/skin-button.css">
	<link rel="stylesheet" href="/cajay/assets/vendor/plugins/select2/select2.min.css">
	<link rel="stylesheet" href="/cajay/assets/vendor/plugins/select2/select2-bootstrap-5-theme.min.css">
	<!-- <link rel="stylesheet" href="/cajay/vendor/plugins/select2/dropzone-min.js"> -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" /> -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" /> -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" /> -->
	<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.selectric/1.13.0/selectric.min.css"> -->

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/cajay/assets/css/theme.css">
	<link rel="stylesheet" href="/cajay/assets/css/theme-elements.css">
	<link rel="stylesheet" href="/cajay/assets/css/theme-blog.css">
	<link rel="stylesheet" href="/cajay/assets/css/theme-shop.css">
	<style>
		/* Estilos personalizados para el select */
		/* #tipodepersona {
					width: 100%;
				} */
		input[type="number"]::-webkit-inner-spin-button,
		input[type="number"]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			margin: 0;
			-moz-appearance: textfield;
		}
	</style>
	<!-- Current Page CSS -->
	<link rel="stylesheet" href="/cajay/assets/vendor/circle-flip-slideshow/css/component.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="/cajay/assets/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/cajay/assets/css/custom.css">
	<!-- <link rel="stylesheet" href="/cajay/vendor/simplepagination/pagination.css"> -->

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
			echo ($contenido_html);

			?>

			<!-- <div class="text-center">
				<div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
					<h4 class="mb-4">Hover Shadow Anim Up Border Bottom</h4>

					<div class="card card-border card-border-bottom card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms">
						<div class="card-body">
							<h4 class="card-title mb-1 text-4 font-weight-bold">Card Title</h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi.</p>
						</div>
					</div>
				</div>
			</div> -->
		
		
			<!-- mesaparte -->

			<!-- fin contenido -->
		</div>
		<?php include_once('submenu/footer.php'); ?>
	</div>

	<!-- Vendor -->
	<script src="/cajay/assets/vendor/plugins/js/plugins.min.js"></script>

	<!-- <script src="/cajay/vendor/simplepagination/pagination.js"></script> -->
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
	<script src="https://npmcdn.com/flatpickr/dist/l10n/es.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> -->
	<!-- <script  href="/cajay/vendor/plugins/select2/select2.min.js"></script> -->
	<link href="/cajay/assets/vendor/plugins/select2/dropzone.css" rel="stylesheet" type="text/css">
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<!-- <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" /> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.selectric/1.13.0/jquery.selectric.min.js"></script> -->

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
			// Obtener la parte de la URL después del dominio
			var path = location.pathname;
			// Agregar la clase "active" al enlace correspondiente
			if (path.indexOf("/index") > -1) {
				$("#enlace-directorio").addClass("active");
			} else if (path.indexOf("/directorio") > -1) {
				$("#enlace-directorio").addClass("active");
				$("#servicios").addClass("active"); // Agregar clase al elemento padre
			} else if (path.indexOf("/contacto") > -1) {
				$("#enlace-contacto").addClass("active");
				$("#contacto").addClass("active"); // Agregar clase al elemento padre
			}
		});

		// function cargarDirectorio() {
		// 	const container = $("#directorio-container");
		// 	container.empty();
		// 	data.forEach((directorio) => {
		// 		const el = $(`<div class="card card-border card-border-bottom card-border-hover bg-color-light box-shadow-6 box-shadow-hover anim-hover-translate-top-10px transition-3ms">
		// 				<div class="card-body">
		// 					<h4 class="card-title mb-1 text-4 font-weight-bold"> ${directorio.nombre_area }</h4>
		// 					<p class="card-text"><i class="fa-solid fa-square-phone-flip fa-2xl"></i>  ${directorio.telefono }</p>

		// 					<p class="card-text font-weight-bold text-2"><i class="fa-solid fa-phone-volume fa-2xl"></i> ${directorio.anexo }</p>
		// 				</div>
		// 			</div>
		// 						`);
		// 		container.append(el);
		// 	});
		// }
	</script>
	<?php
	echo $javascript;
	?>

</body>


<style>

</style>

</html>