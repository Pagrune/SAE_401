<?php

require_once "vue/vue.class.php";
require_once "modele/cadeaux.class.php";

class CtlCadeau{
    private $cadeau;

    public function __construct(){
        $this->cadeau = new cadeau();
    }

    public function cadeau(){
        $vue=new vue("cadeaux");
        $vue->afficher(array());
    }

    public function EnregCadeau($value_cadeau){
        $code=database::random_string();
         // var_dump($code);
        $new_carte=$this->cadeau->enregCadeau($value_cadeau, $code);
         // var_dump($new_carte);
        $this->cadeau();
    }

}