	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="main_navbar">
		<div class="container-fluid">

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent"
				aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">

					<li class="nav-item">
						<a class="nav-link" href="indexAdmin.php">
							<i class="bi bi-house-door-fill"></i>Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="mostrarUsuarios.php">
							<i class="bi bi-person-fill"></i>Mostrar usuarios</a>
					</li>>
					<li class="nav-item">
						<a class="nav-link" href="mostrarAdmin.php">
							<i class="bi bi-eye-fill"></i>Mostrar cartas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="eliminarAdmin.php">
							<i class="bi bi-trash-fill"></i>Eliminar carta</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
							<i class="bi bi-person-fill"> <?php echo $_SESSION['name']; ?></a></i>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="../logout.php">Cerrar sesión</a></li>
						</ul>
					</li>

				</ul>
				</ul>
			</div>
		</div>
	</nav>