<?php

error_reporting(0); //no mostrar ningun error en pantalla
header('Content-type: application/json; charset=utf-8');

$nombre  = $_POST['nombre']; 
$edad    = $_POST['edad']; 
$pais    = $_POST['pais']; 
$correo  = $_POST['correo'];

//deberia validar los nombres limpiando los valores
//busca en los formularios 

function validarDatos($nombre,$edad,$pais,$correo)
{
    if($nombre == '')
    {
        return false; 
    }else if($edad == '' || !is_int($edad))
     {
          return false; 
     }else if($pais == '')
      {
            return false; 
      }else if($correo == '')
      {
          return false; 
      }
      return true; 
}

if(validarDatos($nombre,$edad,$pais,$correo))
{
    $conexion = new mysqli('localhost', 'root','','curso_php_ajax');
    $conexion->set_charset('utf8');

    if($conexion->connect_errno)
    {
        $respuesta = ['error' => true];
    }
    else
    {   //INSERT INTO `usuarios` (`ID`, `nombre`, `edad`, `pais`, `correo`) VALUES (NULL, 'porfavor', '', 'joven', 'nosea@culo.com');
        $statement = $conexion->prepare("INSERT INTO `usuarios` (`ID`, `nombre`, `edad`, `pais`, `correo`) VALUES (NULL, ?, ?, ?, ?);");
        $statement->bind_param("isiss", $nombre, $edad, $pais, $correo); //bin param define los parametros que se van a insertar s = string i = int f = float etc
        $statement->execute();
        if($conexion->affected_rows <= 0)
        {
            $respuesta = ['error' => true]; //señalar que hubo un error.
            
        }
    }
}
else
{
    $respuesta = ['error' => true];
}


echo json_encode($respuesta); //si no hay error respuesta es nulo