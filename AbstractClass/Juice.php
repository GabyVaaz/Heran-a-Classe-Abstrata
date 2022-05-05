<?php
require_once 'Bebida.php';
class Juice extends Bebida {

    private $sabor;

    public function  getSabor(){
        return $this->sabor;
    }

    public function  setSabor($sabor)
    {
        $this->sabor = $sabor;
    }

    public function showDrinks()
    {

        return 'Nome: '. this->nome . '</br> Preço: '. this->preco .'Sabor: '. this->sabor.;
  
      }  
      public function checkPrices($preco){

        $valida = false;
        if ($preco <2,5){
        
        $valida = true;
       }
       return $valida;
   }
    
}

?>
