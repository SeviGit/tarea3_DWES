<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1-Inicio</title>
    <link href="../recursos/css/bootstrap.min.css" rel="stylesheet">
    <link href="../recursos/estilos.css" rel="stylesheet">
</head>

<?php
$dominio = 'Area restringida';

// usuario => contraseña
$usuarios = array('pablo' => '1234', 'user' => '1234');


if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$dominio.
           '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($dominio).'"');

    die('Texto a enviar si el usuario pulsa el botón Cancelar');
}


// Analizar la variable PHP_AUTH_DIGEST
if (!($datos = analizar_http_digest($_SERVER['PHP_AUTH_DIGEST'])) ||
    !isset($usuarios[$datos['username']]))
    die('Credenciales incorrectas');


// Generar una respuesta válida
$A1 = md5($datos['username'] . ':' . $dominio . ':' . $usuarios[$datos['username']]);
$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$datos['uri']);
$respuesta_válida = md5($A1.':'.$datos['nonce'].':'.$datos['nc'].':'.$datos['cnonce'].':'.$datos['qop'].':'.$A2);

if ($datos['response'] != $respuesta_válida)
    die('Credenciales incorrectas');

// Todo bien, usuario y contraseña válidos
//echo 'Se ha identificado como: ' . $datos['username'];


// Función para analizar la cabecera de autenticación HTTP
function analizar_http_digest($txt)
{
    // Protección contra datos ausentes
    $partes_necesarias = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $datos = array();
    $claves = implode('|', array_keys($partes_necesarias));

    preg_match_all('@(' . $claves . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $coincidencias, PREG_SET_ORDER);

    foreach ($coincidencias as $c) {
        $datos[$c[1]] = $c[3] ? $c[3] : $c[4];
        unset($partes_necesarias[$c[1]]);
    }

    return $partes_necesarias ? false : $datos;
}
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
                    <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" role="button" aria-expanded="false">Ejercicio 1</a>
                        <ul class="dropdown-menu"> 
                            <li><a class="dropdown-item" href="1a.php"> a. Autenticación HTTP básica</a></li>
                            <li><a class="dropdown-item" href=""> b. Autenticación HTTP hash/digest</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ejercicio2/ejercicio2.html">Ejercicio 2</a>
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
                <h3 class="text-center">Autenticación HTTP hash/digest</h3>
                <hr>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-10 ">
                <p class="fw-bold">¿Qué es una función hash? </p>
                <p class="ms-2">Es una función que convierte uno o varios elementos de entrada a una función en otro elemento.
                Es decir que los datos que le pasemos a la función(normalmente string)nos lo devolverá en valor hash(encriptados).
                No hay una función de retorno o que le demos el valor hash y nos devuelva el valor real.
                </p>
                <p class="fw-bold">¿Por qué es tan importante la seguridad informática? </p>
                <p class="ms-2">La detección de vulnerabilidades y la seguridad informática es fundamental para mantener siempre segura e intacta la información privada de las empresas o personales, por ello, contar con este tipo de herramientas constituye que sea una necesidad y se haga imprescindible.
                <p class="fw-bold">¿Cuál sería la autenticación HTTP más segura de todas finalmente?</p>
                <p class="ms-2">Sería la autenticación HTTP hash/digest ya que se crea un hash con los datos de información que son enviados al servidor , de esta manera los datos están encriptados y más protegidos.
                </p>
                
            </div>
        </div>
    </section>
    <script src="../recursos/js/bootstrap.bundle.min.js"></script>
</body>
</html>