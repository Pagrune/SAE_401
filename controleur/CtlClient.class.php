<?php

require_once "vue/vue.class.php";
require_once "modele/client.class.php";
require_once "modele/resa.class.php";

class ctlClient{

    private $client; 
    private $resa;

    public function __construct(){
        $this->client = new client();
        $this->resa = new resa();
    }

    public function getClients(){
        
    }
    /*********************************************
     * Affichage des infos d'un client comprenant ses commandes et ses infos
     * 
     * Entrée : 
     *      [int] : id du client
     * 
     * 
     * Sortie : 
     *      [mixed] : affichage de la vue page client et des valeurs récupérées de la BDD
     ********************************************/
    public function client($id_client){
        $client_infos_perso = $this -> client->getClient($id_client);
        if($client_infos_perso==FALSE){
            echo "erreur dans l'accès à votre compte client";
        }
        else{
            $client_resa = $this -> resa ->GetResaClient($id_client);
            $vue = new vue("account");
            $vue->afficher(array("client"=>$client_infos_perso,"resa"=>$client_resa));
        }
}
}