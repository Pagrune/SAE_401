<?php

require_once "vue/vue.class.php";
require_once "modele/chekcout.class.php";

class CtlCheckout{
    private $aventure;

    public function __construct(){
        $this->aventure = new checkout();
    }

    public function panier(){
        $vue=new vue('panier');
        $vue->afficher(array());
    }



}