<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="CSS/estilos.css"> 
    <title>Registrar Cordinador</title>

</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registrar Cordinador<h1>
        <hr class="border">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="formulario"name="login">
        
            <div class="form-group">
                <input type="text" name="usuario" class="usuario" placeholder="nombre completo">
            </di>
           
            <div class="form-group">
               <input type="text" name="carrera"class="password" placeholder="carrera">
            </di>
            
            <div class="form-group">
               <input type="number" min="1"  max="9999999999" name="codigo" class="usuario" placeholder="codigo">
            </di>

            <div class="form-group">
                <input type="number" min="01" max="500" name="horas" class="password_btn" placeholder="horas">
            </di>
            <div class="form-group">
                <input type="number" min="00" max="60" name="minutos" class="password_btn" placeholder="minutos">
            </di>
            <div class="form-group">
                <input type="number" min="00" max="60" name="segundos" class="password_btn" placeholder="segundos">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> 
            </di>
 

            <?php if(!empty($errores)):   ?>
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