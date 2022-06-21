<?php
// session_start();
include 'includes/sesiones.php';
// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";
include 'includes/templates/header.php';
include 'includes/funciones.php';
include 'includes/conexion.php';
?>
<style>
	.bg-box img {
		height: 120%;
	}

	.hero_area {
		position: relative;
		min-height: 0;
	}

	label {
		/* border: 1px solid #ccc; */
		padding: 10px;
		margin: 0 0 10px;
		display: block;
	}

	label:hover {
		background: #eee;
		cursor: pointer;
	}
</style>
<div class="hero_area">
	<div class="bg-box">
		<img src="images/hero-bg.jpg" alt="">
	</div>
	<!-- header section strats -->
	<?php
	include 'includes/templates/menu_dashboard.php';
	?>
	<!-- end header section -->
	<!-- slider section -->

	<!-- end slider section -->
</div>

<!-- food section -->

<section class="food_section layout_padding">
	<div class="container">
		<div class="heading_container heading_center">
			<h2>
				Seleccionar platillos
			</h2>
		</div>
		<ul class="filters_menu">
			<form action="#" method="post">
				<div style="    display: flex;    flex-wrap: wrap;    justify-content: space-around;">
					<?php
					$consulta = $conn->query("SELECT * FROM menu");
					$contador = 1;
					$total = 0;
					while ($solicitud = $consulta->fetch_array()) {
						$nombre = $solicitud['nombre'];
						$ulr_foto = $solicitud['ulr_foto'];
						$precio = $solicitud['precio'];
					?>
						<div style="width:25%;height:121px; margin:0 10px"><label>
							<img style="width:25%;" src="<?php echo $ulr_foto ?>" alt="">
							<input type="hidden" name="total" value="<?php echo $precio ?>">
							<input type="checkbox" name="orden[]" value="<?php echo $nombre ?>" /><?php echo $nombre ?></label>
						</div>
					<?php
					};
					?>
				</div>
				<input type="submit" name="submit" value="Enviar" />
			</form>
		</ul>
		<div>
			<h3>Pedido Solicitado</h3>
			<?php
			if (isset($_POST['submit'])) { //Validacion de envio de formulario
				if (!empty($_POST['orden'])) {
					foreach ($_POST['orden'] as $selected) {
						echo $selected . "</br>";
						 // Imprime resultados
					}
					// echo $total;
				}
			}
			?>
		</div>
	</div>
</section>

<!-- end food section -->

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
</footer>
<!-- footer section -->

<!-- jQery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- isotope js -->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

</body>

</html>