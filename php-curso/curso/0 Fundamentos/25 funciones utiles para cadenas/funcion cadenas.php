<?php

$texto = '<> & ""'; 

echo htmlspecialchars($texto); //convierte los caracteres especiales en 
//entidades html, puede ser utilizada para inutilizar caracteres de codigo. 

$texto2 = "hola muy buenas"; 
echo '<br />' . trim($texto2); //elimina los espacios
echo '<br />'; 
echo strlen($texto2); //tamaño de la cadena
echo '<br />' ;
echo substr($texto2,4,4); //subcadena entre cierta cantidad de caracteres y cuanto corta 
echo '<br />' ;
echo strtoupper($texto2); //mayusculas
echo '<br />' ;
echo strtolower($texto2); //minusculas
echo '<br />' ;
echo strpos($texto2,'a'); //devuelve la posicion en la que se encuentra un caracteres en una cadena

?>