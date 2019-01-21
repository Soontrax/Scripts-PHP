<?php

 function autoload($clase){
    include "clases/" .$clase . ".php";
 }

 spl_autoload_register("autoload");

 $a = new Persona();
 $b = new Vehiculo();

 $a ->caminar();

 $b->Conducir();

//Estas accediendo a la clase Persona
//Estas accediendo a la clase Vehiculo
//La persona esta caminandoEl vehiculo esta conduciendo


?>
