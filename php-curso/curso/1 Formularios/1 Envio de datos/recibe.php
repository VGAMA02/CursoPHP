<?php
//metodo post que se declara en un formulario
//print_r($_POST);
/*if(!$_POST){
    header('location: http://localhost:8080/curso/1%20Formularios/1%20Envio%20de%20datos/envio%20de%20datos.php');
} 
   $nombre =$_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $termino = $_POST['terminos'];
    
    echo "Hola " . $nombre . " veo que eres " . $sexo . " y naciste en el año " . $year; 
*/


//////////////////metodo que envia la data por medio del url es bastante inseguro pero util
if(!$_GET){
    header('location: http://localhost:8080/curso/1%20Formularios/1%20Envio%20de%20datos/envio%20de%20datos.php');
} 
//print_r($_GET);
$nombre = $_GET['nombre'];
echo $nombre; 
echo '<br>';

//echo htmlspecialchars($nombre);


    $nombre =   $_GET['nombre'];
    $sexo = $_GET['sexo'];
    $year = $_GET['year'];
    $termino = $_GET['terminos'];
    echo "Hola " . $nombre . " veo que eres " . $sexo . " y naciste en el año " . $year; 
?>