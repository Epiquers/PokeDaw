<?php
session_start();
// Deseteamos la variable de sesión
session_unset();
// Redirigimos al index
header("LOCATION: index.php");
?>