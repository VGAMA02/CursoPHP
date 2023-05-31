<?php

if(file_exists('documento.txt')) //comprueba si existe algun archivo
{
    echo "el archivo existe <br/>"; 
}
else
{
    echo "el archivo no existe  <br/>";
}
//funcion que sobreescribe la informacion del archivo
file_put_contents('documento.txt',"hola carlos \n", FILE_APPEND); //con 2 parametros sobre escribe con 3 depende con append, añade informacion
//funcion que lee contenido, convirte todo el contenido en una linea de texto
//echo file_get_contents('documento.txt');
file_put_contents('documento.txt', '');
for($i=1; $i<=10; $i++)
{
    file_put_contents('documento.txt',"$i \n", FILE_APPEND); 
}

$archivo = file('documento.txt'); //esta fincion guarda un array donde cada linea del documento es un elemento.
echo $archivo[1];

?>