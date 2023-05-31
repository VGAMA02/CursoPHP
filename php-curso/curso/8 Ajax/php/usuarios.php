<?php

header('Content-type: application/json; charset=utf-8');

$respuesta = [
    [
        'id' => 1165612156651,
        'nombre' => 'Carlos',
        'edad' => 23, 
        'pais' => 'Mexico',
        'correo' => 'carlosMe@correo.com'
    ],
    [
        'id' => 1165612156651,
        'nombre' => 'Juan',
        'edad' => 23, 
        'pais' => 'Mexico',
        'correo' => 'juanMe@correo.com'
    ],
];

echo json_encode($respuesta);
