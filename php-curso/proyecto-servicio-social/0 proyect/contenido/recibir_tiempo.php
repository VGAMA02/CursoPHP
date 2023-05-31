<?php
// comprobar si tenemos los parametros w1 y w2 en la URL
    
    $timI = $_GET['timI'];
    $timF = $_GET['timF'];
    $QFECHAHORAS='';
    $QFECHAMIN='';
    $QFECHASEC='';
    $codigo = file('alumno.txt'); //esta funcion guarda un array donde cada linea del documento es un elemento.
    $codigo = $codigo[0];
    $A=0; $B=0; $C=0; $D=0; $E=0;
    echo "<br>";
    echo $codigo;
    echo "<br>";

    //DEPURACION DE CADENA PARA QUITAR PARENTESIS >>>
    // 0123456789
    // (19:54:35)
    //HORA INICIAL
    for($i=0;$i<10;$i++)
    {
        if($i<=2 && $i!=0)   {$QFECHAHORAS[$A]=$timI[$i];$A++;}
        if($i>3 && $i<6)     {$QFECHAMIN[$B]  =$timI[$i];$B++;}
        if($i>6 && $i<9)     {$QFECHASEC[$C]  =$timI[$i];$C++;}
    }
     $FECHAHORAS =  intval($QFECHAHORAS);
     $FECHAMIN   =  intval($QFECHAMIN);
     $FECHASEC   =  intval($QFECHASEC);
     $D+=($FECHASEC);
     $D+=($FECHAMIN*60);
     $D+=($FECHAHORAS*3600);

     echo "<br>";
     echo $D;
     echo "<br>";
    //HORA FINAL
    $A=0; $B=0; $C=0; $E=0;
     for($i=0;$i<10;$i++)
    {
        if($i<=2 && $i!=0)   {$QFECHAHORAS[$A]=$timF[$i];$A++;}
        if($i>3 && $i<6)     {$QFECHAMIN[$B]  =$timF[$i];$B++;}
        if($i>6 && $i<9)     {$QFECHASEC[$C]  =$timF[$i];$C++;}
    }
     $FECHAHORAS =  intval($QFECHAHORAS);
     $FECHAMIN   =  intval($QFECHAMIN);
     $FECHASEC   =  intval($QFECHASEC);
    
     $E+=($FECHASEC);
     $E+=($FECHAMIN*60);
     $E+=($FECHAHORAS*3600);

     echo "<br>";
     echo $E;
     echo "<br>";

     //Restamos horas

     $Htrabajadas = ($E - $D);

     echo "<br>";
     echo $Htrabajadas;
     echo "<br>";
  
    
    //<<<DEPURACION DE CADENA PARA QUITAR PARENTESIS
   


    $server =  "localhost";
    $usuario = "id14923373_ivan";
    $pass =    "Databasecontra90.";
    $bd =      "id14923373_personas";
    //datos a insertar
    //conexion al servidor

    $cone = mysqli_connect($server,$usuario,$pass,"$bd");

    echo "<br>";

    $sql = "SELECT * FROM `Alumno` WHERE `Codigo` = '$codigo'"; 
    $resultado = mysqli_query($cone,$sql);
    $datos = array();
    if(mysqli_num_rows($resultado) > 0)
    {
    while($row = mysqli_fetch_assoc($resultado))
    {
        //echo "Cita ".$row['Mes']. " ". $row['Dia']. " ". $row['Hora']. "<br>";
        $datos[] = $row;
    }
    }
    mysqli_close($cone);
    print_r($datos[0]['horas']);
    echo "<br>";
    $strHoras = $datos[0]['horas'];

    echo "<br> Horas: ";
    echo $strHoras;
    echo "<br>";
    //HORA FINAL
    //00:00:00
    $A=0; $B=0; $C=0; $D=0;
     for($i=0;$i<8;$i++)
    {
        if($i<2)             {$QFECHAHORAS[$A]=$strHoras[$i];$A++;}
        if($i>2 && $i<5)     {$QFECHAMIN[$B]  =$strHoras[$i];$B++;}
        if($i>5 && $i<8)     {$QFECHASEC[$C]  =$strHoras[$i];$C++;}
    }
     $FECHAHORAS =  intval($QFECHAHORAS);
     $FECHAMIN   =  intval($QFECHAMIN);
     $FECHASEC   =  intval($QFECHASEC);

     $D+=($FECHASEC);
     $D+=($FECHAMIN*60);
     $D+=($FECHAHORAS*3600);

     echo "<br>";
     echo $D;
     echo "<br>";

     $RES = ($D - $Htrabajadas); //hora final menos hora inicial

     echo "<br>";
     echo $RES;
     echo "<br>";
    $sec=0; $Vmin=0; $Horas=0;
    $sec = $RES%60;
    $RES -= $sec;
    $RES /= 60;
    $Vmin = $RES%60;
    $RES -= $Vmin;
    $RES /= 60;
    $Horas = $RES;

    echo "Horas: ".$Horas." minutos: ".$Vmin." Segundos: ".$sec;
    $nuevaHora = '';
    $nuevaHora = $Horas.":".$Vmin.":".$sec;

    echo "<br> Nueva hora <br>";
    echo $nuevaHora;

    $conexion = new PDO('mysql:host=localhost;dbname=id14923373_personas','id14923373_ivan','Databasecontra90.');
    $statement2 = $conexion->prepare('UPDATE `Alumno` SET `Horas`= :horas WHERE `Codigo` = :codigo');   //preparamos la sentencia con :usuario para cambiar el valor despues, limitamos a 1 para seguridad
    $statement2->execute(array(':horas' => $nuevaHora, ':codigo' => $codigo));                         //ejecutamos la sentencia y cambiamos ':usuario: por el valor que hay en $usuario




   





?>