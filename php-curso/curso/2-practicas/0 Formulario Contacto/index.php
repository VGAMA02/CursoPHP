<?php
$errores = '';
$enviado = '';
if(isset($_POST['ENVIO']))
{

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if(!empty($nombre))
    {
      $nombre = trim($nombre);
      $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
    }
    else
    {
        $errores .= "Por favor ingresa un nombre <br />"; 
    }

    if(!empty($correo))
    {
        $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo,FILTER_VALIDATE_EMAIL))
        {
            $errores .= "por favor inserta un correo valido <br />";
        }
    }
    else
    {
        $errores .= "por favor inserta un correo <br />";
    }

    if(!empty($mensaje))
    {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    }
    else
    {
        $errores .= "por favor ingresa un mensaje <br />"; 
    }

    if(!$errores)
    {
        $enviar_a = 'baiabaia@miempresa.com';
        $asunto = 'Correo enviado mamalona mente'; 
        $mensaje_preparado = "DE: $nombre \n"; 
        $mensaje_preparado .= "Correo: $correo \n"; 
        $mensaje_preparado .= "mensaje: " . $mensaje;

        /*mail($enviar_a, $asunto, $mensaje_preparado);
        /*esta funcion tiene que jalar fuera de xampp*/
        $enviado = 'true';
    }

}

require "index.view.php";
?>