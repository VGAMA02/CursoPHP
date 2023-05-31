<?php
require 'funciones.php';
$conexion = conexion('galeria_practica','root','');
if(!$conexion) //comprobar que haya conexion 
{
    echo "conexion fail";
    die();
}
//$_FILES //guarda en un arreglo los archivos que se hayan enviado 
if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES))
{
    $check = @getimagesize($_FILES['foto']['tmp_name']); //tmp_name es el nombre que recive la imagen al guardarse temporalmente en memoria cuando la subes.
    if($check !== false)
    {
        $carpeta_destino = 'fotos/'; 
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);//guardar la imagen necesitas la imagen guardada en memoria temporalmente y la guardas en el segundo parametro que es una ruta y un nombre

        $statement = $conexion->prepare('INSERT INTO fotos VALUES (null,:titulo,:imagen,:texto)');
        $statement->execute(array(
             ':titulo' => $_POST['titulo'],
             ':imagen' => $_FILES['foto']['name'],
             ':texto'  => $_POST['texto']    
        ));
        echo "listo";
        //header('Location: index.php');
    }
    else
    {
        $error = 'el archivo es muy pesado o no es una imagen';
    }
}

require 'views/subir_view.php';
?>