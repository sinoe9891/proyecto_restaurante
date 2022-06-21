<?php
// session_start();
// include 'includes/sesiones.php';
// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";
include 'includes/templates/header.php';
include 'includes/funciones.php';
include 'includes/conexion.php';
?>

<div class="hero_area">
	<div class="bg-box">
		<img src="images/hero-bg.jpg" alt="">
	</div>
	<!-- header section strats -->
	<?php
	include 'includes/templates/menu.php';
	?>
	<!-- end header section -->
	<!-- slider section -->
	<section class="slider_section ">
		<div id="customCarousel1" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="container ">
						<div class="row">
							<div class="col-md-7 col-lg-6 ">
								<div class="detail-box">
									<h1>
										Deliciosas Hamburguesas
									</h1>
									<p>
									Nuestro secreto está en la calidad mundial de nuestros productos cárnicos debido a nuestra integración vertical, donde todos los aspectos de la industria de la carne se reúnen en una sola empresa, resultando en el mejor ganado Black Angus que puedes disfrutar en nuestros restaurantes y beef stores.
									</p>
									<div class="btn-box">
										<a href="" class="btn1">
											Ordenar ahora
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item ">
					<div class="container ">
						<div class="row">
							<div class="col-md-7 col-lg-6 ">
								<div class="detail-box">
									<h1>
										Deliciosas Pizza's
									</h1>
									<p>
										Ofrecemos deliciosas Pizza's con reseta de la casa, jamás has probado algo así. Ven y disfruta las mejores del país. Te esperamos!!
									</p>
									<div class="btn-box">
										<a href="" class="btn1">
											Order Now
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="container">
				<ol class="carousel-indicators">
					<li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
					<li data-target="#customCarousel1" data-slide-to="1"></li>
				</ol>
			</div>
		</div>

	</section>
	<!-- end slider section -->
</div>

<!-- food section -->

<section class="food_section layout_padding-bottom">
	<div class="container">
		<div class="heading_container heading_center">
			<h2>
				Nuestro Menú
			</h2>
		</div>
		<ul class="filters_menu">
			<li class="active" data-filter="*">All</li>
			<?php
			$consulta = $conn->query("SELECT nombre, clase FROM categorias_menu");
			$contador = 1;
			while ($solicitud = $consulta->fetch_array()) {
				$clase = $solicitud['clase'];
				$nombre = $solicitud['nombre'];
			?>
				<li data-filter=".<?php echo $clase ?>"><?php echo $nombre ?></li>
			<?php
			};
			?>
		</ul>


		<div class="filters-content">
			<div class="row grid">
				<?php
				$consulta = $conn->query("SELECT * FROM menu a, categorias_menu b WHERE a.categoria = b.id;");
				$contador = 1;
				while ($solicitud = $consulta->fetch_array()) {
					$nombre = $solicitud['nombre'];
					$descripcion = $solicitud['descripcion'];
					$precio = $solicitud['precio'];
					$categoria = $solicitud['categoria'];
					$ulr_foto = $solicitud['ulr_foto'];
					$clase = $solicitud['clase'];
				?>
					<div class="col-sm-6 col-lg-4 all <?php echo $clase ?>">
						<div class="box">
							<div>
								<div class="img-box">
									<img src="<?php echo $ulr_foto ?>" alt="">
								</div>
								<div class="detail-box">
									<h5>
										<?php echo $nombre ?>
									</h5>
									<p>
										<?php echo $descripcion ?>
									</p>
									<div class="options">
										<h6>
											<?php echo $precio ?>
										</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				};
				?>
				
			</div>
		</div>
		<!-- <div class="btn-box">
			<a href="">
				View More
			</a>
		</div> -->
	</div>
</section>

<!-- end food section -->

<!-- about section -->

<section class="about_section layout_padding">
	<div class="container  ">

		<div class="row">
			<div class="col-md-6 ">
				<div class="img-box">
					<img src="images/about-img.png" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="detail-box">
					<div class="heading_container">
						<h2>
							We Are Feane
						</h2>
					</div>
					<p>
						There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you
						are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
						the middle of text. All
					</p>
					<a href="">
						Read More
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- end about section -->

<!-- book section -->
<section class="book_section layout_padding">
	<div class="container">
		<div class="heading_container">
			<h2>
				Reservación
			</h2>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form_container">
					<form action="">
						<div>
							<input type="text" class="form-control" placeholder="Nombre" />
						</div>
						<div>
							<input type="text" class="form-control" placeholder="Teléfono" />
						</div>
						<div>
							<input type="email" class="form-control" placeholder="Correo" />
						</div>
						<div>
							<select class="form-control nice-select wide">
								<option value="" disabled selected>
									Para cuantas personas?
								</option>
								<option value="">
									2
								</option>
								<option value="">
									3
								</option>
								<option value="">
									4
								</option>
								<option value="">
									5
								</option>
							</select>
						</div>
						<div>
							<input type="date" class="form-control">
						</div>
						<div class="btn_box">
							<button>
								Book Now
							</button>
						</div>
					</form>
				</div>
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

<!-- client section -->

<section class="client_section layout_padding-bottom">
	<div class="container">
		<div class="heading_container heading_center psudo_white_primary mb_45">
			<h2>
				What Says Our Customers
			</h2>
		</div>
		<div class="carousel-wrap row ">
			<div class="owl-carousel client_owl-carousel">
				<div class="item">
					<div class="box">
						<div class="detail-box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
							</p>
							<h6>
								Moana Michell
							</h6>
							<p>
								magna aliqua
							</p>
						</div>
						<div class="img-box">
							<img src="images/client1.jpg" alt="" class="box-img">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="box">
						<div class="detail-box">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
							</p>
							<h6>
								Mike Hamell
							</h6>
							<p>
								magna aliqua
							</p>
						</div>
						<div class="img-box">
							<img src="images/client2.jpg" alt="" class="box-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- end client section -->

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
	// include 'includes/templates/footer.php';
	?>
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