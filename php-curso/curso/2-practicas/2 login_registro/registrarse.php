<?php
session_start();

if(isset($_SESSION['usuario']))  //si ya existe una sesion mandar el usuario a index para que lo mande a contenido
{
    header('Location: index.php'); 
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $usuario =    filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING); 
    $password =   $_POST['password'];
    $password2 =  $_POST['password2'];

    //variable de comprobacion de errores
    $errores = ''; 

    if(empty($usuario) or empty($password) or empty($password2))
    {
        $errores .= '<li>Por Favor rellena todos los datos correctamente</li>';
    }
     else
     {  //hacer conexion con base de datos
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=curso_login','root','');
        }
         catch(PDOExection $e)
         {
            echo "Error: " . $e->getMessage();
         }
        //preparamos la busqueda en base de datos para comprobar si el usuario ya existe. 
        $statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre = :usuario LIMIT 1');   //preparamos la sentencia con :usuario para canbiar el valor despues
        $statement->execute(array(':usuario' => $usuario));                         //ejecutamos la sentencia y cambiamos ':usuario: por el valor que hay en $usuario
        $resultado = $statement->fetch();                                           //fetch nos devuelve la consulta con un arreglo si hay algo o con booleano false si no hay nada. 
        if($resultado!=false)
        {
          $errores .='<li>El nombre de usuario ya existe</li>';
        }
        
        //verificar y proteger contraseña

        $password  = hash('sha512', $password); //encriptar informacion
        $password2 = hash('sha512', $password2);
        
        //echo $password . " <br /> " . $password2;

        if($password!=$password2)
        {
            $errores .='<li>Las contraseñas no son iguales</li>';
        }

       
        

      }
       //fin de condicional, verificar errores para subir a base de datos
       if($errores == '')
       {
           $statement = $conexion->prepare('INSERT INTO usuario VALUES(null,:usuario,:pass)');
           $statement->execute(array(':usuario' => $usuario, ':pass' => $password));
           header('Location: login.php');
       }
      
}



require 'views/registrarse_view.php';
?>