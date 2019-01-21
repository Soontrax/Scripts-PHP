<?php
class Abuelo{
    public static $color = "rojo";
    function __construct(){
    echo "Instanciando Abuelo ";
    }
    }
   
class Padre extends Abuelo{
    function __construct(){
        echo"instanacia del padre <br>";
        parent::__construct();
        echo parent::$color;
    }
       
}
class Hijo extends Padre{
}
    $obj= new Hijo; //Llama a Padre que a su vez y a su vez al abuelo

 ?>