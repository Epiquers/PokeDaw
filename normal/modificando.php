<?php
// Iniciamos variables de sesión
session_start();

// Estableciendo la conexión
include("conexion.php");
// Añadimos url base
include("../config.php");

// Recogida de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['carta'];
    $nom = $_POST['nombre'];
    $img = $id . ".png";

    $consulta2 = "UPDATE pokemons
                SET nombre = '$nom', imagen = '$img'
                WHERE id=$id";

    $ruta = "../images/" . $img;
    // Copiamos la imagen a la carpeta destino
    copy($_FILES["imagen"]["tmp_name"], $ruta);
    // Ejecutamos la sentencia SQL
    mysqli_query($conn, $consulta2);
    // Mostramos error si lo hubiera
    echo mysqli_error($conn);
    // Cerramos conexión
    mysqli_close($conn);
    header("LOCATION:mostrarNormal.php");
}
