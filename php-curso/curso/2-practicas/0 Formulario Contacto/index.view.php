<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet" type='text/css'>
</head>
<body>
   
    <div class="wrap"> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre;?>"> 
            <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo $correo;?>" >

            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="escriba un mensaje"><?php if(!$enviado && isset($mensaje))echo$mensaje;?></textarea>
            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert succes">
                    <?php echo "Datos Enviados correctamente"; ?>
                </div>
            <?php endif ?>
            <input type="submit" value="enviar-correo" name="ENVIO" class="btn-envio">
        </form>
    </div>
</body>
</html>