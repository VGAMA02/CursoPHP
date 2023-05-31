<?php
$numero0 = 1; //se puede acceder en cualquier parte menos en funciones
function mostrar ()
{
    //echo $numero0; //variable fuera de la funcion no pasada como parametro
    $numero1 = 1; //variable declarada dentro de funcion
    echo 'mostrar';
}
mostrar();
//echo  $numero1; //no se puede acceder a variables de funciones 
?>