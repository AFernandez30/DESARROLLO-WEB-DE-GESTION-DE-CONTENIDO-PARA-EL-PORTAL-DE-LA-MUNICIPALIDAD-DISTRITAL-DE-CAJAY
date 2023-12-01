<?php
include_once("conexion.php");
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
	<!-- Import Plyr CSS -->
	<!-- <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" /> -->


</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 0, 'effect': 'pulse'}">
	<!-- <body data-plugin-page-transition> -->
	<div class="body">

		<?php include_once('submenu/header.php'); ?>
		<div role="main" class="main">
			<!-- <div class="row">
				<div class="col">
					<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
						<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual nav-inside nav-style-1 nav-light mt-2" data-plugin-options="{'autoplayTimeout': 6000}" data-dynamic-height="['460px','460px','460px','210px','180px']" style="height: 460px;">
							<div class="owl-stage-outer">
								<div class="owl-stage">

								
									<div class="owl-item position-relative" style="background-image: url(assets/img/projects/project-portfolio-2-3.jpg); background-size: cover; background-position: center;"></div>

								
									<div class="owl-item position-relative" style="background-image: url(assets/img/projects/project-portfolio-2-1.jpg); background-size: cover; background-position: center;"></div>

									<div class="owl-item position-relative" style="background-image: url(assets/img/projects/project-portfolio-2-2.jpg); background-size: cover; background-position: center;"></div>

								</div>
							</div>
							<div class="owl-nav">
								<button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
								<button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		
				<!-- <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;"> -->
				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['670px','670px','500px','250px','225px']" style="height: 670px;">
					<div class="owl-stage-outer">
						<div class="owl-stage">
							<?php
							$sql = "SELECT *  from banner where id_tipo_banner =1 and id_estado = 1 order by banner_id  desc";
							$result = mysqli_query($db, $sql);
							while ($row = mysqli_fetch_assoc($result)) {
							?>
								<div class="owl-item position-relative" style="background-image: url(archivos/banners/<?php echo $row['banner_nombre'] ?>); background-color: #2E3136; background-size: cover; background-position: center;">
									<a target="_blank" href="<?php echo $row['banner_ruta'] ?> " class="text-decoration-none">
										<div class="container position-relative z-index-1 h-100">
											<div class="d-flex flex-column align-items-center justify-content-center h-100">
												<h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
													<?php echo $row['banner_subtitulo'] ?><span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"></span>
													<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"><?php echo $row['banner_titulo'] ?></h1>
												<p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}"><?php echo $row['banner_descripcion'] ?></p>
											</div>
										</div>
									</a>
								</div>
							<?php
							}
							?>
						</div>
					</div>
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
						<button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
					</div>
					<div class="owl-dots mb-5">
						<button role="button" class="owl-dot active"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
						<button role="button" class="owl-dot"><span></span></button>
					</div>
				</div>
			
			<div class="home-intro bg-primary" id="home-intro">
				<div class="container">

					<div class="row align-items-center">
						<div class="col-lg-12">
							<p>
								Bienvenidos al portal web de la Municipalidad Distrital de <span class="highlighted-word">CAJAY</span>
								<span>Disfruta de nuestro Disrito.</span>
							</p>
						</div>
						<!-- <div class="col-lg-4">
							<div class="get-started text-start text-lg-end">
								<a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
								<div class="learn-more">or <a href="index.html">learn more.</a></div>
							</div>
						</div> -->
					</div>

				</div>
			</div>
			<style>
				.map-container {
					width: 100%;
				}
			</style>
			<section class="section section-height-2 ps-4 pe-4 mb-3 border-top-0 d-flex flex-column justify-content-center">
				<div class="row mt-3 pb-4">
					<div class="col text-center">
						<h2 class="font-weight-bold mb-0">UBICACIÓN</h2>
					</div>
				</div>
				<div class="container mb-5 pb-4">
					<div class="col-lg-12">
						<div class="map-container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4682.027865559845!2d-77.15889232401446!3d-9.324367174209547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a8e065cf330a35%3A0x21d7317918545ab1!2sMunicipalidad%20Distrital%20De%20Cajay!5e0!3m2!1ses!2spe!4v1682436976483!5m2!1ses!2spe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</section>
			<section id="elements" class="section section-height-2 ps-4 pe-4  mb-3 border-top-0 d-flex flex-column justify-content-center">

				<div class="container py-2">
					<div class="row mt-3 pb-4">
						<div class="col text-center">
							<h2 class="font-weight-bold mb-0">SERVICIOS</h2>
							<p class="lead text-4 pt-2 font-weight-normal"><b>Descubre nuestros servicios principales</b></p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
							<div class="row">
								<div class="col-lg-4 col-sm-6">
									<div class="featured-box featured-box-primary featured-box-effect-3 box-shadow-none box-shadow-1 box-shadow-1-hover border-color-transparent-hover">
										<div class="box-content box-content-border-0">
											<i class="icon-featured far fa-edit"></i>
											<h4 class="font-weight-normal text-5 mt-3"><a href="/cajay/serviciosenlinea/contacto"> <strong class="font-weight-extra-bold">CONTÁCTANOS</strong></a></h4>
											<p class="mb-2 mt-2 text-2">Estamos aquí para ayudarte. Contáctanos para ayuda y asistencia. Estamos aquí para atenderte y brindarte la información necesaria.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="featured-box featured-box-secondary featured-box-effect-3 box-shadow-none box-shadow-1 box-shadow-1-hover border-color-transparent-hover">
										<div class="box-content box-content-border-0">
											<i class="icon-featured far fa-file-alt"></i>
											<a href="/cajay/normas-legales" class="text-color-danger">
												<h4 class="font-weight-normal text-5 mt-3 ">Nuestros <strong class="font-weight-extra-bold">Documentos</strong></h4>
											</a>
											<!-- <p class="mb-2 mt-2 text-2">Encontrara todos nuestras resoluciones publicadas.</p> -->
											<p class="mb-2 mt-2 text-2">En cumplimiento riguroso de las normas legales por parte de nuestra institución pública es esencial para garantizar la transparencia.</p>

										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="featured-box featured-box-tertiary featured-box-effect-3 box-shadow-none box-shadow-1 box-shadow-1-hover border-color-transparent-hover">
										<div class="box-content box-content-border-0">
											<!-- <i class="icon-featured far fa-star"></i> -->
											<i class="icon-featured icon-screen-desktop icons"></i>
											<a href="/cajay/serviciosenlinea/mesadepartesvirtual" class="text-color-success">
												<h4 class="font-weight-normal text-5 mt-3"><strong class="font-weight-extra-bold">Mesa de partes Virtual</strong></h4>
											</a>
											<p class="mb-2 mt-2 text-2">No pierdas más tiempo en trámites presenciales. ¡Únete a nuestra Mesa de Partes Virtual y simplifica tus gestiones hoy mismo!"</p>
										</div>
									</div>
								</div>
								<!-- <div class="col-lg-3 col-sm-6">
									<div class="featured-box featured-box-quaternary featured-box-effect-3 box-shadow-none box-shadow-1 box-shadow-1-hover border-color-transparent-hover">
										<div class="box-content box-content-border-0">
											<i class="icon-featured far fa-edit"></i>
											<a href="#" class="text-color-dark">
											<h4 class="font-weight-normal text-5 mt-3">Custom <strong class="font-weight-extra-bold">Source</strong></h4>
											</a>
											<p class="mb-2 mt-2 text-2">Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>

				</div>

			</section>
			<!-- iconos uno -->


			<!-- 000 -->


			<!-- 1111 -->
			<section class="section section-height-2 mt-0 mb-3 border-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -300}">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2 text-center">
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">Videos Destacados</b>
								</span>
								<span class="read-more text-color-dark font-weight-bold text-2"><a href="videos">Ver más</a></span>
							</h2>
							<!-- <div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100}"> -->
							<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg" data-plugin-options="{'items': 1, 'margin': 0, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">

								<?php
								// Consulta para obtener los banners ordenados por ID de manera descendente
								$sql3 = "SELECT * FROM videos WHERE id_estado = 1 ORDER BY id_videos DESC";
								$result3 = mysqli_query($db, $sql3);
								// Ciclo para mostrar los banners
								while ($row3 = mysqli_fetch_assoc($result3)) {
								?>
									<div class="ratio ratio-16x9 ratio-borders">
										<iframe src="<?php echo $row3['url'] ?>" width="640" height="360" allowfullscreen></iframe>
									</div>

								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Comunicados -->
			<section class="section section-height-2 mt-0 mb-3 border-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -300}">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2 text-center">
								<span class="word-rotator-words bg-secondary rounded">
									<b class="is-visible">Comunicados</b>
								</span>
								<!-- <span class="read-more text-color-dark font-weight-bold text-2"><a href="videos">Ver más</a></span> -->
							</h2>
							<!-- <div class="owl-carousel owl-theme stage-margin stage-margin-lg nav-style-2 mb-0" data-plugin-options="{'items': 1, 'margin': 100, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 100}"> -->
							<!-- <div class="owl-carousel owl-theme" data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000}"> 
								-->
							<div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 4000, 'dots': false}">
								<?php
								// Consulta para obtener los banners ordenados por ID de manera descendente
								$sql3 = "SELECT * FROM banner WHERE id_tipo_banner = 3 and id_estado = 1 ORDER BY banner_id  DESC";
								$result3 = mysqli_query($db, $sql3);
								// Ciclo para mostrar los banners
								while ($row5 = mysqli_fetch_assoc($result3)) {
								?>
									<div>

										<a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="archivos/banners/<?php echo $row5['banner_nombre'] ?>" data-plugin-options="{'type':'image'}">
											<img class="img-fluid" src="archivos/banners/<?php echo $row5['banner_nombre'] ?>" alt="Project Image">
										</a>
									</div>
								<?php } ?>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- noticias -->
			<section class="section section-height-2 mt-0 mb-3 border-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -300}">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="recent-posts">

								<!-- <article class="card  bg-color-white  border-0 post">
								<div class="card-body p-0">
									<div class="row g-0">
										<div class="col-lg-6" style="padding: 5px;">
											<div class="col-auto pe-0">
												<div class="post-date">
													<span class="day text-color-dark font-weight-extra-bold">15</span>
													<span class="month text-color-white">JAN</span>
												</div>
											</div>
											<h4 class="line-height-3"><a href="blog-post.html" class="text-decoration-none">Lorem ipsum dolor sit amet, consectetur</a></h4>
											<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
											<a href="blog-post.html" class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2"><strong>READ MORE</strong><i class="fas fa-chevron-right text-2 ps-2"></i></a>
										</div>
										<div class="col-lg-6">
											<img src="archivos/noticias/noticia1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-2 w-100 border-0 p-0" alt="" />
										</div>
									</div>
								</div>
							</article> -->

								<h2 class="word-rotator slide font-weight-bold text-8 mb-2 text-center">

									<span class="word-rotator-words bg-success rounded">
										<b class="is-visible">Noticias</b>
									</span>
									<span class="read-more text-color-dark font-weight-bold text-2"><a href="/cajay/noticias">Ver más</a></span>
								</h2>
								<!-- <span class="word-rotator-words bg-success rounded">
									<b class="is-visible">Noticias</b>
								</span> -->
								<!-- <span class="read-more text-color-dark font-weight-bold text-2"><a href="videos">Ver más</a></span> -->

								<hr class="solid mt-3 bg-color-success">
								<div class="owl-carousel owl-theme carousel-center" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 10000}">
									<?php
									$sql_noticias = "SELECT  day(actividad_fecha) as dia, monthname(actividad_fecha) as mes, year(actividad_fecha)as anio, actividad_imagen, actividad_titulo, actividad_resumen, url  from noticias where id_estado=1 order by actividad_fecha desc limit 5";
									$result_noticias = mysqli_query($db, $sql_noticias);
									while ($row4 = mysqli_fetch_assoc($result_noticias)) {
									?>
										<article class="card  bg-color-white  border-0 post">
											<div class="card-body p-0">
												<div class="row g-0">
													<div class="col-lg-5" style="padding: 5px;">
														<div class="col-auto pe-0">
															<div class="post-date">
																<span class="day text-color-dark font-weight-extra-bold"><?php echo $row4['dia'] ?></span>
																<span class="month text-color-white"><?php echo $row4['mes'] ?></span>
																<span class="day text-color-dark font-weight-extra-bold"><?php echo $row4['anio'] ?></span>
															</div>
														</div>
														<h4 class="line-height-3"><a href="noticia/<?php echo $row4['url'] ?>" class="text-decoration-none"><?php echo $row4['actividad_titulo'] ?></a></h4>
														<p class="mb-1"><?php echo $row4['actividad_resumen'] ?></p>
														<a href="noticia/<?php echo $row4['url'] ?>" class="btn btn-light text-uppercase text-primary text-1 py-2 px-3 mb-1 mt-2"><strong>LEER MÁS</strong><i class="fas fa-chevron-right text-2 ps-2"></i></a>
													</div>
													<div class="col-lg-7">
														<img src="archivos/noticias/<?php echo $row4['actividad_imagen'] ?>" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-2 w-100 border-0 p-0" alt="" />
													</div>
												</div>
											</div>
										</article>

									<?php } ?>
								</div>

							</div>
						</div>
					</div>
			</section>
			<!-- seccionnoticia0 -->




			<!-- fin seccion -->
		</div>

		<?php include_once('submenu/footer.php'); ?>
	</div>

	<!-- Vendor -->
	<script src="assets/vendor/plugins/js/plugins.min.js"></script>
	<!-- <script src="vendor/gsap/gsap.min.js"></script> -->
	<!-- Theme Base, Components and Settings -->
	<script src="assets/js/theme.js"></script>

	<!-- Circle Flip Slideshow Script -->
	<script src="assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
	<!-- Current Page Views -->
	<script src="assets/js/views/view.home.js"></script>

	<!-- Theme Custom -->
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/examples/examples.carousels.js"></script>
	<!-- Theme Initialization Files -->
	<script src="assets/js/theme.init.js"></script>
	<!-- ejemplos -->
	<script>
		// Obtener la fecha y hora actual
		// var now = new Date();

		// // Configurar la fecha y hora en el formato deseado
		// var options = {
		// 	weekday: 'long',
		// 	year: 'numeric',
		// 	month: 'long',
		// 	day: 'numeric'
		// };
		// var dateString = now.toLocaleDateString("es-ES", options);

		// var hours = now.getHours();
		// var ampm = hours >= 12 ? 'PM' : 'AM';
		// hours = hours % 12;
		// hours = hours ? hours : 12;
		// var minutes = now.getMinutes();
		// minutes = minutes < 10 ? '0' + minutes : minutes;
		// var timeString = hours + ':' + minutes + ' ' + ampm;

		// // Agregar la fecha y hora al contenido del elemento li utilizando jQuery
		// $("#date-time").append(" " + dateString + " " + timeString);

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
		//aaaaaaaaaaaaa
		$(function() {

			var url = window.location.href;

			if (url.indexOf("index") > -1) {
				$("#inicio").addClass("active");
			} else if (url.indexOf("alcalde") > -1) {
				$("#enlace-alcalde").addClass("active");
				$("#municipalidad").addClass("active"); 
			} else if (url.indexOf("vision") > -1) {
				$("#enlace-vision").addClass("active");
				$("#municipalidad").addClass("active"); 
			} else if (url.indexOf("mision") > -1) {
				$("#enlace-mision").addClass("active");
				$("#municipalidad").addClass("active");
			} else if (url.indexOf("index") > -1) {
				$("#inicio").addClass("active");
			}else if (url.indexOf("inicio") > -1) {
				$("#inicio").addClass("active");
			}

		});
	</script>

</body>

</html>