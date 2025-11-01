<?php
	session_start();
	if (!isset($_SESSION['rol']) || $_SESSION['rol']==1){
		session_unset();
		header("LOCATION:../index.php");
	}else if($_SESSION['bloqueado']==1){
		session_unset();
		$_SESSION['block']=true;
		header("LOCATION:../index.php");
	}

?>