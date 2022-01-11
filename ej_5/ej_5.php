<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1-Ejercicio 5</title>
    <link href="../recursos/css/bootstrap.min.css" rel="stylesheet">
    <link href="../recursos/estilos.css" rel="stylesheet">
</head>

<?php

?>

<body>
        <!--------CABECERA--------->

    <header class="row justify-content-center fixed-top">
        <nav class=" navbar navbar-expand-md navbar-dark bg-dark ">
            <!--Botón toggler-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark"
                aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Enlaces a ejercicios-->
            <div class="col-1 d-none d-md-block text-center">
                <a href="../index.php"><img src="../recursos/imagenes/dark.png" width="90px"></a>
            </div>
            <div class="col-5 collapse navbar-collapse show " id="navbarDark">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0 text-secondary">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Ejercicio 1</a>
                        <ul class="dropdown-menu"> 
                            <li><a class="dropdown-item" href="../ej_1/1a.php"> a. Autenticación HTTP básica</a></li>
                            <li><a class="dropdown-item" href="../ej_1/1b.php"> b. Autenticación HTTP hash/digest</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ej_2/ej_2.php">Ejercicio 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../ej_3/ej_3.php">Ejercicio 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../ej_4/ej_4.php">Ejercicio 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Ejercicio 5</a>
                    </li>
                </ul>
            </div>
            <!--Nombre y email-->
            <div class="col-2 d-none d-md-block text-secondary ">
                <p >Pablo Pavón Ferrero</p>
                <p >pablo.pferrero@gmail.com</p>
            </div>
        </nav>
    </header>
    <!---- CONTENIDO ---->

    <div class="referencia"></div>
    <section class="container">
        <div class="row ">
            <div class="col">
                <h3 class="text-center">Aplicación web</h3>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-3 text-center">
                <h4>Sistema de test online</h4>
                <a href="test/index5.php"><img src="../recursos/imagenes/test.png" alt="test"></a>
            </div>
        </div>
    </section>
</body>
</html>