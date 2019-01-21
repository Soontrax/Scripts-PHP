<?php
class final Padre{
    function __construct(){
        echo "Iniciado clase padre";
    }
}


  class Hija extends Padre{
    parent::__construct();
 }

 $a = new Hija();