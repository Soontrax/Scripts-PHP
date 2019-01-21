<?php
class Loteria{
  
  public $numero;
  public $intentos;
  public $contador;
  public $resultado = false;

  public function __construct($numero, $intentos){
   $this->numero = $numero;
   $this->intentos = $intentos;
  }

  public function sorteo(){
   $minimo = $this->numero /2;
   $maximo = $this->numero *2;
   
   for($this->contador = 0; $this->contador < $this->intentos && !$this->resultado; $this->contador++){
    $intento = rand($minimo, $maximo);
    if($intento == $this->numero){
        echo "<b style='color:green;'>".$intento. " = ".$this->numero."</b><br>";
        $this->resultado = true;
       }else{
        echo "<span>".$intento. " ! ".$this->numero."</span><br>";
       };
   }
  }


  public function __destruct(){
   if($this->resultado){
    echo "HAS GANADO EN ".$this->contador." INTENTOS";
   }else{
    echo "NO HAS ACERTADO ";
   }
  }
  

 };

 $loteria = new Loteria(10,10);
 $loteria->sorteo();

?>