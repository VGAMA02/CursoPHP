<?php
error_reporting(0); //si tenemos algun error entonces este json no se envia. 
header('Content-type: application/json; charset=utf-8');

$conexion = new mysqli('localhost', 'root','','curso_php_ajax');
$respuesta = [];
if($conexion->connect_errno) //si hay algun problema con la conexion entonces
{ //le avisamos al usuario
    $respuesta = [
        'error' => true
    ];
}
else
{
    $conexion->set_charset('utf8'); //definimos utf8 tanto para leer como para cargar charset son opciones para los caracteres especiales
    $statement = $conexion->prepare('SELECT * FROM usuarios');
    $statement->execute();
    $resultados = $statement->get_result();

    //var_dump($resultados->fetch_assoc()); //transformar los resultados en arreglos legibles
    $respuesta = [];
    while($fila = $resultados->fetch_assoc())  
    {
        $usuario = [
        'id'     => $fila['ID'],
        'nombre' => $fila['nombre'],
        'edad'   => $fila['edad'],
        'pais'   => $fila['pais'],
        'correo' => $fila['correo']
        ];
        array_push($respuesta, $usuario); //meter un arreglo dentro de otro
    }
}//else de comprobacion

echo json_encode($respuesta);

