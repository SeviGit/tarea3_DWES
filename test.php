<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="recursos/css/bootstrap.min.css" rel="stylesheet">
    <link href="recursos/mis_estilos.css" rel="stylesheet">
</head>
<?php
session_start();

//Conectamos con nuestra base de datos
require_once('connect_db.php');



function crearTest(){
    //numero (id de pregunta) aleatorio
    
    $test=array();
   
    
    while(count($test) < 5){
        $id_pregunta= rand(1,10);
        $existe=false;

        if(count($test)==0){
            $test[]=$id_pregunta;
        }else{

        for($i=0 ; $i < count($test); $i++){

            if($id_pregunta == $test[$i]){
                $existe=true;  
            }
       }
        if($existe==false){
            $test[]=$id_pregunta;
        }else{
        }}
    }
return $test;
}
$mtest=crearTest();
$id_test=1;
$id_usuario=1;
$intento=1;


$sth = $dbh->prepare('INSERT INTO test (intento,id_usuario) VALUES(?,?)');
$sth->execute(array($intento,$id_usuario));

for($i = 0;$i<count($mtest);$i++){

    $sql = "SELECT pregunta,tipo FROM preguntas WHERE id = '$mtest[$i]'";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll();
        $num_filas = count($res);
        for ($e = 0; $e < $num_filas; $e++) {

                $pregunta[] = $res[$e]['pregunta'];
                $tipo[] = $res[$e]['tipo'];
        }

        $sth = $dbh->prepare('INSERT INTO test_preguntas (id_test,id_pregunta) VALUES(?,?)');
        $sth->execute(array($id_test,$mtest[$i]));




        $sql = "SELECT respuesta FROM respuestas WHERE id_pregunta = '$mtest[$i]'";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $res = $sth->fetchAll();
        $num_filas = count($res);
       
        for ($e = 0; $e < $num_filas; $e++) {

                $respuestas[$i][] = $res[$e]['respuesta'];
                
        }





}




           




// $id_test=1;
// $id_usuario=1;
// $intento=1;


// $sth = $dbh->prepare('INSERT INTO test (intento,id_usuario) VALUES(?,?)');
// $sth->execute(array($intento,$id_usuario));



// $cont=0;

// $existe=false;

// for($i = 0; $cont < 5; $i++) {
//     $id_pregunta= rand(1,10);
//     // Preparamos la sentencia SQL con los datos que necesitamos
//     $sql = "SELECT id_pregunta FROM test_preguntas WHERE id_test=1"; 
//     $sth = $dbh->prepare($sql);
//     $sth->execute();
//     $res = $sth->fetchAll();
//     $num_filas=count($res); 

//     //Comprobamos que coinciden los datos e iniciamos sesión
    
//     for ($i = 0; $i < $num_filas; $i++) {
//             if($res[$i]['id_pregunta']==$id_pregunta){
//                 $existe=true;  
                
//             }
//     }




//     if($existe==false){
            


//         $id=$id_pregunta;  

//         $sql = "SELECT pregunta,tipo FROM preguntas WHERE id = '$id'";
//         $sth = $dbh->prepare($sql);
//         $sth->execute();
//         $res = $sth->fetchAll();
//         $num_filas = count($res);
//         for ($i = 0; $i < $num_filas; $i++) {

//                 $pregunta[] = $res[$i]['pregunta'];
//                 $tipo[] = $res[$i]['tipo'];
//         }

        

//         $sql = "SELECT respuesta FROM respuestas WHERE id_pregunta = '$id'";
//         $sth = $dbh->prepare($sql);
//         $sth->execute();
//         $res = $sth->fetchAll();
//         $num_filas = count($res);
//         for ($i = 0; $i < $num_filas; $i++) {

//                 $respuesta[] = $res[$i]['respuesta'];
                
//         }


//         $sth = $dbh->prepare('INSERT INTO test_preguntas (id_test,id_pregunta) VALUES(?,?)');
//         $sth->execute(array($id_test,$id_pregunta));
//         $cont++;


//     }

// }


?>



<body>
<div class="container">
    <div class="row text-center">
        <div class="col">
        <h1>pruebas</h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
        <h4>test PHP</h4>
        <p>intento 1</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="">
                <?php for($i = 0; $i < count($pregunta); $i++) {?>
                    <div class="row mb-3">
                        <div class="col  bg-light">
                            
                            <p><?php echo $i+1 . '.' . $pregunta[$i]?></p>
                            <?php for($e = 0; $e < count($respuestas[$i]); $e++){
                                if($tipo[$i]=='radio'){?>
                                    <div class="ms-3">
                                        <p>Selecciona una:</p>
                                        <input type="radio" name="<?php echo $i?>" class="" id="<?php echo $i?>" value="<?php echo $e?>">
                                        <label for="<?php echo $i?>" class=""><?php  echo $respuestas[$i][$e]?></label>
                                    </div>
                                <?php }
                                if($tipo[$i]=='check'){?>
                                    <div class="form-check ms-3">
                                        <p>Selecciona una o varias:</p>
                                        <input type="checkbox" name="<?php echo $i?>" class="form-check-input" id="<?php echo $i?>" value="<?php echo $e?>">
                                        <label for="<?php echo $i?>" class="form-check-label"><?php echo $respuestas[$i][$e]?></label>
                                    </div>
                                

                            
                            <?php } } ?>

                        </div>
                    </div>
                <?php }?>
            </form>
        </div>
    </div>
    
</div>

</body>
</html>