<?php

require_once "vue/vue.class.php";
require_once "modele/connexion.class.php";

class ctlConnexion{

    private $connexion; 

    public function __construct(){
        $this->connexion = new connexion();
    }

    public function connexion_user(){
        $vue=new vue('connexion');
        $vue->afficher([]);
    }
    public function crea_compte(){
        $vue=new vue('crea_compte');
        $vue->afficher([]);
    }


    /******************************
     * Vérifie si les données saisies dans le formulaire de connexion sont correctes
     * appel de la fonction qui vérifie dans la bdd si un user à ce mdp et cet identifiant
     * 
     * Entrée : 
     * 
     * Sortie : 
     *      Si correct : affichage de la vue avec les infos 
     *      Si incorrect : affichage de la vue avec un message d'erreur dépendant du type de problème
     ****************************/
    public function connexion_check(){
        // var_dump($_POST["identifiant"]);
        // var_dump($_POST["mdp"]);
        if(!empty($_POST["identifiant"]) && !empty($_POST["mdp"])){
            $email=$_POST["identifiant"];
            $mdp=$_POST["mdp"];
            $verif=$this->connexion->CheckConnexion($email, $mdp);
            var_dump($verif);
            if($verif==0 || $verif==false)
                $message_erreur="erreur de mot de passe ou d'identifiant";
            else
                $message_erreur='';
                $vue=new vue('connexion');
                return $vue->afficher(['message_erreur'=>$message_erreur]);
        }
        else{
            $message_erreur="Les deux champs doivent être remplis";
            $vue=new vue('connexion');
            return $vue->afficher(['message_erreur'=>$message_erreur]);
        }
        
    }
} 