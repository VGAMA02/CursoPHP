<?php
///TODO ESTO SON RUTAS NO IMPORTA SI EL EXISTE EL ARCHIVO O NO. 
//-> da el nombre del archivo con extension
echo pathinfo('documento.txt',PATHINFO_BASENAME);//las letras en mayusculas es una constante
echo "<br />";
//-> da el nombre del archivo sin extension
echo pathinfo('documento.txt',PATHINFO_FILENAME);//las letras en mayusculas es una constante
echo "<br />";
//-> da el nombre del directorio. 
echo pathinfo('usuario/nombrecarpeta/documento.txt', PATHINFO_DIRNAME);
echo "<br />";
//-> obtener extencion del archivo 
echo pathinfo('usuario/nombrecarpeta/documento.txt', PATHINFO_EXTENSION);
echo "<br />";
//->traer un archivo mediante un patron se guardan en un arreglo. 
$arreglo = glob('*.{php,txt,html}',GLOB_BRACE); //GLOB BRACE busca todas las extensiones
print_r($arreglo);
echo "<br />";
//-> conocer el nombre base de un archivo inclusive la extension eliminando la ruta. 
echo basename('carpeta1/1/localwea/localset/archivo.php'); //si ponemos como segundo parametro '.php' o otra extension esta se elimina del resultado
echo "<br />";
//-> devuelve el directorio padre de la ruta
echo dirname('carpeta1/1/localwea/localset/archivo.php');
echo "<br />";










?>