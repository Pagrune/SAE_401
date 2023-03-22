<?php
require_once "modele/database.class.php";

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



}