<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link href="styles.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/grifo.ico">
	<title>REGISTRO - CES VEGA MEDIA</title>
</head>

<body>
	<!--Cabecera-->
	<div class="container-fluid cabecera">
		<?php
		include("header.php");
		?>
	</div>
	<!--Contenido de la página-->
	<section>

		<div class="container ">
			<form action="altas.php" method="POST">
				<div class="row justify-content-center align-items-center ">
					<div class="col-11 col-sm-12 col-lg-11 col-xl-10 mb-4 mt-4">
						<div class="row justify-content-center titulos mt-4 mb-4">
							<div class="col-12 mt-4">
								<p class="text-center" style="font-size: 25pt;">NUEVO USUARIO</p>
							</div>
							<div class="col-10">
								<hr>
							</div>
							<div class="col-12 col-md-5 mt-4">
								<div class="row justify-content-end">
									<div class="col-12">
										<div class="form-floating mb-3 ">
											<input type="text" name="nif" id="nif" class="form-control" placeholder="NIF" required>
											<label for="nif">NIF <span class="form-text text-muted small float-end">EJ: 12345678X</span></label>
										</div>
										<div class="form-floating mb-3 ">
											<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
											<label for="nombre">Nombre</label>
										</div>
										<div class="form-floating mb-3 ">
											<input type="text" name="ape" id="ape" class="form-control" placeholder="Apellidos" required>
											<label for="ape">Apellidos</label>
										</div>
										<div class="form-floating mb-3 ">
											<input type="text" name="dir" id="dir" class="form-control" placeholder="Dirección" required>
											<label for="dir">Dirección</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-auto"></div>
							<div class="col-12 col-md-5 mt-4">
								<div class="row justify-content-start">
									<div class="col-12">
										<div class="form-floating mb-3 ">
											<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
											<label for="email">Email <span class="form-text text-muted small float-end">EJ: xxxxxx@pokedaw.es</span></label>
										</div>
										<div class="form-floating mb-3">
											<input type="number" name="tel" id="tel" class="form-control" placeholder="Teléfonos" required>
											<label for="email">Teléfonos<span class="form-text text-muted float-end small"> EJ: 968647842 || 636365874</span></label>
										</div>
										<div class="form-floating mb-3 ">
											<input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña" required>
											<label for="pass">Contraseña</label>
										</div>
										<div class="form-floating ">
											<input type="password" name="pass2" id="pass2" class="form-control" placeholder="Confirma tu contraseña" required>
											<label for="pass2">Confirma tu contraseña</label>
										</div>
										<?php
										if (isset($_SESSION['error'])) {
											echo "<div class='text-danger small mt-1'>Las contraseñas no coinciden..</div>";
											unset($_SESSION['error']);
										}
										?>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-10 ms-md-3 mt-2 mb-2">
								<span class="form-text text-danger small float-end">Todos los campos son obligatorios</span>
							</div>
							<div class="col-12 col-md-6 d-grid mb-4 mt-2">
								<button class="btn btn-lg" type="submit">CREAR CUENTA</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!--Pie de página-->
	<?php
	include("footer.php");
	?>
</body>

</html>