<?php
// session_start();
include 'includes/sesiones.php';
include 'includes/funciones.php';
include 'includes/conexion.php';
include 'includes/templates/header.php';
if (isset($_GET['ID'])) {
	$user_id = $_GET['ID'];
}
date_default_timezone_set('America/Tegucigalpa');
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
<section class="food_section layout_padding">
	<div class="container">
		<div id="main">
			<header class="mb-3">
				<a href="#" class="burger-btn d-block d-xl-none">
					<i class="bi bi-justify fs-3"></i>
				</a>
			</header>

			<div class="page-heading">
				<section class="section">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Editar Platillo</h5>
						</div>
						<div class="card-body">
							<form class="form" id="editarMenu" method="post">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="card">
											<div class="card-content">
												<div class="card-body">
													<?php
													if ($_GET) {
														// $solicitudes = obtenerInfoSolicitud($user_id);
														$solicitudes = obtenerInfoBloque($user_id);
														$obtenerUsuarios = obtenerCategorias();
													} else {
														header('Location: clientes.php');
													};
													$bloques = obtenerTodo('bloques');
													$consulta = $conn->query("SELECT * FROM menu WHERE id = $user_id;");
													$numero = 1;
													while ($solicitud = $consulta->fetch_array()) {
														$id = $solicitud['id'];
														$nombre = $solicitud['nombre'];
														$descripcion = $solicitud['descripcion'];
														$precio = $solicitud['precio'];
														$categoria = $solicitud['categoria'];
														$ulr_foto = $solicitud['ulr_foto'];
														$estado = $solicitud['estado_plato'];

														if ($estado == 'v') {
															$estadoLote = 'Vendido';
															$color = 'bg-secondary';
														} elseif ($estado == 'd') {
															$estadoLote = 'Disponible';
															$color = 'bg-success';
														} elseif ($estado == 'r') {
															$estadoLote = 'Reservado';
															$color = 'bg-info';
														}
													?>
														<div class="row">
															<div class="col-md-6 col-12">
																<div class="form-group">
																	<label for="first-name-column">Nombre</label>
																	<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
																	<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
																</div>
															</div>
															
															<div class="col-md-6 col-12">
																<div class="form-group">
																	<label for="first-name-column">URL Fotografía</label>
																	<input type="text" class="form-control" id="url_foto" name="url_foto" value="<?php echo $ulr_foto; ?>" required >
																</div>
															</div>
															<div class="col-md-12 col-12">
																<div class="form-group">
																	<label for="first-name-column">Descripción</label>
																	<textarea id="descripcion"  class="form-control" name="descripcion" cols="30" rows="10" required><?php echo $descripcion; ?></textarea>
																</div>
															</div>
															<div class="col-md-6 col-12">
																<div class="form-group">
																	<label for="first-name-column">Categoría</label>
																	<select class="form-select" name="categoria" id="categoria">
																		<?php
																		if ($obtenerUsuarios->num_rows > 0) {
																			while ($row = $obtenerUsuarios->fetch_assoc()) {
																				$id_cate = $row['id'];
																				$nombre_categoria = $row['nombre_categoria'];
																				if ($id_cate == $categoria) {
																					echo '<option name="categoria" value="' . $id_cate . '" selected>' . $nombre_categoria . '</option>';
																				} else {
																					echo '<option name="categoria" value="' . $id_cate . '">' . $nombre_categoria . '</option>';
																				}
																			}
																		}
																		?>
																	</select>
																</div>
															</div>
															<div class="col-md-6 col-12">
																<div class="form-group">
																	<label for="first-name-column">Precio</label>
																	<input type="number" class="form-control" id="precio" step="0.01"  name="precio" value="<?php echo $precio; ?>" required >
																</div>
															</div>
															<div class="col-md-6 col-12">
																<div class="form-group">
																	<label for="last-name-column">Estado</label>
																	<select class="form-select" name="estado" id="estado">
																		<?php
																		if ($estado == 'a') {
																			echo "<option name='estado' value='a' selected>Habilitado</option>";
																			echo "<option name='estado' value='d'>Deshabilitado</option>";
																		} elseif ($estado == 'd') {
																			echo "<option name='estado' value='a'>Habilitado</option>";
																			echo "<option name='estado' value='d' selected>Deshabilitado</option>";
																			$estado = 'Disponible';
																		}
																		?>
																	</select>
																</div>
															</div>
														</div>
													<?php
													}
													?>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 d-flex justify-content-end">
										<input type="hidden" class="btn btn-primary me-1 mb-1" id="tipo" value="editMenu">
										<input class="btn btn-primary me-1 mb-1" type="submit" value="Actualizar" name="update">
										<a href="ver-menu.php">
											<div class="btn btn-light-secondary me-1 mb-1">Regresar</div>
										</a>
									</div>
								</div>
							</form>
						</div>
					</div>

				</section>
			</div>
		</div>
	</div>
</section>
<?php
include('includes/templates/footer-dashboard.php');
?>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/main.js"></script>
</body>

</html>