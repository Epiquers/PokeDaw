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
    include("headerNormal.php");

    // Barra de navegación
    include("navNormal.php");

    ?>

    <!--Contenido de la página-->
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-9 col-sm-8 col-md-6 col-xl-4 mb-5 mt-3">
                    <div class="row justify justify-content-center titulos mt-5 mb-4">
                        <div class="col-12 mt-5">
                            <p class="h2 text-center">Insertar carta</p>
                        </div>
                        <div class="col-10 mt-8">
                            <form action="altas.php" method="post" enctype="multipart/form-data">
                                <table width="400" border="0">
                                    <tr>
                                        <td>Nombre</td>
                                        <td><input type="text" name="nombre" class="mb-3" required /></td>
                                    </tr>
                                    <tr>
                                        <td> Imagen </td>
                                        <td><input type="file" name="imagen" class="mb-3" required /></td>
                                    </tr>
                                    <tr>
                                        <td ><input type="submit" name="button" class="btn" value="Enviar" /></td>
                                        <td ><input type="reset" name="button2" class="btn" value="Restablecer" /></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php
    // Footer
    include("footerNormal.php");
    ?>

    <script src="../Bootstrap/js/bootnavbar.js"></script>
    <script>
        new bootnavbar();
    </script>

</body>

</html>

<?php
include("conexion.php");

$consulta = "SELECT * FROM pokemons";
$result = mysqli_query($conn, $consulta);

while ($row = mysqli_fetch_array($result)) {
    print("Id: " . $row["codigo"] . "<br>");
    print("Nombre: " . $row["producto"] . "<br>");
    print "<img width='250' src=images/" . $row['imagen'] . "><br><br>";
}
mysqli_close($conn);
?>