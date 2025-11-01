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

    <!-- Contenido de la página -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 mt-5">
                    <h2 class="text-center mb-5"><strong>Listado de usuarios:</strong></h2>

                    <?php
                    include("conexion.php");

                    $consulta = "SELECT * FROM usuarios WHERE rol=0";
                    $result = mysqli_query($conn, $consulta);

                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <div class="table-responsive mb-5">
                            <table class="table table-striped table-bordered text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>NIF</th>
                                        <th>Nombre</th>
                                        <th>Dirección</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Contraseña</th>
                                        <th>Bloquear usuario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row['nif']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['direccion']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['telefono']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row['pass']) . "</td>";

                                        // Checkbox para bloquear/desbloquear usuario
                                        echo "<td class='text-center'>
                <form action='bloquear.php' method='post' style='margin:0;'>
                    <input type='hidden' name='nif' value='" . $row['nif'] . "'>
                    <input type='hidden' name='bloqueado' value='0'>
                    <input type='checkbox' name='bloqueado' value='1' onchange='this.form.submit()' " .
                                            ($row['bloqueado'] == 1 ? 'checked' : '') . ">
                </form>
            </td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    <?php
                    } else {
                        echo "<p class='text-center text-muted'>No hay usuarios registrados.</p>";
                    }

                    mysqli_close($conn);
                    ?>
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