<?php
require_once "database.class.php";

/***************************************************************
Classe chargée de la gestion des panier des clients dans la base de données
***************************************************************/
class panier extends database {


    public function EnregPanier($idgame, $id_client, $panier_id_client, $date, $heure, $nb_personne, $prix){
        if (!empty($panier_id_client)){
        $req='INSERT INTO panier (panier_id_client, panier_idgame, panier_date, panier_heure, panier_prix, panier_nbpersonne, panier_session_client) VALUES (?,?,?,?,?,?,?);';
        $result=$this->execReqPrep($req, array($id_client, $idgame, $date,$heure, $nb_personne, $prix, $panier_id_client));
    } else{
            $req='INSERT INTO panier ( panier_idgame, panier_date, panier_heure, panier_prix, panier_nbpersonne, panier_session_client) VALUES (?,?,?,?,?,?,?);';
            $result=$this->execReqPrep($req, array($idgame, $date,$heure, $nb_personne, $prix, $panier_id_client));
    }
    return $result;

}

}