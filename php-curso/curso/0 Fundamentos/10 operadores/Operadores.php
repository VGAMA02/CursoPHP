<?php
/* opeadores Aritmeticos:
+ suma
- resta
* multiplicacion
/ division
% diferencia --> modulo
*/

/*operadores de asignacion:
=  igual
+= incremento
-= decremento
/= 
*/

/* operadores de Comparacion 
==  igualdad
=== identico, situaciones especiales como '10' es diferente tipo de dato, compara valor y tipo de dato
!= diferente de
<> mayor o menor
!=== 
< menor que
> mayor que
*/

/* operadores de comparacion 
and, &&
orm ||
xor |
*/

/* operadores de cadenas: 
. concatenar
.= 
*/

$t1 = 'sal';
$t1 .= ' y ';
$t2 = 'limon';
$tr = $t1 . $t2;
$boolean = 'true'; 

if ($boolean === true)
{
	echo "verdadero juaz juaz" . '<br />';
	echo $tr . '<br>';
}
 else
 {
 	echo "falso juaz juaz" . '<br>';
 	echo $tr . '<br>';
 }
$numero = 10;
$numero2 = 5; 
$numero += 2;
$resultado = $numero = $numero2; 
echo $resultado;









?>