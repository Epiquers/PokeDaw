<?php
	session_start();
	if (!isset($_SESSION['rol']) || $_SESSION['rol']==1 || $_SESSION['bloqueado']==1){
		session_unset();
		header("LOCATION:../index.php");
	}
?>