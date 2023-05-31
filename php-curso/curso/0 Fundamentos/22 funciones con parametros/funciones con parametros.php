<?php

function saludo($nombre){
	echo 'Hola muy buenas ' . $nombre . '<br />'; 
}

saludo('Kevin');

function sumar ($num1,$num2)
{
	$resultado = $num1 + $num2;
	echo $resultado . '<br />';
}

sumar(5,15);

?>