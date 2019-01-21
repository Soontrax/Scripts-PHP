<?php

abstract class Normal{
    public function __construct(){
        echo"Has aceddido al metodo Normal";
       }
}

class Hereadada extends Normal{
    function __construct(){
        parent::__construct();
    }
}
$a =  new Hereadada();
?>