<?php
//<=> operador de nave espacial
//retorna 1 si el valor en la izq es mayor que el de la derecha
//retorna 0 si los valores son iguales
//retorna -1 si el valor de la derecha es mayor que el de la izquierda 
//<   =   >
//1   0  -1
echo 1<=>1;
echo '<br />'; 
echo 0<=>1;
echo '<br />'; 
echo 1<=>0;
echo '<br />'; 

function comparar ($a, $b)
{
    if($a==$b)
    {return 0;}
    elseif($a > $b)
    {return 1;}
    else
    {return -1;}
}
$arreglo = [1,3,2,5,4,7,6,8,9];
//sort($arreglo);
echo implode('-', $arreglo) . '<br />';
usort($arreglo,'comparar');
echo implode('->', $arreglo);
//usort ordena conforme a una funcion propia.
?>