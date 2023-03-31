<?php
require_once "modele/database.class.php";

/***************************************************************
Classe chargée de la gestion de la faq dans la base de données
 ***************************************************************/
class FAQ extends database
{

    /*******************************************************
  Retourne la liste des questions 
    Entrée : 
  
    Retour : 
      [array] : Tableau associatif contenant la liste des question
     *******************************************************/
    public function getFaq()
    {
        $req = 'SELECT * FROM faq_sujet';
        // $req = 'SELECT id_client AS "N° Client", nom AS "NOM", prenom AS "Prénom" FROM client ORDER BY nom, prenom;';
        $resultat = $this->execReq($req);
        return $resultat;
    }
}
