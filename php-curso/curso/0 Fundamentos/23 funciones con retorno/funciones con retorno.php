<?php

function saludo($nombre){
	return 'Hola muy buenas ' . $nombre . '<br />'; 
}

echo saludo('Kevin');

function sumar ($num1,$num2)
{
	$resultado = $num1 + $num2;
	return $resultado;
}

echo sumar(5,15);

?>