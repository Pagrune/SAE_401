<?php
require_once "database.class.php";

/***************************************************************
Classe chargée de la gestion des panier des clients dans la base de données
***************************************************************/
class panier extends database {


    public function EnregPanier($idgame, $id_client, $panier_id_session, $date, $heure, $nb_personne, $prix){
        if (!empty($id_client)){
        $req='INSERT INTO panier (panier_id_client, panier_idgame, panier_date, panier_heure, panier_prix, panier_nbpersonne, panier_session_client) VALUES (?,?,?,?,?,?,?);';
        $result=$this->execReqPrep($req, array($id_client, $idgame, $date,$heure, $prix,$nb_personne, $panier_id_client));
    } else{
            $req='INSERT INTO panier ( panier_idgame, panier_date, panier_heure, panier_prix, panier_nbpersonne, panier_session_client) VALUES (?,?,?,?,?,?);';
            $result=$this->execReqPrep($req, array($idgame, $date,$heure, $prix,$nb_personne,  $panier_id_session));
    }
    return $result;

}


    public function getPanier($id_user_log, $session_id){
        if(!empty($id_user_log)){
            $req='SELECT * from panier where panier_id_client=?;';
            $result=$this->execReqPrep($req,array($id_user_log));
        }{
            $req='SELECT * from panier where panier_session_client=?;';
            $result=$this->execReqPrep($req,array($session_id));
        }
        return $result;
    }

    public function delEltPanier($id_elt){
        $req='DELETE FROM `panier` WHERE `panier_elt` = ?;';
        $result=$this->execReqPrep($req,array($id_elt));
        return $result;
    }

    public function updatePanier($id_session, $id_user){
        $req="UPDATE `panier` SET `panier_id_client`='?' WHERE `panier_session_client`=?;";
        $result=$this->execReqPrep($req, array((int)$id_user,$id_session));
        return $result;
    }
}