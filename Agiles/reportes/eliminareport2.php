<!doctype html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
			body{
				background-color: #750D37;
				color: white;
			}
           *
            {
				margin:0px;
				padding:0px;
				text-align:center;
			}
			table
            {
				width:80%;
				margin:0px auto;
				margin-top: 50px;
				border-collapse:collapse;
				border: solid black 2px;
			}
			th
            {
				text-align:center;
				padding: 15px;
				border-bottom: solid black 2px;
			}
			td
			{
				text-align:center;
				padding: 15px;
				border-bottom: solid black 2px;
			}
			tr:nth-child(even)
            {
				background-color: #0dccbc;
				color: black;
				
			}

			table tr td img 
			{
				width:100%;
				height:100%;
			}
            </style>
</head>
<body>

<?php
require_once "../php/1_conexion.php";
$cmd="select id,correo,asunto,contenido from mensajes;";
$tab=$conexion->query($cmd);
$columnas=0;
if($tab->num_rows==0) 
return;
?>
<h1> LISTA DE MENSAJES</h1>
<table>
	<tr>
		<th>ID</th>
		<th>CORREO</th>
		<th>ASUNTO</th>
		<th>CONTENIDO</th>
	</tr>
<?php
while($reg=$tab->fetch_assoc())
{
    $id=$reg["id"];
    $nom=$reg["correo"];
    $asunto=$reg["asunto"];
	$cont=$reg["contenido"];
	
	echo "<tr>
			<td> $id </td>
			<td> $nom </td>
			<td> $asunto </td>
			<td> $cont </td>
			<td> 
				<form action='../php/eliminareport2.php' method='POST'>
					<input type='hidden' value='$id' name='id'/>
					<button type='submit' class='btn btn-danger'> <span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button>
				</form>
		 	</td>
		 </tr>";
}
?>

<div  style='text-align:center; margin:20px;' >
	<a href='Rprof.html'><input  type='button' class='btn btn-default' value='Regresar' /></a>
</div>
</body>
</html>