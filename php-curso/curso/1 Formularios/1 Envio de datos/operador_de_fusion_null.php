<?php
  //  $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'anonimo' $; //esto es un if en una linea el ? es el if despues va lo verdadero y despues : falso
    $nombre = isset($_GET['nombre']) ?? 'anonimo'; //lo mismo que lo de arriba pero mas corto despues de ?? va lo falso 
    echo $nombre;
    echo "hola";

?>