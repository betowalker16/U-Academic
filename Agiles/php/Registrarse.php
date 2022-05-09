<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro SAS</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="body-login">

    <div class="login-box">
        <h1>Registrar nueva cuenta </h1>
        <form action="registrarse2.php" method="POST">
            
            <label for="username">Nombre</label>
            <input type="text" placeholder="Ingrese su nombre" name="usuario">

            <label for="email">Correo</label>
            <input type="text" placeholder="Ingrese su correo electronico" name="email">

            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña">

            <input type="submit" value="Registrarse">

            <a href="login.php">¿Ya tienes una cuenta?</a>
        </form>
    </div>

</body>
</html>