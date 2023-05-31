<?php
session_start();
if($_SESSION)
{
    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola, $nombre </h1>";
}
else
{
    echo "no has iniciado sesion"; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina2</title>
</head>
<body>
    
    <a href="cerrar.php">cerrar session </a>
</body>
</html>