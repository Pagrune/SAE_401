<?php

require_once "vue/vue.class.php";
require_once "modele/connexion.class.php";

class ctlConnexion{

    private $connexion; 

    public function __construct(){
        $this->client = new connexion();
    }

    public function connexion_user(){
        $vue=new vue('connexion');
        $vue->afficher([]);
    }
} 