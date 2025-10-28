<?php
	include("seguridad.php");
	include("../config.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link href="../styles.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../img/grifo.ico">
	<title>POKEDEX</title>


</head>

<body>

	<?php
		// Cabecera
		include("headerAdmin.php");

		// Barra de navegación
		include("navAdmin.php");
	?>
	
	<!--Contenido de la página-->
	<section>
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-9 col-sm-8 col-md-6 col-xl-4 mb-5 mt-3">
					<div class="row justify justify-content-center titulos mt-5 mb-4">
						<div class="col-12 mt-5">
							<p class="h2 text-center">ACCEDE A TU CUENTA</p>
						</div>
						<div class="col-8 mt-4">
							<div class="row">
								<form action="">
									<div class="col-12">
										<input type="text" class="form-control" placeholder="NIF">
										<span class="form-text text-muted small">EJ: 12345678X</span>
									</div>
									<div class="col-12 mt-3 mb-2">
										<input type="password" class="form-control" id="pass" name="pass" placeholder="CONTRASEÑA">
									</div>
									<div class="col-12 mt-4 d-grid mb-5">
										<button class="btn btn-lg" type="submit">INICIAR SESIÓN</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-1">
							<p class="text-center cuenta">¿NECESITAS UNA CUENTA?</p>
							<a class="btn w-100" href="registro.html" role="button">REGÍSTRATE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
		// Footer
		include("footerAdmin.php");
	?>

	<script src="./Bootstrap/js/bootnavbar.js"></script>
	<script>
		new bootnavbar();
	</script>

</body>

</html>