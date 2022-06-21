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
				Control de Platillos
			</h2>
		</div>
		<div id="main">
			<div class="page-heading">
				<section class="section plato">
					<div class="card">
						<div class="card-body">
							<table class="table table-striped" id="table1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Foto</th>
										<th>Nombre</th>
										<th>Precio</th>
										<th>Categoría</th>
										<th>Estado</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$consulta = $conn->query("SELECT * FROM menu a, categorias_menu b where a.categoria = b.id_categoria;");
									$contador = 1;
									while ($solicitud = $consulta->fetch_array()) {
										$id = $solicitud['id'];
										$ulr_foto = $solicitud['ulr_foto'];
										$nombre = $solicitud['nombre'];
										$precio = $solicitud['precio'];
										$nombre_categoria = $solicitud['nombre_categoria'];
										$estado = $solicitud['estado_plato'];
										if ($estado == 'a') {
											$estadoUser = 'Habilitado';
											$color = 'bg-success';
										} elseif ($estado == 'd') {
											$estadoUser = 'Deshabilitado';
											$color = 'bg-secondary';
										}
									?>
										<tr id="solicitud:<?php echo $solicitud['id'] ?>">
											<td><?php echo $contador++; ?></td>
											<td> <img style="width:130px" src="<?php echo $ulr_foto ?>" alt=""> </td>
											<td><?php echo $nombre ?></td>
											<td><?php echo 'L.' . $precio ?></td>
											<td><?php echo $nombre_categoria ?></td>
											<td><?php echo '<span class="badge ' . $color . '">' . $estadoUser . '</span>' ?></td>
											<td>
												<a href="edit-menu.php?ID=<?php echo $id ?>" target="_self"><span class="badge bg-primary">Editar</span></a>
												<i class="fa fa-trash-o">Eliminar</i>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
							<a href="new-usuario.php" class="btn btn-primary">Nuevo Usuario</a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<?php
include 'includes/templates/footer-dashboard.php';
?>