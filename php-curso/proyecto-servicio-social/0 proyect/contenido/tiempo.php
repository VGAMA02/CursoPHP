<?php
   header('Content-type: application/json; charset=utf-8'); 
   // $tiempo = time();
    

    $respuesta = [
        [
            'tiempo' => time(),
            'date' => date("(H:i:s)",time()),

        ],
    ];
   
    echo json_encode($respuesta);
    //echo $tiempo;

?>