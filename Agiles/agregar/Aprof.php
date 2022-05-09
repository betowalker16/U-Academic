<!doctype html>
<html>
	<head>
		<meta charset='utf-8'/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<style>
	body {
				background-color: #750D37;
				color: white;
			}
</style>
	<body>

	<div style="width:40%;margin:0px auto;">

		<h1 style="text-align:center;">AGREGAR PROFESOR</h1>
	    
        <?php
            
            if(isset($_GET["error"]))
			{
				switch($_GET["error"])
				{
					case 0: echo "<div class='alert alert-success alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> Registro agregado correctamente.
								  </div>";
							break;
					case 1: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> El tipo de archivo de imagen no es válido. No se pudo almacenar el registro.
								  </div>";
							break;
					case 2: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> Ocurrió un error al agregar el registro.
								  </div>";
							break;
					case 3: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> El tamaño de la imagen excede los 4Mb.
								  </div>";
							break;
					case 4: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> La resolución de la imagen no debe exceder 800x800 pixeles.
								  </div>";		
								  break;
					case 5: echo "<div class='alert alert-danger alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> No se recibió la imagen, posiblemente el archivo sea muy grande.
								  </div>";				  
				}
				
			}
		?>
		
		<form action="php/registrar.php" method="POST" enctype="multipart/form-data"> 
				
				<div class='input-group' style="margin:15px;">
				 <span class='input-group-addon'><i class='glyphicon glyphicon-edit'></i></span>
				 <input type='text' maxlength='100' class='form-control' name='nombre' placeholder='Nombre del usuario' required/>
				</div>

				<div class='input-group' style="margin:15px;">
				 <span class='input-group-addon'><i class='glyphicon glyphicon-edit'></i></span>
				 <input type='text' maxlength='100' class='form-control' name='correo' placeholder='Correo del usuario' required/>
				</div>

				<div class='input-group' style="margin:15px;">
				 <span class='input-group-addon'><i class='glyphicon glyphicon-edit'></i></span>
				 <input type='text' maxlength='100' class='form-control' name='contr' placeholder='Contraseña del usuario' required/>
				</div>
				
				<div  style='text-align:center; margin:20px;' >
					<input  type='submit' class='btn btn-success' value='Guardar' />
				</div>
				
		</form>

		<div  style='text-align:center; margin:20px;' >
			<a href='sadmin.html'><input  type='button' class='btn btn-default' value='Regresar' /></a>
		</div>
	</div>	
	</body>
</html>	