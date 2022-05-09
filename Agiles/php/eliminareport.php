<?php
	$id=$_POST["id"];
	require_once "1_conexion.php";
	$cmd="delete from mensajes where id=$id";
	$resp=$conexion->query($cmd);
	header("Location:../reportes/eliminareport.php");
?>