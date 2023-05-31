<?php
    $conexion = new mysqli('localhost','root','','mysqli_prueba');
    
    echo $conexion->connect_errno; //esta linea nos dara un 0 si es que la conexion es buena si hay un error dara un numero que representa un tipo de error

    if($conexion->connect_errno) //comprobar fallos
    {
        die('lo siento hubo en error en el servidor');
    }
    else
    {
        
    }
?>