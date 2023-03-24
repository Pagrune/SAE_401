<?php
require_once "modele/database.class.php";

/***************************************************************
Classe chargée de la gestion des clients dans la base de données
***************************************************************/
class EscGame extends database {

  /*******************************************************
  Retourne la liste des clients 
    Entrée : 
  
    Retour : 
      [array] : Tableau associatif contenant la liste des clients
  *******************************************************/
  public function getEscGames() {
     $req = 'SELECT * FROM `game` ORDER BY `game`.`game_categorie`';
    // $req = 'SELECT id_client AS "N° Client", nom AS "NOM", prenom AS "Prénom" FROM client ORDER BY nom, prenom;';
    $clients = $this->execReq($req);
    
    return $clients;
  }

  /*******************************************************
  Retourne les informations d'un jeu 
    Entrée : 
      idClient [int] : Identifiant du jeu

    Retour : 
      [array] : Tableau associatif contenant les information du jeu ou FALSE en cas d'erreur
  *******************************************************/
  public function getEscGame($id_game){
    $req='SELECT *FROM `game`where game_id=?;';
    $resultat= $this->execReqPrep($req, array($id_game));
    return $resultat; 
  }
  
  // public function getEscGame($idClient) {
  //   $req = 'SELECT * FROM esc_game WHERE id_esc_game=?';
  //   $resultat = $this->execReqPrep($req, array($idClient));

  //   if(isset($resultat[0]))   // Le client se trouve dans la 1ère ligne de $resultat
  //     return $resultat[0];
  //   else
  //     return FALSE;           // Retourne FALSE si le client n'existe pas
    
  //   // Ou :
  //   //return isset($resultat[0]) ? $resultat[0] : FALSE;    // Retourne FALSE si le client n'existe pas
  // }

}