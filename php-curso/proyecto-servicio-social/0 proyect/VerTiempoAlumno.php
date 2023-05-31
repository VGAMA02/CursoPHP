<?php
//datos del servidor
$server =  "localhost";
$usuario = "id14923373_ivan";
$pass =    "Databasecontra90.";
$bd =      "id14923373_personas";
//datos a insertar
//conexion al servidor

$cone = mysqli_connect($server,$usuario,$pass,"$bd");

$codigo = $_GET['codigo']; 

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
else
{
    echo "nohaycitas"; 
}

echo json_encode($datos);
mysqli_close($cone);





//crear sentencia query
//$sql =   "DELETE FROM `DatosCitas` WHERE  `Mes`='$mes' AND `Dia`='$dia' AND `Hora`='$hora' AND `Codigo`='$codigo'";

//mysqli_query($cone,$sql);


?>