<!doctype html>
<html>
	<head>
		
		<meta charset='utf-8'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<style>
				
			body{
				background-color: #750D37;
				color: white;
			}
			.contenedor{
				width:30%;
				margin:0px auto;
			}
			h1{
				text-align:center;
			}
			.caja{
				margin-top:10px;
				text-align:center;
			}
			.errorMessage
            {
                text-align:right;
            }

			.errorMessage>em
            {
				color:#a94442;
			}
			
		</style>
	</head>

	<body>

		<?php
			if(isSet($_GET["error"]))
			{
				switch($_GET["error"])
				{
					case 2:
							echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Error:</strong> Ocurrió un error al tratar de actualizar el registro. Intente de nuevo.
									</div>";
							break;
				}
				
			}
		?>

		<?php
			require_once "../php/1_conexion.php";
			$id=$_POST["id"];
			$cmd="select id, nombre, correo, contraseña from profesor where $id = id";
			$tab=$conexion->query($cmd);
			$reg=$tab->fetch_assoc();
			$nombre=$reg["nombre"];
			$correo=$reg["correo"];
			$contraseña=$reg["contraseña"];
		?>

		<div class="contenedor">

			<h1>MODIFICACION DE PROFESORES</h1>

			<form action="../php/actualizarprof.php" method="POST" id="editar" name="editar">

				<div class="form-group">
					<div class="input-group caja">
						<span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
						<input type="text" class="form-control" name="id" placeholder="id" value="<?php echo $id;?>" readonly/>
					</div>
					<div class="errorMessage"></div>
				</div>	
				<div class="form-group">
					<div class="input-group caja">
						<span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
						<input type="text" class="form-control" name="nombre" placeholder="nombre" value="<?php echo $nombre;?>" />
					</div>
					<div class="errorMessage"></div>
				</div>
				<div class="form-group">
					<div class="input-group caja">
						<span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
						<input type="text" class="form-control" name="correo" placeholder="correo" value="<?php echo $correo;?>" />
					</div>
					<div class="errorMessage"></div>
				</div>	

				<div class="form-group">
					<div class="input-group caja">
						<span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
						<input type="text" class="form-control" name="contraseña" placeholder="contraseña" value="<?php echo $contraseña;?>" required/>
					</div>
					<div class="errorMessage"></div>
				</div>	

				<div class="caja">
                	<a href="listaedit.php"><button type="button" class="btn btn-primary"  id="btnCancelar">Cancelar</button></a><br/><br/>
					<button id="guardar" type="submit" class="btn btn-primary">Guardar Cambios</button>
				</div>

			</form>
            
		</div>

	</body>
</html>