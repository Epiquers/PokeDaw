<?php
	session_start();
	if (!isset($_SESSION['rol']) || $_SESSION['rol']==0){
		session_unset();
		header("LOCATION:../index.php");
	}
?>