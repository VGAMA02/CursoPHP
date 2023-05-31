<?php
$amigo = array('telefono' => 36805851,'edad' =>20,'pais'=>'mexico'); 
extract($amigo); //trae los valores de un array y los trae como variables
echo $telefono . '<br />'; 
$semana = array('L','M','M','J','V','S','D');

$ultimo_dia = array_pop($semana); //elimina el ultimo elemento y puede o no retornarlo
foreach($semana as $dia)
{
    echo $dia . '<br />';
}
echo 'El ultimo dia es: ' . $ultimo_dia . '<br />';
echo join(' - ', $semana); //separa los valores por un caracter
echo '<br />'; 
echo count($semana) . '<br />'; //devuelve el numero de elementos
sort($semana); //ordena
echo join(' <br /> ',$semana); 
$semana_r = array_reverse($semana); //invierte valores
echo join(' <br /> ',$semana_r);


?>