<?php include_once('conexion.php') ?>
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
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="assets/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.min.css">

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

</head>

<body data-plugin-page-transition>
	<div class="body">
		<?php include_once('submenu/header.php'); ?>
		<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center p-static order-2 text-center">
						<h1 class="text-dark font-weight-bold text-8">Regidores</h1>
					</div>
					<div class="col-md-12 align-self-center order-1">
						<ul class="breadcrumb d-block text-center">
							<li><a href="/cajay/inicio">Inicio</a></li>
							<li class="active">Municipalidad</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div role="main" class="main">

			<!-- Contenido dinamico -->
			<!-- Contenido dinamico -->
			<div class="container py-4">
				<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
					<li class="nav-item active" data-option-value="*" style="display: none;"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
				</ul>
				<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
					<div class="row team-list sort-destination" data-sort-id="team">
						<?php
						$sql = "SELECT * from funcionario  where id_estado = 1";
						$result = mysqli_query($db, $sql);
						while ($row = mysqli_fetch_assoc($result)) {
						?>
							<div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a>
											<img src="/cajay/archivos/funcionarios/<?php echo $row['foto'] ?>" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner"><?php echo $row['nombrescompletos'] ?></span>
												<!-- <span class="thumb-info-type">Regidor</span> -->
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<!-- <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span> -->
										<span class="thumb-info-social-icons mb-4">
											<!-- <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a> -->
											<!-- <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a> -->
										</span>
									</span>
								</span>
							</div>
						<?php
						}
						?>
					</div>

				</div>
			</div>
			<!-- fin contenido -->
			<script>

			</script>
			<!-- fin -->
		</div>
		<?php include_once('submenu/footer.php'); ?>
	</div>

	<!-- Vendor -->
	<script src="assets/vendor/plugins/js/plugins.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="assets/js/theme.js"></script>

	<!-- Circle Flip Slideshow Script -->
	<script src="assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
	<!-- Current Page Views -->
	<script src="assets/js/views/view.home.js"></script>

	<!-- Theme Custom -->
	<script src="assets/js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="assets/js/theme.init.js"></script>
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