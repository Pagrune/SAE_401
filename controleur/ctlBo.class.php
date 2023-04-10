<?php

require_once "modele/client.class.php";
require_once "modele/resa.class.php";
require_once "modele/escGame.class.php";
require_once "vue/vue_bo.class.php";


class ctlBo{

    private $resa;
    private $client;
    private $game;

    public function __construct(){
        $this->game= new EscGame();
        $this->resa= new resa();
        $this->client= new client();

    }

    public function getResas(){
        $result=getResa();  
        $this->vue= new vue_bo('client_bo');
        $this->vue = afficher_bo(array("clients"=>$result));

    }



}