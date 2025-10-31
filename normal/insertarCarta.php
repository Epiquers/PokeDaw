<?php
// Iniciamos variables de sesión
session_start();
// Estableciendo la conexión
include("conexion.php");
// Añadimos url base
include("../config.php");
// Consulta para sacar el id de las imagenes
$consulta1="SELECT MAX(id) FROM pokemons";

if(mysqli_query($conn, $consulta1)==null){$num=1}else{}
mysqli_query($conn, )
// Recogida de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nombre'];
    $img =!!!!!!!!!!!!!!!!!!!! .".png";
    $name=$_SESSION['name'];

    $consulta = "INSERT INTO pokemons (id, nombre, imagen, usuario) 
    VALUES (0,'$nom', '$img', '$name')";

    $ruta="../images/".$img;
    // Copiamos la imagen a la carpeta destino
    COPY($_FILES["imagen"]["tmp_name"],$ruta);
    echo $consulta;
    // Ejecutamos la sentencia SQL
    mysqli_query($conn, $consulta);
    // Mostramos error si lo hubiera
    mysqli_error($conn);
    // Redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
    mysqli_close($conn);
    //header("LOCATION:mostrarNormal.php");
}
