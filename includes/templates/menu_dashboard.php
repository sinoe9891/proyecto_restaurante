<header class="header_section">
	<div class="container">
		<nav class="navbar navbar-expand-lg custom_nav-container ">
			<a class="navbar-brand" href="index.php">
				<span>
					<img class="logo" src="images/logo.png" alt="">
				</span>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class=""> </span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- <li class="nav-item">
				<?php echo $_SESSION["nombre_usuario"]; ?>
						<?php echo $_SESSION["role_user"]; ?>
					</li> -->
				<?php
				if (isset($_SESSION[''])) {
					header('location:login.php');
				} else if ($_SESSION["role_user"] == 1) {
				?>
					<ul class="navbar-nav  mx-auto ">
						<li class="nav-item active">
							<a class="nav-link" href="dashboard.php">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="usuarios.php">Usuarios</a>
						</li>
						<!-- <li class="nav-item">
						<a class="nav-link" href="about.php">Reservas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">Horarios</a>
					</li> -->
					</ul>
					<div class="user_option">
						<a href="" class="nav-link">
							<p style="margin-bottom: 0;">
								<i class="fa fa-user" aria-hidden="true"> <span style="color: white;font-family: 'Open Sans';"> Hola <?php echo $_SESSION["nombre_usuario"]; ?></span></i>
							</p>
						</a>
						<a href="login.php?cerrar_sesion=true" class="order_online">
							Cerrar Sesión
						</a>
					</div>
				<?php

				} else if ($_SESSION["role_user"] == 3) {
				?>
					<ul class="navbar-nav  mx-auto ">
						<li class="nav-item active">
							<a class="nav-link" href="mesero.php">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="orden_mesero.php">Ordenes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">Reservas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">Horarios</a>
						</li>
					</ul>
					<div class="user_option">
						<a href="" class="nav-link">
							<p style="margin-bottom: 0;">
								<i class="fa fa-user" aria-hidden="true"> <span style="color: white;font-family: 'Open Sans';"> Hola <?php echo $_SESSION["nombre_usuario"]; ?></span></i>
							</p>
						</a>
						<a href="login.php?cerrar_sesion=true" class="order_online">
							Cerrar Sesión
						</a>
					</div>
				<?php

				} else if ($_SESSION["role_user"] == 2) {
				?>
					<ul class="navbar-nav  mx-auto ">
						<li class="nav-item active">
							<a class="nav-link" href="mesero.php">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="ver-menu.php">Ver Menú</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="about.php">Editar Horarios</a>
						</li> -->
					</ul>
					<div class="user_option">
						<a href="" class="nav-link">
							<p style="margin-bottom: 0;">
								<i class="fa fa-user" aria-hidden="true"> <span style="color: white;font-family: 'Open Sans';"> Hola <?php echo $_SESSION["nombre_usuario"]; ?></span></i>
							</p>
						</a>
						<a href="login.php?cerrar_sesion=true" class="order_online">
							Cerrar Sesión
						</a>
					</div>
				<?php

				} else if ($_SESSION["role_user"] == 4) {
				?>
					<ul class="navbar-nav  mx-auto ">
						<li class="nav-item">
							<a class="nav-link" href="menu.php">Ordenes</a>
						</li>
					</ul>
					<div class="user_option">
						<a href="" class="nav-link">
							<p style="margin-bottom: 0;">
								<i class="fa fa-user" aria-hidden="true"> <span style="color: white;font-family: 'Open Sans';"> Hola <?php echo $_SESSION["nombre_usuario"]; ?></span></i>
							</p>
						</a>
						<a href="login.php?cerrar_sesion=true" class="order_online">
							Cerrar Sesión
						</a>
					</div>
				<?php

				}
				?>
			</div>
		</nav>
	</div>
</header>