<?php
require_once 'Bebida.php';
class Vinho extends Bebida {

    private $safra;

    public function  getSafra(){
        return $this->safra;
    }

    public function  setSafra($safra){
        $this->safra = $safra;
    }
    public function getTpo()

    {

        return $this->tipo;

    }

    public function setipo($tipo)

    {

        this->tipo = $tipo;

    }

    public function showDrinks()

    {

      return 'Nome: '. this->nome . '</br> Preço: '. this->preco .'Safra: '. this->safra .'Tipo: '. this->tipo.;

    }  
    public function checkPrices($preco){

     $valida = false;
     if ($preco <25){
     
     $valida = true;
    }
    return $valida;
}
}

?>