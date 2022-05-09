<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcademicAlert</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="body__restaurantes">

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>

        <a href="#" class="enlace">
            <img src="../image/academic.JPG" alt="" class="logo">
        </a>

        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="../agregar/Sprof.html">Agregar</a></li>
            <li><a href="../eliminar/Sprof.html">Eliminar</a></li>
            <li><a href="../editar/Sprof.html">Modificar</a></li>
            <li><a href="../reportes/Rprof.html">Reportes</a></li>
            <li><a class="active" href="">PERFIL</a></li>
            <li><a href="../php/login.php">Salir</a></li>
        </ul>
    </nav>
    
    <div class="contenedor contenido-principal">

        <main class="local">
        <?php
        require_once "1_conexion.php";
        $cmd="select id,nombre,correo from profesor;";
        $tab=$conexion->query($cmd);
        $columnas=0;
        if($tab->num_rows==0) 
        return;

        $reg=$tab->fetch_assoc();

        $id=$reg["id"];
        $nom=$reg["nombre"];
        $correo=$reg["correo"];

        echo" <h3> $nom </h3>
        
        <article class='info_local'>
                <div class='contenido__local'>
                    <p> <b>ID: </b>
                        <b> $id </b><br>
                    </p>
                </div>
                <div class='contenido__local'>
                    <p> <b>Correo:</b> <br>
                        <b> $correo </b><br>
                    </p>
                </div>
            </article>
            <div style='background-color: white; color: black; border-radius: 1rem; height: 2rem;'>
                    <a href='modificarPerfil.php' class='box'>
                        <h3>
                            Modificar datos
                        </h3>
                    </a>
            </div>
        ";

        ?>
            
        </main>

        <aside class="productos">
            <h2 style="margin-bottom: 2rem; color:white;">ALUMNOS</h2>   

            <div class="grid_prod">
                <div class="producto" data-name="p-1">
                        <div class="producto__info">
                            <p class="producto__nombre no-margin">Emmanuel Garrido</p>
                        </div>    
                </div>
                <div class="producto" data-name="p-2">
                        <div class="producto__info">
                            <p class="producto__nombre no-margin">Gilberto Fernandez</p>    
                        </div>    
                </div>
                
        </div>
        </aside>

    </div>
</body>
</html>