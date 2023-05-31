<?php
/*la herencia es pasar las propiedades y metodos de una
clase a otra */
class Persona
{
    public $nombre; 
    public $edad; 
    public $pais; 

    function __construct($nombre, $edad, $pais)
    {
       $this->nombre = $nombre; 
       $this->edad   = $edad; 
       $this->pais   = $pais;
    }

    public function mostrarInformacion()
    {
        return $this->nombre . " tiene " . $this->edad . " años de edad y vive en " . $this->pais . "<br />"; 
    }
}

class Estudiante extends Persona //extends indica herencia
{
    public $carrera;

    function __construct($nombre, $edad, $pais,$carrera)
    {
       parent::__construct($nombre,$edad,$pais);
       $this->carrera = $carrera;
    }

    public function mostrarInformacion()
    {
        return $this->nombre . " tiene " . $this->edad . " años de edad,  vive en " . $this->pais . " y el es " . $this->carrera . "<br />"; 
    }
}

class Trabajador extends Persona
{
    public $trabajo;
    function __construct($nombre, $edad, $pais,$trabajo)
    {
       parent::__construct($nombre,$edad,$pais);
       $this->trabajo = $trabajo;
    }

    public function mostrarInformacion()
    {
        return $this->nombre . " tiene " . $this->edad . " años de edad,  vive en " . $this->pais . " y el es " . $this->trabajo . "<br />"; 
    }
}

$carlos = new Trabajador("Carlos",19,"Mexico","soldador");
echo $carlos->mostrarInformacion();



?>