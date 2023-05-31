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
      $sql = 'SELECT * FROM usuarios';
      $resultado = $conexion->query($sql);
      //comprobar resultados
      echo $resultado->num_rows; //devuelve la cantidad de filas que se mandaron
      if($resultado->num_rows)
      {
        //var_dump($resultado->fetch_assoc()); //esta linea transforma en arreglo pero tan solo un elemento, de uno por uno conforme se ejecute
        //echo $resultado->fetch_assoc()['nombre']; //traer solo un dato del arreglo

        while($fila = $resultado->fetch_assoc()) //cuado no encuentre devolvera null y rompera el ciclo
        {
            echo '<br />'.'---------------------------------------' .'<br />';
            echo 'id: ' . $fila['id'] . '<br />';
            echo 'nombre: ' . $fila['nombre'] . '<br />';
            echo 'edad: ' . $fila['edad'] . '<br />';
            echo '---------------------------------------' .'<br />';

        }
      }
       else
       {
         echo 'No hay datos'; 
       }



  }


?>