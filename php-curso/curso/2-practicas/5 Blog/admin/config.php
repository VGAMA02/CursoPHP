<?php
define('RUTA','http://localhost:8080/curso/2%20practicas/5%20Blog');


$bd_config = array( //arreglo que define los datos de la base de datos
    'basedatos' => 'curso_blog',
    'usuario'   => 'root',
    'pass'  => ''
);

//array para las configuraciones del blog
$blog_config = array(
    'post_por_pagina' => '2',
    'carpeta_imagenes' => 'imagenes/'
);

//
$blog_admin = array(
    'usuario'  => 'VGAMA', 
    'password' => '123tamarindo'
);

?>