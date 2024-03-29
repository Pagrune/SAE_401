<?php
require_once "modele/database.class.php";

/***************************************************************
Classe chargée de la gestion des clients dans la base de données
***************************************************************/
class client extends database {

  /*******************************************************
  Retourne la liste des clients 
    Entrée : 
  
    Retour : 
      [array] : Tableau associatif contenant la liste des clients
  *******************************************************/
  public function getClients() {
     $req = 'SELECT * FROM user';
    // $req = 'SELECT id_client AS "N° Client", nom AS "NOM", prenom AS "Prénom" FROM client ORDER BY nom, prenom;';
    $clients = $this->execReq($req);
    return $clients;
  }


  /************************************
   *Retourne les commandes d'un client 
   * Entrée : 
   *    idClient [int] : Identifiant du client
   * 
   * Retour : 
   *    [array] : tableau associatif contenant toutes les réservations du client ou FALSE si il n'a jamais commandé
   ***********************************/
  public function getClientResa($id_client){
    $req = 'SELECT * FROM booking'.
    'LEFT JOIN resa on client.id_client=resa.id_client'.
    'WHERE client.id_client=?;';

    $resa =  $this->execReqPrep($req, array($id_client));
    if (!empty($resa)){
        return $resa;
    }
    else{
        return FALSE;
    }
  }



  /*******************************************************
  Retourne les informations d'un client 
    Entrée : 
      idClient [int] : Identifiant du client

    Retour : 
      [array] : Tableau associatif contenant les information du client ou FALSE en cas d'erreur
  *******************************************************/
  public function getClient($idClient) {
    $req = 'SELECT * FROM user WHERE user_id=?';
    $resultat = $this->execReqPrep($req, array($idClient));

    if(isset($resultat[0]))   // Le client se trouve dans la 1ère ligne de $resultat
      return $resultat[0];
    else
      return FALSE;           // Retourne FALSE si le client n'existe pas
    
    // Ou :
    //return isset($resultat[0]) ? $resultat[0] : FALSE;    // Retourne FALSE si le client n'existe pas
  }

  public function delete_client($user){
    $req='DELETE from user where user_id=?;';
    $result=$this->execReqPrep($req, array($user));
  }
  
}