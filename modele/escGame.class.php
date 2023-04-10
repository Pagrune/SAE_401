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



  public function modif_game($genre, $duree, $lieu, $categorie, $nbjoueur, $environnement, $environnementeng, $nom, $nomeng, $description, $descriptioneng, $prix, $parcours, $nbenigme, $latitude, $longitude, $prix_3, $prix_4, $prix_5, $prix_6, $prix_7, $prix_8, $prix_9, $prix_10, $prix_11, $prix_12, $prix_groupe, $id_game ){
    $req='UPDATE game SET game_genre=?, game_duree=?, game_lieu=?, game_categorie=?, game_nbjoueur=?, game_environnement=?, game_environnementeng=?, game_nom=?, game_nomeng=?, game_description=?, game_decriptioneng=?, game_prix=?, game_parcours=?, game_nbenigme=?, game_latitude=?, game_longitude=?, game_prix_3=?, game_prix_4=?, game_prix_5=?, game_prix_6=?, game_prix_7=?, game_prix_8=?, game_prix_9=?, game_prix_10=?, game_prix_11=?, game_prix_12=?, game_prix_groupe=? where id_game=?;';
    $rep=$this->execReqPrep($req, array($genre, $duree, $lieu, $categorie, $nbjoueur, $environnement, $environnementeng, $nom, $nomeng, $description, $descriptioneng, $prix, $parcours, $nbenigme, $latitude, $longitude, $prix_3, $prix_4, $prix_5, $prix_6, $prix_7, $prix_8, $prix_9, $prix_10, $prix_11, $prix_12, $prix_groupe, $id_game));
    return $rep;
  }
 }