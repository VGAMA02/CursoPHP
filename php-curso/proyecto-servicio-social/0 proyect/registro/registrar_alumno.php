<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $usuario   =  filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING); 
    $codigo    =  $_POST['codigo'];
    $carrera   =  $_POST['carrera'];
    $horas     =  $_POST['horas'];
    $minutos   =  $_POST['minutos'];
    $segundos  =  $_POST['segundos'];
    $tiempo    =  $horas.':'.$minutos.':'.$segundos;

    //variable de comprobacion de errores
    $errores = ''; 
    if(empty($usuario) or empty($codigo) or empty($horas) or empty($minutos) or empty($segundos) or empty($carrera))
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
        $statement = $conexion->prepare('SELECT * FROM Alumno WHERE nombre = :usuario AND carrera = :carrera LIMIT 1');   //preparamos la sentencia con :usuario para cambiar el valor despues, limitamos a 1 para seguridad
        $statement->execute(array(':usuario' => $usuario, ':carrera' => $carrera));                         //ejecutamos la sentencia y cambiamos ':usuario: por el valor que hay en $usuario
        $resultado = $statement->fetch();                                           //fetch nos devuelve la consulta con un arreglo si hay algo o con booleano false si no hay nada. 
        if($resultado!=false)
        {
          $errores .='<li>El nombre de usuario ya existe</li>';
        }
        
        //verificar y proteger contraseña

        //$password  = hash('sha512', $password); //encriptar informacion
        //$password2 = hash('sha512', $password2);
        
        //echo $password . " <br /> " . $password2;

      }
       //fin de condicional, verificar errores para subir a base de datos
       if($errores == '')
       {
           $statement = $conexion->prepare('INSERT INTO Alumno VALUES(:usuario,:codigo,:carrera,:tiempo)');
           $statement->execute(array(':usuario' => $usuario, ':codigo' => $codigo, ':carrera' => $carrera, ':tiempo' => $tiempo));
           header('Location: ../contenido/contenido_admin.php');
       }
      
}



require 'views/registrar_alumno_views.php';
?>