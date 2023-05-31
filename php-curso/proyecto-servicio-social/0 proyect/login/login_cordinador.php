<?php
session_start();
$errores = ''; //creacion de variable que indicara los errores cometidos por el usuario
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $usuario  = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING ); //evitar inyeccion de codigo eliminando etiquetas y pasando todas las letras a minusculas
    $password = $_POST['password'];
    $carrera  = $_POST['carrera'];
    //$password = hash('sha512', $password); //hash sirve para encriptar recibe el parametro del metodo y la variable a encriptar.

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=id14923373_personas','id14923373_ivan','Databasecontra90.');
    } catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    } //try-catch para conectarse a base de datos
    
    //verificar que haya usuarios en la base de datos
    $statement = $conexion->prepare('SELECT * FROM Cordinador WHERE nombre = :usuario AND password = :pass AND carrera = :carrera');
    $statement->execute(array(':usuario' => $usuario, 'pass' => $password, 'carrera' => $carrera));
    $resultado = $statement->fetch(); //fetch devuelve el resultado
    // var_dump($resultado); //si devuelve false a consulta fallo
    if($resultado!=false) //crear la sesion del usuario 
    { //si entra crear la sesion y enviarlo a index para que este elija si mandarlo al contenido o a registro
        $_SESSION['usuario'] = $usuario; 
        //echo "datos correctos";
        header('location: ../contenido/contenido_cordinador.php');
    }
    else
    {
        $errores .= '<li>Datos incorrectos</li>';
    }
    

}//if que verifica si informacion fue enviada por el metodo post.

require 'views/login_cordinador_view.php';
?>