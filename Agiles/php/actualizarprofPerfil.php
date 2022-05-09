<?php
		require_once "1_conexion.php";
		$id=$_POST["id"];
		$nom=$_POST["nombre"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contraseña"];
		$cmd="update profesor set nombre='$nom', correo='$correo', contraseña='$contraseña' where $id=id";
		$resp=$conexion->query($cmd);
		header("Location:perfil.php");
			
?>
