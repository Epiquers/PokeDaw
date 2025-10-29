<?php
// Iniciamos variables de sesión
session_start();
// Estableciendo la conexión
include("conexion.php");
// Recogida de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nif = $_POST['nif'];
    $nombre = $_POST['nombre'];
    $ape = $_POST['ape'];
    $dir = $_POST['dir'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    if ($pass !== $pass2) {
        $_SESSION['error'] = true;
        header("LOCATION: registro.php");
    } else {
        $consulta = "INSERT INTO usuarios (nif,nombre,apellidos,direccion,email,telefono,pass,rol) 
    VALUES ('$nif','$nombre','$ape','$dir','$email','$tel','$pass',0)";
        // Ejecutamos la sentencia SQL
        mysqli_query($conn, $consulta);
        // Redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
        mysqli_close($conn);
        header("LOCATION:index.php");
    }
}
