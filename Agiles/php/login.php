<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="body-login">
<?php
            
            if(isset($_GET["error"]))
			{
				switch($_GET["error"])
				{
					case 0: echo "<div class='alert alert-success alert-dismissible'>
									<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									<strong>Success!</strong> Cuenta registrada correctamente.
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

    <div class="login-box">
        <h1>Inicio de Sesion</h1>
        <form action="validacion.php" method="POST">

            <label for="username">Correo</label>
            <input type="text" placeholder="Ingrese su correo electronico" name="usuario">

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña">

            <input type="submit" value="login">

            <a href="Registrarse.php">¿Todavia no tienes una cuenta?</a>
        </form>
    </div>

</body>
</html>