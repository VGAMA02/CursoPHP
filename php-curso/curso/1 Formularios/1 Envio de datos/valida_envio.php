<?php
/*if($_SERVER['REQUEST_METHOD']=='GET')
{
    echo "Se enviaron por GET";
}
else
{
    echo "Se enviaron por POST";
}
*/

//compruebas mas de un formulario.
if (isset($_POST['formulario']))
{
    echo "se han enviado los datos correctamente";
}
else
{
    echo "no se enviaron bien los datos";
    //print_r($_POST);
    echo var_dump($_POST);
}

?>