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
				Control de Usuarios
			</h2>
		</div>
		<div id="main">
			<div class="page-heading">
				<section class="section usuarios">
					<div class="card">
						<div class="card-body">
							<table class="table table-striped" id="table1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nombre</th>
										<th>Username</th>
										<th>Correo</th>
										<th>Role</th>
										<th>Estado</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$consulta = $conn->query("SELECT * FROM main_users a, main_cargo b WHERE a.role_user = b.id_role");
									$contador = 1;
									while ($solicitud = $consulta->fetch_array()) {
										$id = $solicitud['id'];
										$descripcion = $solicitud['descripcion'];
										$usuario_name = $solicitud['usuario_name'];
										$apellidos = $solicitud['apellidos'];
										$username = $solicitud['nickname'];
										$email = $solicitud['email_user'];
										$estado = $solicitud['estado_user'];
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
											<td><?php echo $usuario_name . ' ' . $apellidos ?></td>
											<td><?php echo '@' . $username ?></td>
											<td><?php echo $email ?></td>
											<td><?php echo '<span class="badge ' . $color . '">' . $descripcion ?></td>
											<td><?php echo '<span class="badge ' . $color . '">' . $estadoUser . '</span>' ?></td>
											<td>
												<a href="edit-usuario.php?ID=<?php echo $solicitud['id'] ?>" target="_self"><span class="badge bg-primary">Editar</span></a>
												<i class="fa fa-trash-o">Eliminar</i>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
							<a href="new-plato.php" class="btn btn-primary">Nuevo Plato</a>
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