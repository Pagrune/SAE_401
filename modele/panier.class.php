<?php
require_once "database.class.php";

/***************************************************************
Classe chargée de la gestion des panier des clients dans la base de données
***************************************************************/
class panier extends database {


    public function EnregPanier($idgame, $id_client, $panier_id_session, $date, $heure, $nb_personne, $prix){
        if (!empty($id_client)){
        $req='INSERT INTO panier (panier_id_client, panier_idgame, panier_date, panier_heure, panier_prix, panier_nbpersonne, panier_session_client) VALUES (?,?,?,?,?,?,?);';
        $result=$this->execReqPrep($req, array($id_client, $idgame, $date,$heure, $prix,$nb_personne, $id_client));
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
        $results=$this->execReqPrep($req1, array((int)$id));
        // var_dump($results);
        if($results>0){
        foreach ($results as $result){
            $this->transfo_panier_commande($result);
            $this->delEltPanier($result["panier_elt"]);
        }
        }
        return $results;
    }


    public function transfo_panier_commande($ligne_panier){
        $req="INSERT into booking (resa_horaire, id_user, resa_idgame, resa_nbpersonne, resa_date, resa_prix, resa_date_transaction) values (?,?,?,?,?,?,?);";
        // var_dump((int)$ligne_panier["panier_idgame"]);
        $req_prix="SELECT game_prix_".$ligne_panier["panier_nbpersonne"]." game_prix  FROM game where game_id=?;";
        $resultat_prix=$this->execReqPrep($req_prix, array((int)$ligne_panier["panier_idgame"]));
        $resultat_prix=$resultat_prix[0]['game_prix'];
        // var_dump($resultat_prix);
        // var_dump(array(strval($ligne_panier["panier_heure"]),$ligne_panier["panier_id_client"],(int)$ligne_panier["panier_idgame"],$ligne_panier["panier_nbpersonne"],strval($ligne_panier["panier_date"]), strval($resultat_prix), strval(time())));
        $result=$this->execReqPrep($req, array($ligne_panier["panier_heure"],$ligne_panier["panier_id_client"],$ligne_panier["panier_idgame"],$ligne_panier["panier_nbpersonne"],$ligne_panier["panier_date"], strval($resultat_prix), strval(time())));
        // var_dump($result);
        return $result;
    }
}