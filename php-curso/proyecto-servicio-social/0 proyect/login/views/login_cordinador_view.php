<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Iniciar sesion Cordinador</title>

</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar sesion Cordinador<h1>
        <hr class="border">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="formulario"name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </di>
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="carrera" class="usuario" placeholder="carrera">
            </di>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> 
            </di>
        
            <?php if(!empty($errores)):   ?> <!--mostrar errores-->
                <div class="error">
                    <ul>
                        <?php echo $errores?>
                    </ul>

                </div>

            <?php endif;?>

         
        </form>

       
       
    </div>
</body>
</html>