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
    $req = 'SELECT * FROM faq';
    // $req = 'SELECT id_client AS "N° Client", nom AS "NOM", prenom AS "Prénom" FROM client ORDER BY nom, prenom;';
    $resultat = $this->execReq($req);
    return $resultat;
  }

  public function modif_faq($titre, $rep, $titreeng, $repeng, $id_faq)
  {
    $req = 'UPDATE `faq` SET faq_titre=?,faq_rep=?, faq_titre_eng=?,faq_rep_eng=? where faq_id=?;';
    $rep = $this->execReqPrep($req, array($titre, $rep, $titreeng, $repeng, $id_faq));
    return $rep;
  }

  public function enreg_faq($titre, $rep, $titreeng, $repeng)
  {
    $req = 'INSERT INTO `faq`(`faq_titre`,`faq_rep`,`faq_titre_eng`,`faq_rep_eng`)
      VALUES (?,?,?,?);';
    $rep = $this->execReqPrep($req, array($titre, $rep, $titreeng, $repeng));
    return $rep;
  }

  public function delete_faq($id_faq)
  {
    $req = 'DELETE from faq where faq_id=?;';
    $rep = $this->execReqPrep($req, array($id_faq));
    return $rep;
  }
}
