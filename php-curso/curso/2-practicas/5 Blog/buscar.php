<?php
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if(!$conexion)
{
    header('Location: error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda']) )
{
    $busqueda = limpiarDatos($_GET['busqueda']);
    $statement = $conexion->prepare('SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda');
    $statement->execute(array(':busqueda' => "%$busqueda%"));

    $resultados = $statement->fetchAll(); //los resultados se guardan completamente en arreglos
    if(!empty($resultado))
    {
        $titulo = 'No se encontraron resultados con la busqueda: ' . $busqueda; 
    }else
      {
          $titulo = 'resultado de busqueda: ' . $busqueda; 
      }
}
else //if que pregunta si se buscaron datos
{
    header('Location: index.php');
}

require 'views/buscar_views.php';
?>