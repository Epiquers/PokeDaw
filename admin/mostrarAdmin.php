<?php
include("seguridadAdmin.php");
include("../config.php");
include("conexion.php");
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
    <link rel="icon" type="image/x-icon" href="../img/pokeball.png">
    <title>PokeDaw</title>
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
                <div class="col-12 mb-5 mt-3">
                    <div class="row justify-content-center titulos mt-5 mb-4">
                        <div class="col-12 mt-5">
                            <p class="h2 text-center"><strong>Listado de cartas:</strong></p>
                            <br>
                        </div>
                        <div class="col-10 mt-8 d-flex justify-content-center">
                            <form action="" method="post" enctype="multipart/form-data">
                                <table width="450">
                                    <tr class="text-center">
                                        <td colspan="2">
                                            <p>Elige una carta</p>

                                            <select name="usuario" id="usuario">
                                                <option value="">Selecciona usuario</option>
                                                <?php


                                                $consulta = "SELECT * FROM usuarios WHERE rol=0";
                                                $result = mysqli_query($conn, $consulta);

                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo "<option value='" . $row['nif'] . "'>" . $row['nif'] . "-" . $row['nombre'] . "</option>";
                                                }

                                                ?>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr height="100" class="text-center">
                                        <td colspan="2">
                                            <input type="submit" name="button" class="btn" value="Mostrar" />
                                            <input type="reset" name="button2" class="btn" value="Restablecer" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="row justify-content-center">
                                <?php

                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {


                                    $nif = $_POST['usuario'];

                                    $consulta = "SELECT * FROM pokemons WHERE usuario='$nif'";
                                    $result = mysqli_query($conn, $consulta);

                                    while ($row = mysqli_fetch_array($result)) {
                                ?>
                                        <div class="col-12 col-sm-6 col-md-5 col-lg-3 mb-4 text-center">
                                            <p><strong>Id: <?php echo $row["id"]; ?></strong></p>
                                            <p><strong>Nombre: <?php echo $row["nombre"]; ?></strong></p>
                                            <img src="<?php echo BASE_URL . 'images/' . $row['imagen']; ?>"
                                                style="width:250px; height:auto;" alt="">
                                        </div>
                                <?php
                                    }
                                    mysqli_close($conn);
                                }


                                ?>
                            </div>
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

    <script src="../Bootstrap/js/bootnavbar.js"></script>
    <script>
        new bootnavbar();
    </script>

</body>

</html>