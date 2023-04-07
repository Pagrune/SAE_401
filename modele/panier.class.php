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
        }else{
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
        $req="UPDATE `panier` SET `panier_id_client`=? WHERE `panier_session_client`=?;";
        $result=$this->execReqPrep($req,array($id_user,$id_session));
        return $result;
    }

    public function transi_panier_commande($id){
        $req1="SELECT * from panier where panier_id_client=?;";
        $results=$this->execReqPrep($req1, array($id));
        var_dump($results);
        foreach ($results as $result){
            $this->transfo_panier_commande($result);
            $this->delEltPanier($result["panier_elt"]);
        }
        return $results;
    }


    public function transfo_panier_commande($ligne_panier){
        $req="INSERT into booking (resa_horaire, id_user, resa_idgame, resa_nbpersonne, resa_date, resa_prix, resa_date_transaction) values (?,?,?,?,?,?,?);";
        var_dump($ligne_panier["panier_nbpersonne"]);
        $req_prix="SELECT game_prix_".$ligne_panier["panier_nbpersonne"]." FROM game;";
        $resultat_prix=$this->execReq($req_prix);
        $result=$this->execReqPrep($req, array($ligne_panier["panier_heure"],$ligne_panier["panier_id_client"],$ligne_panier["panier_idgame"],$ligne_panier["panier_nbpersonne"],$ligne_panier["panier_date"], floatval($resultat_prix), time()));
        return [$resultat_prix, $result];
    }
}