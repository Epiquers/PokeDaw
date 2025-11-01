<?php
include("seguridadNormal.php");
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
                <div class="col-12 mb-5 mt-3">
                    <div class="row justify-content-center titulos mt-5 mb-4">
                        <div class="col-12 mt-5">
                            <p class="h2 text-center"><strong>Listado de cartas:</strong></p>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="row justify-content-center">
                                <?php
                                include("conexion.php");
                                
                                $nif=$_SESSION['nif'];

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
    include("footerNormal.php");
    ?>

    <script src="../Bootstrap/js/bootnavbar.js"></script>
    <script>
        new bootnavbar();
    </script>

</body>

</html>