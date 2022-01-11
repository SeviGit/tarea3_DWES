<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1-Inicio</title>
    <link href="recursos/css/bootstrap.min.css" rel="stylesheet">
    <link href="recursos/estilos.css" rel="stylesheet">
</head>

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
                <a href="inicio.html"><img src="recursos/imagenes/dark.png" width="90px"></a>
            </div>
            <div class="col-5 collapse navbar-collapse show " id="navbarDark">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0 text-secondary">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Ejercicio 1</a>
                        <ul class="dropdown-menu"> 
                            <li><a class="dropdown-item" href="ej_1/1a.php"> a. Autenticación HTTP básica</a></li>
                            <li><a class="dropdown-item" href="ej_1/1b.php"> b. Autenticación HTTP hash/digest</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="ejercicio2/ejercicio2.html">Ejercicio 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="ejercicio2/ejercicio2.html">Ejercicio 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="ejercicio2/ejercicio2.html">Ejercicio 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ejercicio5/ejercicio5.html">Ejercicio 5</a>
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
                <h3 class="text-center">Inicio</h3>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 p-2  border border-primary shadow rounded-3 mb-4 p-3 bg-light">
                <h4>Ejercicio 1</h4>
                <p>
                    <p>Realiza los siguientes ejercicios:</p>
                    <ol type="a">
                        <li class="mb-2">Crea una página de ejemplo con autenticación HTTP básica. A continuación, en dicha página, responde: ¿por qué no es seguro esta autenticación? ¿Cómo podría mejorarse? Para responder, puedes ayudarte con este material.</li>

                        <a href="ej_1/1a.php"><button class="btn btn-outline-primary mb-2" value="Ir a ejercicio">Autenticación HTTP básica</button></a>

                        <li class="mb-2"> Crea una página de ejemplo con autenticación HTTP hash/digest con el algoritmo Blowfish/Bcrypt usando crypt(). A continuación, en dicha página, responde: ¿qué es una función hash? ¿Por qué es tan importante en seguridad informática? ¿Cuál sería la autenticación HTTP más segura de todas finalmente? Para responder, puedes ayudarte con este material.</li>

                        <a href="ej_1/1b.php"><button class="btn btn-outline-primary mb-2" value="Ir a ejercicio">Autenticación HTTP hash/digest</button></a>
                        
                    </ol>
                </p>
               
            </div>          
        </div>
        <div class="row justify-content-center">
            <div class="col-10 p-2 border border-primary shadow rounded-3 mb-4 p-3 bg-light">
                <h4>Ejercicio 2</h4>
                <p>
                Crea una cesta de la compra de frutas y verduras y almacénala durante una hora usando cookies. El usuario elegirá una serie de frutas y verduras y mantendrá dichos alimentos escogidos durante una hora aunque cierre el navegador. Mediante setcookie(), sin autenticación ni sesiones, almacena dicha cesta y crea también opciones para modificar, eliminar y comprobar si existe dicha cookie. Puedes ayudarte de los materiales de Diego Lázaro y de W3Schools.
                </p>
                <a href="ejercicio1/ejercicio1.html"><button class="btn btn-outline-primary mb-2" value="Ir a ejercicio">Ir al ejercicio</button></a>
            </div>           
        </div>
        <div class="row justify-content-center">
            <div class="col-10 p-2 border border-primary shadow rounded-3 mb-4 p-3 bg-light">
                <h4>Ejercicio 3</h4>
                <p>
                ¿Qué es Composer y qué no es según ellos? ¿Con qué archivo configuramos nuestro proyecto en Composer? ¿Qué es JSON? Completa el tutorial de JSON. ¿Cómo instalamos nuestras dependencias en Composer y qué archivo se genera? ¿Cómo actualizamos nuestras dependencias a sus últimas versiones? ¿Qué es Packagist y cómo se usa? ¿Cómo cargamos (específicamente autoloading) nuestras dependencias en PHP?
                </p>
                <a href="ejercicio1/ejercicio1.html"><button class="btn btn-outline-primary mb-2" value="Ir a ejercicio">Ir al ejercicio</button></a>
            </div>           
        </div>
        <div class="row justify-content-center">
            <div class="col-10 p-2 border border-primary shadow rounded-3 mb-4 p-3 bg-light">
                <h4>Ejercicio 4</h4>
                <p>
                Crea un balance sencillo de ingresos y gastos. Para obtener el balance, habrá que registrarse como usuario en una base de datos y después iniciar sesión; las contraseñas estarán almacenadas en hash mediante el algoritmo Bcrypt (usa password_hash y password_verify). Una vez iniciada la sesión correctamente, el usuario introducirá, mediante formularios, una serie de ingresos y gastos, pulsará en Generar y, a continuación, verá un informe similar a éste en PDF. Usa la librería MPDF usando Composer para instalarla y cargarla.
                </p>
                <a href="ejercicio1/ejercicio1.html"><button class="btn btn-outline-primary mb-2" value="Ir a ejercicio">Ir al ejercicio</button></a>
            </div>           
        </div>
        <div class="row justify-content-center">
            <div class="col-10 p-2 border border-primary shadow rounded-3 mb-4 p-3 bg-light">
                <h4>Ejercicio 5</h4>
                <p>
                Realiza la aplicación web (sistema de test online, reservas online de coches o pizzería online) que no realizaste en la tarea anterior pero esta vez usando (además de bases de datos y sesiones) cookies para guardar la solicitud o pedido y funciones hash para almacenar las contraseñas de los usuarios. Si te ves capaz, genera el informe además en PDF usando MPDF mediante Composer.
                </p>
                <a href="ejercicio1/ejercicio1.html"><button class="btn btn-outline-primary mb-2" value="Ir a ejercicio">Ir al ejercicio</button></a>
            </div>           
        </div>
        
     
    </section>
    
    <script src="recursos/js/bootstrap.bundle.min.js"></script>
</body>
</html>