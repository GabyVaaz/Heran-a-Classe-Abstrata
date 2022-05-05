<?php
require_once 'Bebida.php';
class Soda extends Bebida {

    private $sabor;

    public function  getReturnable(){
        return $this->returnable;
    }

    public function  setReturnable($returnable){
        $this->returnable = $returnable;
    }
    public function showDrinks()
        {

            return 'Nome: '. this->nome . '</br> Preço: '. this->preco .'Retornavel: '. this->returnable.;
      
          }  
          public function checkPrices($preco){

            $valida = false;
            if ($preco <5){
            
            $valida = true;
           }
           return $valida;
       }
}

?>
