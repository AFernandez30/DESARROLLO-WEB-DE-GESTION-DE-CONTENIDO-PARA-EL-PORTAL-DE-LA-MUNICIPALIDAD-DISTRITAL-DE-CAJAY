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
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="assets/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.min.css">
	<!-- <link rel="stylesheet" href="vendor/datatables/datatables.bundle.css"> -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.5/pagination.css"> -->
	<link rel="stylesheet" href="assets/vendor/simplepagination/pagination.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" href="assets/css/theme-elements.css">
	<link rel="stylesheet" href="assets/css/theme-blog.css">
	<link rel="stylesheet" href="assets/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="assets/vendor/circle-flip-slideshow/css/component.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="assets/css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="assets/css/custom.css">

	<!-- Head Libs -->
	<script src="assets/vendor/modernizr/modernizr.min.js"></script>
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

				<div class="contact-form form-with-icons">
					<div class="row g-12 mb-8 mb-3 align-items-center justify-content-center">
						<!-- <div class="col-md-3 fv-row">
							<div class="widget">
								<div class="widget-title text-center">Documento</div>
								<div class="position-relative">
								<i class="fa fa-search text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
								<?php echo select_documentos($db) ?>
								</div>
							</div>
						</div> -->
						<div class="col-md-3 fv-row">
							<div class="form-group col">

								<div class="widget-title text-center">Filtrar por Tipo de Documento</div>
								<div class="position-relative">
									<i class="icons icon-doc text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1"></i>
									<div class="custom-select-1">
										<?php echo select_documentos($db) ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 fv-row">
							<div class="form-group col">
								<div class="widget-title text-center">Filtrar por palabra</div>
								<div class="position-relative">
									<i class="fa fa-search text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50"></i>
									<input type="text" maxlength="100" placeholder="Buscar" class="form-control text-3 h-auto py-2" name="palabraclave" id="palabraclave">
								</div>
							</div>
						</div>
						<div class="col-md-3 fv-row">
							<div class="form-group col">
								<div class="widget-title text-center">Ordenar por</div>
								<div class="position-relative">
									<i class="icons icon-arrow-right text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1" id="arrowicon"></i>
									<i class="icons icon-arrow-up text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1" id="arrow-up-icon" style="display: none;"></i>
									<i class="icons icon-arrow-down text-color-primary text-3 position-absolute left-15 top-50pct transform3dy-n50 z-index-1" id="arrow-down-icon" style="display: none;"></i>
									<select name="orden" id="orden" class="form-select form-control h-auto">
										<option value="desc">Más recientes primero</option>
										<option value="asc">Más antiguos primero</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>			
				<div class="divider divider-style-4  divider-primary taller appear-animation animated bounceIn appear-animation-visible " data-appear-animation="bounceIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
					<i class="fas fa-chevron-down text-color-primary"></i>
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
										<p> No se encontro resultados &#128531;</p>
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
		<script src="assets/vendor/plugins/js/plugins.min.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="assets/js/theme.js"></script>

		<!-- Circle Flip Slideshow Script -->
		<script src="assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="assets/vendor/simplepagination/pagination.js"></script>

		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
		<!-- Current Page Views -->
		<script src="assets/js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="assets/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="assets/js/theme.init.js"></script>

		<script>
			// Obtener el elemento select
			const selectElement = document.getElementById("orden");

			// Obtener los elementos de los iconos
			const arrowicon = document.getElementById("arrowicon");
			const arrowUpIcon = document.getElementById("arrow-up-icon");
			const arrowDownIcon = document.getElementById("arrow-down-icon");

			// Agregar un evento change al elemento select
			selectElement.addEventListener("change", function() {
				// Mostrar u ocultar los iconos de flecha según la opción seleccionada
				if (selectElement.value === "desc") {
					arrowUpIcon.style.display = "block";
					arrowDownIcon.style.display = "none";
					arrowicon.style.display = "none";
				} else if (selectElement.value === "asc") {
					arrowUpIcon.style.display = "none";
					arrowicon.style.display = "none";
					arrowDownIcon.style.display = "block";
				}
			});

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

			// Por Defecto
			// function cargarDocumentos(data) {
			// 	const container = $("#article-container");
			// 	container.empty();
			// 	// Recorremos los artículos de la página actual
			// 	data.forEach((article) => {
			// 		const el = $(`<article class="post">
			// 					<div class="post-date">
			// 					<span class="day">${article.dia}</span>
			// 					<span class="month">${article.mes } </span>
			// 					<span class="day">${ article.anio }</span>
			// 					</div>
			// 					<h4 class="titulo">${article.nombredocumento }</h4>
			// 					<a class="btn btn-outline btn-primary btn-lg float-end mb-2" href="archivos/normas/${ article.nombre_doc }" target="_blank"><i class="fas fa-download"></i> Descargar</a>
			// 					<p class="descripcion">${ article.descripcion}</p>
			// 					<div class="post-meta">
			// 					<span class="fecha"><i class="fa-solid fa-calendar-days"></i> ${ article.fecha }</span>
			// 					<a class="url2 read-more text-color-primary font-weight-semibold mt-2 float-end text-4">Leer más <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
			// 					<hr class="solid">
			// 					</div>								
			// 					</article>`);
			// 		container.append(el); // Agregamos el elemento al contenedor
			// 	});
			// }
			// $.ajax({
			// 	url: 'php/municipalidad/norma4.php',
			// 	method: 'GET',
			// 	dataType: 'json',
			// 	success: function(data) {
			// 		console.log(data);
			// 		const paginationOptions = {
			// 			dataSource: {
			// 				data: data
			// 			}, // objeto con propiedad "data" que contiene los datos
			// 			pageSize: 5,
			// 			className: 'paginationjs-theme-blue paginationjs-big',
			// 			locator: 'data', // indicar a Pagination.js que los datos se encuentran en el campo "data"
			// 			callback: function(data, pagination) {
			// 				cargarDocumentos(data); // Mostramos los artículos de la página actual
			// 			}
			// 		};
			// 		// Inicializamos la paginación
			// 		const pagination = $("#pagination-container").pagination(paginationOptions);
			// 	},
			// 	error: function(xhr, status, error) {
			// 		console.log(error);
			// 	}
			// });
			//BUSQUEDAS
			function cargarBusqueda(data) {
				const container = $("#article-container");
				container.empty();
				// Recorremos los artículos de la página actual
				data.forEach((article) => {
					const el = $(`<article class="post">
								<div class="post-date">
								<span class="day">${article.dia}</span>
								<span class="month">${article.mes } </span>
								<span class="day">${ article.anio }</span>
								</div>
								<h4> <a href="norma/${article.url }" class="text-decoration-none">${article.nombredocumento }</a></h4>
								<a class="btn btn-outline btn-primary btn-lg float-end mb-2" href="archivos/normas/${ article.nombre_doc }" target="_blank"><i class="fas fa-download"></i> Descargar</a>
								<p class="descripcion">${ article.descripcion}</p>
								<div class="post-meta">
								<span class="fecha"><i class="fa-solid fa-calendar-days"></i> ${ article.fecha }</span>
								<a class="url2 read-more text-color-primary font-weight-semibold mt-2 float-end text-4">Leer más <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
								<hr class="solid">
								</div>								
								</article>`);
					container.append(el); // Agregamos el elemento al contenedor
				});
			}
			// const params = {
			// 	documento: $('#select-documentos').val(),
			// 	palabraclave: $('#palabraclave').val(),
			// 	orden: $('#orden').val()
			// };
			// console.log(params);
			// $.ajax({
			// 	url: 'php/municipalidad/norma5.php',
			// 	method: 'GET',
			// 	dataType: 'json',
			// 	data: params, // Envía los datos como parámetros de la solicitud

			// 	success: function(data) {

			// 		const paginationOptions = {
			// 			dataSource: data,
			// 			totalNumberLocator: function(response) {
			// 				return response.totalCount;
			// 			},
			// 			locator: 'data',
			// 			pageSize: 5,
			// 			className: 'paginationjs-theme-blue paginationjs-big',
			// 			callback: function(data, pagination) {
			// 				cargarBusqueda(data);
			// 			}
			// 		};
			// 		const pagination = $("#pagination-container").pagination(paginationOptions);
			// 	},
			// 	error: function(xhr, status, error) {
			// 		console.log(error);
			// 	}
			// });
			// 			const params = {
			// 				documento: $('#select-documentos').val(),
			// 				palabraclave: $('#palabraclave').val(),
			// 				orden: $('#orden').val()
			// 			};
			// console.log(params);
			//mostrar mensaje en caso de vacio
			function buscarNormas() {
				$.ajax({
					url: 'php/municipalidad/norma5.php',
					method: 'GET',
					dataType: 'json',
					data: {
						documento: $('#select-documentos').val(),
						palabraclave: $('#palabraclave').val(),
						orden: $('#orden').val()
					},
					//data: params,
					success: function(data) {
						const paginationOptions = {
							dataSource: data,
							pageSize: 5,
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
			// $(document).ready(function() {
			// 	buscarNormas();
			// });
			// // Volver a llamar la función cada vez que se cambia un valor del formulario
			// $('#select-documentos, #palabraclave, #orden').change(function() {
			// 	buscarNormas();
			// });
			$(function() {
				buscarNormas();
			});
			// Volver a llamar la función cada vez que se cambia un valor del formulario
			// $('#select-documentos, #palabraclave, #orden').change(function() {
			//     buscarNormas();
			// });
			$('#select-documentos, #palabraclave, #orden').on('input', function() {
				buscarNormas();
			});
		</script>

</body>

</html>