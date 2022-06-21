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
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6 order-md-1 order-last">
					<h3>Usuarios</h3>
				</div>
				<div class="col-12 col-md-6 order-md-2 order-first">
					<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page">Configuración</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<section class="section">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Nuevo Usuario</h5>
				</div>
				<div class="card-body">
					<form class="form" id="nuevoUsuario" method="post">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="card">
									<div class="card-content">
										<div class="card-body">
											<div class="row">
												<div class="col-md-6 col-12">
													<div class="form-group">
														<label for="first-name-column">Nombre</label>
														<input type="text" class="form-control" id="nombre" name="nombre" value="" placeholder="Nombre" required>
													</div>
												</div>
												<div class="col-md-6 col-12">
													<div class="form-group">
														<label for="first-name-column">Apellido</label>
														<input type="text" class="form-control" id="apellido" name="apellido" value="" placeholder="Apellido" required>
													</div>
												</div>
												<div class="col-md-6 col-12">
													<div class="form-group">
														<label for="first-name-column">Correo Electrónico</label>
														<input type="email" class="form-control" id="email" name="email" value=" " placeholder="Email" required>
													</div>
												</div>
												<div class="col-md-6 col-12">
													<div class="form-group">
														<label for="first-name-column">Contraseña</label>
														<input type="password" class="form-control" id="password" name="password" value="" placeholder="Password" required>
													</div>
												</div>
												<div class="col-md-6 col-12">
													<div class="form-group">
														<label for="first-name-column">Role</label>
														<select class="form-select" name="role" id="role">
															<?php
															$obtenerUsuarios = obtenerRoles();
															if ($obtenerUsuarios->num_rows > 0) {
																while ($row = $obtenerUsuarios->fetch_assoc()) {
																	$id_role = $row['id_role'];
																	$descripcion = $row['descripcion'];
																	if ($id_role == $role_user) {
																		echo '<option name="role" value="' . $id_role . '" selected>' . $descripcion . '</option>';
																	} else {
																		echo '<option name="role" value="' . $id_role . '">' . $descripcion . '</option>';
																	}
																}
															}
															?>
														</select>
													</div>
												</div>
												<div class="col-md-6 col-12">
													<div class="form-group">
														<label for="last-name-column">Estado</label>
														<select class="form-select" name="estado" id="estado">
															<option name='estado' value='a'>Habilitado</option>
															<option name='estado' value='d'>Deshabilitado</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 d-flex justify-content-end">
								<input type="hidden" class="btn btn-primary me-1 mb-1" id="tipo" value="newUsuario">
								<input class="btn btn-primary me-1 mb-1" type="submit" value="Crear Usuario" name="update">
								<a href="usuarios.php">
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