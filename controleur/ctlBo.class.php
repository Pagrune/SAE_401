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
        $result=$this->resa->getResa();  
        $this->vue= new vue_bo('resa_bo');
        $this->vue->afficher_bo(array("resas"=>$result));

    }

    public function getGames(){
        $result=$this->game->getEscGames();  
        $this->vue= new vue_bo('game_bo');
        $this->vue->afficher_bo(array("games"=>$result));
    }

    public function modif_game($id_game){
        $req=$this->game->modifGame($_POST['game_genre'],$_POST['duree'],$_POST['lieu'],$_POST['categorie'],$_POST['nbjoueur'],$_POST['environnement'],$_POST['environnementeng'],$_POST['nom'],$_POST['nomeng'],$_POST['description'],$_POST['decriptioneng'],$_POST['prix'],$_POST['parcours'],$_POST['nbenigme'], $_POST['latitude'], $_POST['longitude'],$_POST['prix_3'],$_POST['prix_4'],$_POST['prix_5'],$_POST['prix_6'],$_POST['prix_7'],$_POST['prix_8'],$_POST['prix_9'],$_POST['prix_10'],$_POST['prix_11'],$_POST['12'],$_POST['prix_groupe'], $id_game);
        

    }

    public function getClients(){
        $result=$this->client->getClients();  
        $this->vue= new vue_bo('client_bo');
        $this->vue->afficher_bo(array("clients"=>$result));
    }



}