<?php
     class Persona
    {
         public static $dia = '7 de Semtiembre';
         public static function saludo($nombre = null)
         {
             if($nombre)
             {
                return "hola muy buenas ". $nombre . "<br />";
             }else{
                 return "hola muy buenas" ."<br />";
                  }
         }
    }
   //no hay necesidad de instanciar
    //echo Persona::$dia; 

    echo Persona::saludo();


?>