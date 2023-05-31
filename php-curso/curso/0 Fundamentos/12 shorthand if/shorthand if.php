<?php
// isset($variable); esta funcion muestra si la variable ha sido asignada o no
$edad = 18; 
//$edad = (condicion) ? se cumple : no se cumple;
$edad = (isset($edad)) ? $edad : "el usuario no establecio su edad";

echo 'Edad: '. $edad; 


?>