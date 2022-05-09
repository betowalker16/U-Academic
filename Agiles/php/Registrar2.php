<?php
    require_once "1_conexion.php";
	
	#preparamos el comando de inserción

	$id=$_POST["id_prof"];
	$nombre=$_POST["alumno"];
	$correo=$_POST["correo"];
	$tutor=$_POST["nombre"];
	
	$cmd="insert into alumno(id_profesor, tutor, nombre, correo, verificada) values ($id, '$tutor','$nombre','$correo', 'NO')";
	$resp=$conexion->query($cmd);
	if($resp)
	{
		header("location:../agregar/atutor.php?error=0");
		
	}
	else
	{
		header("location:../agregar/atutor.php?error=2");	
	}
?>