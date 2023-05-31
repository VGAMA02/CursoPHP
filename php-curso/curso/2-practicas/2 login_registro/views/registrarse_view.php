<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="CSS/estilos.css"> 
    <title>Registrate</title>

</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registrate<h1>
        <hr class="border">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="formulario"name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </di>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password"name="password"class="password"placeholder="Contrasena">
            </di>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Confirmar Contraseña"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> 
            </di>

            <?php if(!empty($errores)):   ?>
                <div class="error">
                    <ul>
                        <?php echo $errores?>
                    </ul>

                </div>

            <?php endif;?>
         
        </form>

        <p class="texto-registrate">
            ¿ya tienes cuenta?
            <a href="login.php">iniciar Sesion</a>
        </p>
       
    </div>
</body>
</html>