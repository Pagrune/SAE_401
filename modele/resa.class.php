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
        $req = 'SELECT * FROM booking inner JOIN game on resa_idgame=game_id WHERE id_user=?;';   
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
      public function EnregNewResa($id_client, $horraire, $id_game, $nb_personne, $date){
        $verif_dispo = $this-> GetResaGame($date, $horraire,$id_game);
        if(!count($verif_dispo)){
            $req="INSERT INTO booking (resa_horaire, id_user,resa_idgame, resa_idpersonne, resa_date) VALUES (?,?,?,?);";
            $resa = $this->execReqPrep($req, array($horraire, $id_clientn, $id_game, $nb_personne ));
        }else{
            return FALSE;
        }
      }


      public function getResa(){
        $req= "SELECT * FROM booking;";
        $result=$this->execReq($req);
        return $result;
      }

      public function modif_resa($horaire, $client, $id_game, $nb_personne, $date, $prix, $id_resa){
        $req="UPDATE booking set resa_horaire=?, id_user=?, resa_idgame=?, resa_nbpersonne=?, resa_date=?, resa_prix=? where resa_id=?;";
        $result=$this->execReqPrep($req, array($horaire, $client, $id_game, $nb_personne, $date, $prix, $id_resa));
        return $result;
      }

      public function delete_resa($id_resa){
        $req="DELETE from booking where resa_id=?;";
        $result=$this->execReqPrep($req, array($id_resa));
        return $result;
      }

}


