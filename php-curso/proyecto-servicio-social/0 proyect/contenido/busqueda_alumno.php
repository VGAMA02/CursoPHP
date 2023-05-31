<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
   
    $codigo    =  $_POST['codigo'];
    $tiempoI;
    $tiempoF;
    $tiempoT=0;

    function phptiempo(){
        $tiempoT = 1;
        return $tiempoT;
    }
    

    //variable de comprobacion de errores
    $errores = ''; 
    if(empty($codigo))
    {
        $errores .= '<li>Por Favor rellena todos los datos correctamente</li>';
    }
     else
     {  //hacer conexion con base de datos
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=id14923373_personas','id14923373_ivan','Databasecontra90.');
        }
         catch(PDOExection $e)
         {
            echo "Error: " . $e->getMessage();
         }
        //preparamos la busqueda en base de datos para comprobar si el usuario ya existe. 
        $statement = $conexion->prepare('SELECT * FROM Alumno WHERE codigo = :codigo LIMIT 1');   //preparamos la sentencia con :usuario para cambiar el valor despues, limitamos a 1 para seguridad
        $statement->execute(array(':codigo' => $codigo));                         //ejecutamos la sentencia y cambiamos ':usuario: por el valor que hay en $usuario
        $resultado = $statement->fetch();                                           //fetch nos devuelve la consulta con un arreglo si hay algo o con booleano false si no hay nada. 
        if($resultado == false)
        {
          $errores .='el usuario no existe';
        }
        else
        {
           // print_r($resultado);
           file_put_contents('alumno.txt',$codigo);
        }


      }//else de verificacion de codigo
      

}//a ver
if(isset($codigo)){echo $codigo;}




require 'views/busqueda_alumno_views.php';
?>
