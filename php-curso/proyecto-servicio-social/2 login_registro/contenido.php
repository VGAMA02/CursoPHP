<?php
//archivo de logica
session_start();
if(isset($_SESSION['usuario']))
{
    require 'views/contenido_view.php';
}
else
{
    header('Location: login.php');
}
?>