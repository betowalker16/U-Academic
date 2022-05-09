<?php 
require_once "1_conexion.php";

	$nombre = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['contenido'];
    
    $cmd="insert into mensajes(correo, asunto, contenido) values ('$nombre','$asunto','$mensaje')";
    $resp=$conexion->query($cmd);

	if(mail($nombre, $asunto, $mensaje)){
		header("Location:../reportes/Ereport.php");
        
	}else{
		echo "error";
	}
 ?>