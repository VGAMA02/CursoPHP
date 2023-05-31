<?php
    abstract class Persona
    {
        public function saludo()
        {
            return "hola muy buenas <br />";
        }
    }

    class Estudiante extends Persona
    {
        
    }
    


    $carlos = new Estudiante; 
    echo $carlos->saludo();


?>