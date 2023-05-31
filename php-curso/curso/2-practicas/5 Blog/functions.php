<?php
//funcion base de datos
function conexion($bd_config)
{
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'],$bd_config['usuario'],$bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false; 
    }
}
//funcion limpiar datos
function limpiarDatos($datos)
{
    $datos = trim($datos); //trim borra espacios al inicio y al final de la cadena
    $datos = stripslashes($datos); //funcion que elimina / para evitar inyeccion de codigo
    $datos = htmlspecialchars($datos); //convierte los caracteres especiales en identidades php
    return $datos; 

}
function pagina_actual()
{
    return isset($_GET['p']) ? (int)$_GET['p'] : 1; 
}
//funcion de optencion de post
function obtener_post($post_por_pagina,$conexion)
{
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS* FROM articulos LIMIT $inicio,$post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}
function numero_paginas($post_por_pagina, $conexion)
{
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];
    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas;
}
//funcion para obtener id y limpiarlo de GET
function id_articulo($id)
{
    return (int)limpiarDatos($id); //casteamos en entero para evitar la inyeccion de codigo.
}
//funcion que llama a base de datos y obtiene un post
function obtener_post_por_id($conexion,$id)
{
    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false; 
}
function fecha($fecha)
{  
    $timestamp = strtotime($fecha);
    $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']; 
    $dia  = date('d',$timestamp);
    $mes  = date('m',$timestamp);
    $year = date('Y',$timestamp);
    $fecha = "$dia de " . $meses[$mes-1] . " del $year";
    return $fecha;
}

//funcion para comprobar sesiones
function comprobarSession()
{
    if(!isset($_SESSION['admin'] ) )
    {
        header('Location: ' . RUTA);
    }
}

?>

