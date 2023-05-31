<?php 
    class Persona
    {
        public $nombre; 
        public $edad; 
        public $pais; 

        public function mostrarInformacion(){
            echo "holiwis uwu <br />";
        }
    }
    //notese como el acceso a los metodos no lleva $
    $carlos = new Persona;
    $carlos->nombre = 'Carlos Arturo'; 
    $carlos->edad = 23; 
    $carlos->pais = 'Mexico'; 

    $carlos->mostrarInformacion();
    $alejandro = new Persona; 
    $alejandro->nombre = "Alejandro velazques";
    $alejandro->edad = 23; 
    $alejandro->pais = "Argentina"; 




?>