<?php
		require_once "1_conexion.php";
		$id=$_POST["id"];
		$nom=$_POST["tutor"];
		$alum=$_POST["nombre"];
		$correo=$_POST["correo"];
		$v=$_POST["verificada"];

		$cmd="update alumno set tutor='$nom', nombre='$alum', correo='$correo', verificada='$v' where $id=id";
		$resp=$conexion->query($cmd);
		header("Location:../editar/listaedit2.php");
			
?>
