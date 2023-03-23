<?php
require_once "modele/database.class.php";

/***************************************************************
Classe chargée de la gestion de la connexion de utilisateurs 
***************************************************************/
class connexion extends database {


     /******************************
     * Vérifie dans la bdd si un user à ce mdp et cet identifiant
     * 
     * Entrée : 
     *      $mail => [string] : identifiant saisi par l'utilisateur
     *      $mdp => [string] : mdp saisi par l'utilisateur
     * Sortie : 
     *      Si correct : affichage de la ligne selectionnée 
     *      Si incorrect : return False ou 0
     ****************************/
    public function CheckConnexion($mail, $mdp){
        $req='SELECT * from user where user_mail=? and user_mdp=?';
        $result= $this->execReqPrep($req, [$mail, $mdp]);
        return $result;
    }

}