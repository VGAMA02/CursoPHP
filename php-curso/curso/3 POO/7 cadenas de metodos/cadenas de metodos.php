<?php
    class Usuario{
        public $nombre;
        public $correo; 

        function __construct($nombre, $correo)
        {
            $this->nombre = $nombre; 
            $this->correo = $correo; 
        }

        public function mostrarNombre(){
            echo 'su nombre es: ' . $this->nombre . '<br/>';
            return $this;
        }
        public function mostrarCorreo(){
            echo 'su correo es: ' . $this->correo . '<br/>';
            return $this;
        }
    }

    $carlos = new Usuario('carlos','carlos@gmail.com');
    $carlos->mostrarNombre()->mostrarCorreo();



?>