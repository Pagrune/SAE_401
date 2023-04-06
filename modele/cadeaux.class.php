<?php
require_once "database.class.php";

/***************************************************************
Classe chargée de la gestion des clients dans la base de données
***************************************************************/
class cadeau extends database {

     /*******************************************************
  Affiche dans le gabarit la vue correspondant à l'action demandée
    Entrée : 
      
  
    Retour : 
        affichage de la page cadeau      
  *******************************************************/
    public function enregCadeau($value_carte, $code){
      $req="INSERT INTO `carte_cadeau` (carte_client_id, carte_code,carte_value) VALUES (?,?,?)";
      $cadeaux = $this->execReqPrep($req, [1, $code,$value_carte]);
      return $cadeaux;
    }

    public function verifCadeau($code){
      $req="SELECT * from `carte_cadeau` where carte_code=?;";
      $result=$this->execReqPrep($req, array($code));
      return $result;
    }

    public function delete_carte($code){
      $req=$req="DELETE FROM `carte_cadeau` WHERE carte_code=?;";
      $result=$this->execReqPrep($req, array($code));
      return $result;
    }



}