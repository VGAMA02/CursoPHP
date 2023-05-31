<?php
class Persona
{
    public $nombre; 
    public $edad; 
    public $pais; 

    public function mostrarInformacion()
    {
        echo $this->nombre . " tiene " . $this->edad . " años de edad y vive en " . $this->pais . "<br />"; 
    }
}
    $carlos = new Persona; 
    $carlos->nombre = "Carlos Arturo"; 
    $carlos->edad = 23; 
    $carlos->pais = "Mexico"; 
    $carlos->mostrarInformacion();

    $alejandro = new Persona; 
    $alejandro->nombre = "Alejandro arriba"; 
    $alejandro->edad = 33; 
    $alejandro->pais = "Chile"; 
    $alejandro->mostrarInformacion();
?>