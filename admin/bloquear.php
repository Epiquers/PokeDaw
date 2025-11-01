<?php
// Iniciamos variables de sesión
session_start();

// Estableciendo la conexión
include("conexion.php");
// Añadimos url base
include("../config.php");

// Recogida de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nif = (int)$_POST['nif'];
    $block = (int)$_POST['bloqueado'];

    if ($block === 1) {
        $consulta = "UPDATE usuarios
                SET bloqueado=1
                WHERE nif=$nif";
    } else {
        $consulta = "UPDATE usuarios
                SET bloqueado=0
                WHERE nif=$nif";
    }

    // Ejecutamos la sentencia SQL
    mysqli_query($conn, $consulta);
    // Mostramos error si lo hubiera
    echo mysqli_error($conn);
    // Cerramos conexión
    mysqli_close($conn);
    header("LOCATION:mostrarUsuarios.php");
}
