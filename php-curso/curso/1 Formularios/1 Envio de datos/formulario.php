<?php
$errores='';
if(isset($_POST['formulario']))
{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if(!empty($nombre))
    {
        //$nombre = trim($nombre); //quita espeacios
        //$nombre = htmlspecialchars($nombre);  //convierte caracteres en entidades html
        //$nombre = stripslashes($nombre); //quita las \ para que no se inyecte codigo

        $nombre = filter_Var($nombre,FILTER_SANITIZE_STRING); //remueve todo los signos
        echo "tu nombre es " . $nombre . "<br />";
    }
     else
     {
         $errores .= 'por favor agrega un nombre <br />';
     }

     if(!empty($correo))
    {
        $correo = filter_Var($correo,FILTER_SANITIZE_EMAIL); //remueve todo los signos
        if(!filter_Var($correo,FILTER_VALIDATE_EMAIL))
        {
            $errores .= 'por ingresa un correo valido <br />';
        }
        else
        {
            echo "tu correo es " . $correo;
        }
       
    }
     else
     {
         $errores .= 'por favor agrega un correo <br />';
     }


     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error{color:red;};
    </style>

</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="correo" placeholder="correo">
        <!--email es el tipo para correos-->
        <?php if(!empty($errores)):  ?> <!-- esta forma de if abre un if en php dentro de html los dos puntos indican el abrirse de las llaves -->
            <div class="error"> <?php echo $errores ?> </div>
        <?php endif; ?> <!--esta linea seria el equivalente a llave cerrada para el if que se abrio -->
        <input type="submit" name="formulario">
    </form>

</body>
</html>