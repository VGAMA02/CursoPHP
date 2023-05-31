<?php
session_start();
session_destroy();
$_SESSION = array(); //limpiamos la session la dejamos en 0
header('Location: login.php');
die();
?>