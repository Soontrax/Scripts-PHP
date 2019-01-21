<?php
class Persona {
        public function guardar() {
        echo "Guardando el objeto en la base de datos <br>";
        }
        public function __destruct() {
        $this -> guardar();
        echo"Acabas de entrar en el destructor <br>";
        }
    }
    $p1 = new Persona;
    unset($p1);
    //echo $p1;
    //$p2= new Persona;
?>