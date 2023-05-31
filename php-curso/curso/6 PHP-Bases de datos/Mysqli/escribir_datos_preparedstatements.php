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
      $statement = $conexion->prepare("INSERT INTO usuarios VALUES(?,?,?)"); //los signos de interrogacion indican un placheholder que se rellena despues. 
      //se le prepara a la base de datos para que inserte un usario que solamente va a tener 3 valores, a su vez solo queda insertar, no leer ni nada mas. 
      //remplazar los placeholder ? con los valores que queremos usar
      //s = string
      //i = integer
      //d = double
      $statement->bind_param('ssi',$id,$nombre,$edad);
      $id = NULL; 
      //Comprobacion por si no se pasa nada
      if(isset($_GET['nombre']) && isset($_GET['edad']))
      {
          $nombre = $_GET['nombre'];
          $edad = $_GET['edad'];
      }

      $statement->execute();

          echo 'Filas Agregadas: ' . $conexion->affected_rows;


  }


?>