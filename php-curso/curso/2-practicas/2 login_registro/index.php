<?php
session_start();
if(isset($_SESSION['usuario']))
{
header('location: contenido.php');
}
else
{
    header('location: registrarse.php');
}

?>

