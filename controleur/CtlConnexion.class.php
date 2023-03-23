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

    public function new_user(){
        $msg_erreur_champs_vide='';
        if(empty($_POST["nom_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre nom';
        }elseif(empty($_POST["prenom_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre nom';
        }
        elseif(empty($_POST["tel_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre numéro de téléphone';
        }
        elseif(empty($_POST["email_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre email';
        }
        elseif(empty($_POST["rue_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre adresse';
        }
        elseif(empty($_POST["CP_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre code postal';
        }
        elseif(empty($_POST["ville_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre ville';
        }
        elseif(empty($_POST["pays_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre ville';
        }
        elseif(empty($_POST["mdp_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner un mot de passe';
        }
        elseif(empty($_POST["mdp_confirm_connex"])){
            $msg_erreur_champs_vide.='veuillez confirmer votre mot de passe';
        }
        elseif(empty($_POST["accept_pol"])&&$_POST["accept_pol"]=='true'){
            $msg_erreur_champs_vide.='veuillez confirmer votre mot de passe';
        }
        elseif(!empty($_POST["mdp_confirm_connex"]) && !empty($_POST["mdp_confirm_connex"])){
            if($_POST["mdp_confirm_connex"]!=$_POST["mdp_connex"]){
                $msg_erreur_champs_vide.='votre mot de passe doit être identique à votre confirmation de mot de passe';
            }
        }
        else{
            $new_compte=$this->connexion->CreateNewAccount();
            if($new_compte!=1){
                $msg_erreur_champs_vide="Une erreur s'est produite lors de la création de votre compte";
            }
            
            else{
                $msg_erreur_champs_vide='votre compte a été correctement créé';
            }
        }
        $vue=new vue('crea_compte');
        $vue->afficher(['message'=>$msg_erreur_champs_vide]);
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