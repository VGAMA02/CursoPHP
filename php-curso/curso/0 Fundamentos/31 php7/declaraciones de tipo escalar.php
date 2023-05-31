<?php
//declare(strict_types=1);  
/* declare(strict_types=1) le dice a php que debe de ser estricto
con las variables que recibe de modo que si le pasamos una cadena 
con que representa un numero a una funcion que requiere un numero
php no hara lo posible por encontrar el valor si no que retornara 
un error */


//int $variable //esto es una declaracion de tipo escalar
function cuadrado (int $numero) //aqui le indicamos a huevo que debe ser intero
{
    return $numero * $numero;
}
$numero = '2';
echo 'El cuadrado de ' . $numero .' es: ' . cuadrado($numero);

?>