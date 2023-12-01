<?php include_once('conexion.php');
include_once('funciones.php');
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
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
	<!-- <link rel="stylesheet" href="vendor/datatables/datatables.bundle.css"> -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css"> -->
	<link rel="stylesheet" href="vendor/simplepagination/pagination.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<!-- <script src="vendor/simplepagination/simplePagination.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js" ></script>
	 -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.min.js"></script> -->
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
							<span class="sub-title text-dark">Normas y documentos legales!</span>
						</div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center">
								<li><a href="#">Inicio</a></li>
								<li class="active">Normas Legales</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- Contenido dinamico -->
			<div class="container py-4">
				<div class="row g-9 mb-8 mb-3">
					<div class="col-md-3 fv-row">
						<label class="required fs-6 fw-semibold mb-2">Seleccione</label>
						<select name="representante" id="representante" class='form-select form-select-solid' data-control='select2' data-hide-search='true' data-minimum-results-for-search='Infinity'>
							<option value="">Todos</option>
							<option value="1">Alcalde</option>
							<option value="2">Gerente</option>
						</select>
					</div>
					<div class="col-md-2 fv-row">
					</div>
					<div class="col-md-3 fv-row">
						<label class="required fs-6 fw-semibold mb-2 ">Filtrar por palabra</label>
						<input type="text" class="form-control" id="palabraclave">

					</div>
					<div class="col-md-2 fv-row">
					</div>
					<div class="col-md-2 fv-row float-end">
						<label class="required fs-6 fw-semibold mb-2 ">Filtrar por Fecha</label>
						<!-- <select name="orden" id="orden" class='form-select form-select-solid' data-control='select2' data-hide-search='true' data-minimum-results-for-search='Infinity'>
							<option value="desc">Más recientes primero</option>
							<option value="asc">Más antiguos primero</option>
						</select> -->
						<input type="text" class="form-control" id="fechaconsulta">
					</div>
				</div>

				<div id="contenedor_documentos">
					<div class="row">
						<div class="col-lg-12 order-lg-1">
							<div class="recent-posts">
								<!-- Contenedor para mostrar los artículos -->
								<div id="article-container">

								</div>

								<!-- Contenedor para mostrar la paginación -->
								<div id="pagination-container">
									<div class='alert alert-danger' style='display: none;' id='div-alerta'>
										<strong>Oh lo sentimos!</strong>
										<p> No se encotro resultados &#128531;</p>
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
		<!-- error -->

		<!-- Vendor -->
		<script src="vendor/plugins/js/plugins.min.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Circle Flip Slideshow Script -->
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="vendor/simplepagination/pagination.js"></script>

		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
		<!-- Current Page Views -->
		<script src="js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
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

			//BUSQUEDAS
			function cargarBusqueda(data) {
				const container = $("#article-container");
				container.empty();
				// Recorremos los artículos de la página actual
				data.forEach((article) => {
					const el = $(`<article class="post">	
					<div class="text-center">							
								<h4> <a  class="text-decoration-none">Actividad: ${article.actividad }</a></h4>								
								<p class="descripcion">Descripción: ${ article.descripcion}</p>
								<p class="descripcion"><i class="fa-solid fa-location-dot fa-2xl"></i> ${ article.lugar}</p>
							
								<span class="fecha"><i class="fa-solid fa-calendar-days fa-xl"></i> ${ article.fecha }</span>
								
								<p class="descripcion"><i class="fa-solid fa-clock fa-xl"></i> ${ article.hora}</p>
								<hr class="solid">
										</div>				
								</article>`);
					container.append(el); // Agregamos el elemento al contenedor
				});
			}

			//mostrar mensaje en caso de vacio
			function buscarNormas() {
				$.ajax({
					url: 'php/municipalidad/agenda.php',
					method: 'GET',
					dataType: 'json',
					data: {
						representante: $('#representante').val(),
						palabraclave: $('#palabraclave').val(),
						fechaconsulta: $('#fechaconsulta').val()
					},
					//data: params,
					success: function(data) {
						const paginationOptions = {
							dataSource: data,
							pageSize: 25,
							className: 'paginationjs-theme-blue paginationjs-big',
							callback: function(data, pagination) {

								cargarBusqueda(data);
								if (data.length === 0) {
									$("#div-alerta").show();
								} else {
									$("#div-alerta").hide();
								}
							}
						};
						const pagination = $("#pagination-container").pagination(paginationOptions);
					},
					error: function(xhr, status, error) {
						console.log(error);
					}
				});
			}
			// Llamar la función una vez cuando se carga la página
			$(document).ready(function() {
				buscarNormas();
			});
			// Volver a llamar la función cada vez que se cambia un valor del formulario
			$('#representante, #palabraclave, #fechaconsulta').change(function() {
				buscarNormas();
			});
			$('#fechaconsulta').flatpickr({
				enableTime: false,
				dateFormat: "Y-m-d",
				locale: "es"
			})
		</script>

</body>

</html>