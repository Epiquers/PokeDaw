<?php
session_start();
// Deseteamos la variable de sesión
unset($_SESSION['name']);
// Redirigimos al index
header("LOCATION: index.php");
?>