<?php
session_start();
include 'includes/funciones.php';
if (isset($_GET['cerrar_sesion'])) {
	$_SESSION = array();
}
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Basic -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Site Metas -->
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link rel="shortcut icon" href="images/favicon.png" type="">

	<title> Feane </title>

	<!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

	<!--owl slider stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<!-- nice select  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
	<!-- font awesome style -->
	<link href="css/font-awesome.min.css" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet" />
	<!-- responsive style -->
	<link href="css/responsive.css" rel="stylesheet" />
	<style>
		.navbar-nav{
			visibility:hidden;
			/* display: none; */
		}
		.user_option{
			visibility:hidden;
			/* display: none; */
		}
	</style>
</head>

<body class="sub_page">

	<div class="hero_area">
		<div class="bg-box">
			<img src="images/hero-bg.jpg" alt="">
		</div>
		<!-- header section strats -->
		<?php
		include 'includes/templates/menu.php';
		?>
		<!-- end header section -->
	</div>

	<!-- book section -->
	<section class="book_section layout_padding">
		<div class="container">
			<div class="heading_container">
				<h2>
					Inicio de Sesión
				</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form_container">
						<form id="formulario" method="post">
							<div class="form-group position-relative has-icon-left mb-4">
								<input type="hidden" name="nombre" id="nombre" placeholder="Nombre Completo">
								<input type="email" class="form-control form-control-xl" name="correo" id="correo" placeholder="Correo">
								<div class="form-control-icon">
									<i class="bi bi-person"></i>
								</div>
							</div>
							<div class="form-group position-relative has-icon-left mb-4">
								<input type="password" class="form-control form-control-xl" name="password" id="password" placeholder="Contraseña">
								<div class="form-control-icon">
									<i class="bi bi-shield-lock"></i>
								</div>
							</div>
							<!-- <div class="form-check form-check-lg d-flex align-items-end">
							<input class="form-check-input me-2" type="checkbox" value="" name="checkbox" id="checkbox">
							<label class="form-check-label text-gray-600" for="flexCheckDefault">
								Keep me logged in
							</label>
						</div> -->
							<input type="hidden" id="tipo" value="login">
							<input type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" value="Ingresar">
						</form>
					</div>
					<div class="col-md-6">
						<div class="map_container ">
							<div id="googleMap"></div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- end book section -->

	<!-- footer section -->
	<footer class="footer_section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer-col">
					<div class="footer_contact">
						<h4>
							Contact Us
						</h4>
						<div class="contact_link_box">
							<a href="">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<span>
									Location
								</span>
							</a>
							<a href="">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>
									Call +01 1234567890
								</span>
							</a>
							<a href="">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span>
									demo@gmail.com
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 footer-col">
					<div class="footer_detail">
						<a href="" class="footer-logo">
							Feane
						</a>
						<p>
							Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
						</p>
						<div class="footer_social">
							<a href="">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
							<a href="">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
							<a href="">
								<i class="fa fa-pinterest" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 footer-col">
					<h4>
						Opening Hours
					</h4>
					<p>
						Everyday
					</p>
					<p>
						10.00 Am -10.00 Pm
					</p>
				</div>
			</div>
			<div class="footer-info">
				<p>
					&copy; <span id="displayYear"></span> All Rights Reserved By
					<a href="https://html.design/">Free Html Templates</a><br><br>
					&copy; <span id="displayYear"></span> Distributed By
					<a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
				</p>
			</div>
		</div>
		<?php
		include 'includes/templates/footer.php';
		?>
	</footer>
	<!-- footer section -->
	<!-- End Google Map -->

</body>

</html>