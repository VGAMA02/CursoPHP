<?php
  $conexion = new mysqli('localhost','root','','mysqli_prueba');
    
  //echo $conexion->connect_errno; //esta linea nos dara un 0 si es que la conexion es buena si hay un error dara un numero que representa un tipo de error

  if($conexion->connect_errno) //comprobar fallos
  {
      die('lo siento hubo en error en el servidor');
  }
  else
  {
      //hacer consulta
      $sql = "INSERT INTO usuarios VALUES(NULL,'Gregorio',24)";
      $resultado = $conexion->query($sql);
      if($conexion->affected_rows >=1)
      {
          echo 'Filas Agregadas: ' . $conexion->affected_rows;
      }

  }


?>