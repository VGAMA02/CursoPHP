<?php
if($_POST)
{
    echo $_POST["nombre"];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
</head>
<body>
    <!-- sueles usar id para javascript y name para php --> 
    <!-- en action uno puede espicificar donde mandar datos-->
    <!-- en method se indica el metodo a utilizar post o get-->
    <!-- $_SERVER es una variable super global que retorna el nombre de este archivo-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="" id="" class="">
        <input type = "text" placeholder="Nombre" name="nombre"  >
        <br>
        <label for="hombre">hombre</label>
        <input type="radio" name="sexo" value="hombre">

        <label for="mujer">mujer</label>
        <input type="radio" name="sexo" value="mujer">
        <!-- el name en los radio buttons hace que se bloque uno u otro-->
        <br>
        <select name="year" id="year"> 
        <option value="2000"> 2000 </option>
        <option value="2001"> 2001 </option>
        <option value="2002"> 2002 </option>
        </select>
        <br>
        <label for="terminos">Acepta los terminos</label>
        <input type="checkbox" name="terminos" id="terminos" value="true"> 
        <br>
        <input type = "submit" value = "Enviar">
    </form>

</body>
</html>




<?php


?>