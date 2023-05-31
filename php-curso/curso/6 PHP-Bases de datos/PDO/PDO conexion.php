<?php
    $id = $_GET['id'];
    try{
        //probar codigo
        $conexion = new PDO('mysql:host=localhost;dbname=curso','root','');
        //echo 'Coneccion: OK';
        //$conexion->query('INSERT INTO usuario Values(null,"brandon");');
      //  $resultados = $conexion->query("SELECT * FROM usuario WHERE id = 3");
     

        //prepared Statements
        /*consultas preparadas*/
        $statement = $conexion->prepare('SELECT * FROM usuario WHERE id = :id'); //preparar los datos los valores a insertar usan un placeholder en este caso de la manera de :id
        $statement->execute(array(':id' =>$id));//ejecutamos y cambiamos los placeholder por las variables 
        $resultados = $statement->fetch(); //fetch llama los resultados pero solo uno se puede usar fechall para que traiga todo
        print_r($resultados); //imprimimos el resultado

    }catch(PDOException $e){
        //mostrar error
        echo "Error: " . $e->getMessage();
    }

?>