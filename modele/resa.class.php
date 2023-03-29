<?php
require_once "modele/database.class.php";

/***************************************************************
Classe chargée de la gestion des clients dans la base de données
***************************************************************/
class resa extends database {

    public function __constuct(){

    }

    /**
     * Récupération de toutes les réservations d'un client
     * Entrée : 
     *      [int]: id du client
     * 
     * Sortie : 
     *      [array]: réservation du client
     *      [bool] : false si le client n'a pas de réservation
     */
    public function GetResaClient($id_client){
        $req = 'SELECT * FROM booking WHERE id_user=?;';   
        $resa =  $this->execReqPrep($req, array($id_client));
        return $resa;
      }

    /**
     * Récupération de la réservation d'un jeu sur un créneau donné
     * Entrée : 
     *      [int]: id du client
     *      [str]: horraire a vérifié
     * 
     * Sortie : 
     *      [array]: réservation du client
     *      [bool] : false si il n'y a pas de réservation à cette heure pour ce jeu
     */
      public function GetResaGame($horraire, $id_game){
        $req= "SELECT * FROM booking where resa_idgame=? and resa_horaire=?;";
        $resa =  $this->execReqPrep($req, array($id_game, $horraire));
        return $resa;
      }


      /**
     *Ajout d'une nouvelle réservation
     * Entrée : 
     *      [int]: id du client
     *      [int]: id du jeu
     *      [str]: créneau horraire
     * 
     * Sortie : 
     *      [array]: si la réservation s'est effectué
     *      [bool]: si il y a eu une erreur
     */
      public function EnregNewResa($id_client, $horraire, $id_game){
        $verif_dispo = $this-> GetResaGame($horraire,$id_game);
        if(!count($verif_dispo)){
            $req="INSERT INTO booking (resa_horaire, id_user,resa_idgame) VALUES (?,?,?);";
            $resa = $this->execReqPrep($req, array($horraire, $id_clientn, $id_game ));
        }else{
            return FALSE;
        }
      }
    }


