<?php
include("seguridadAdmin.php");
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
                <div class="col-11 col-sm-10 col-md-7 col-xl-6 col-xxl-5 mb-5 mt-3">
                    <div class="row justify justify-content-center titulos mt-5 mb-4">
                        <div class="col-12 mt-5">
                            <p class="h2 text-center"><strong>Eliminar carta:</strong></p>
                            <br>
                        </div>
                        <div class="col-10 mt-8">
                            <form action="eliminandoAdmin.php" method="post" enctype="multipart/form-data">
                                <table width="450">
                                    <tr>
                                        <td style="text-align: center;">
                                            <p>Elige una carta</p>
                                        </td>
                                        <td style="text-align: left;">
                                            <select name="carta" id="carta">
                                                <?php
                                                include("conexion.php");
                                                

                                                $consulta = "SELECT * FROM pokemons";
                                                
                                                $result = mysqli_query($conn, $consulta);

                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo "<option value='" . $row['id'] . "'>" . $row['id'] . "-" . $row['nombre'] . "</option>";
                                                }
                                                mysqli_close($conn);
                                                ?>

                                            </select>
                                        </td>
                                    </tr>
                                    <tr height="100">
                                        <td style="text-align: center;"><input type="submit" name="button" class="btn" value="Eliminar" /></td>
                                        <td><input type="reset" name="button2" class="btn" value="Restablecer" /></td>
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
    include("footerAdmin.php");
    ?>

    <script src="../Bootstrap/js/bootnavbar.js"></script>
    <script>
        new bootnavbar();
    </script>

</body>

</html>
