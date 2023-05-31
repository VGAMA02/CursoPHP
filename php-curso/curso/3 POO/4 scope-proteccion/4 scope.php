<?php

    class Usuario{
        public $nombre; 
        protected $correo; 

        function __construct($nombre, $correo)
        {
            $this->nombre = $nombre; 
            $this->correo = $correo; 
        }

        public function mostrarinfo()
        {
            return $this->nombre;
        }
    }

    class Miembro extends Usuario{
        public function mostrarcorreo(){
            return "este es el correo: " . $this->correo;
        }
    }

    $carlos = new Miembro('Carlos','Carlos@gmail.com');
    echo $carlos->mostrarinfo();



?>