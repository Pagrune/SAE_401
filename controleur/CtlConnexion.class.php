<?php

require_once "vue/vue.class.php";
require_once "modele/connexion.class.php";
require_once "modele/resa.class.php";
require_once "modele/panier.class.php";

class ctlConnexion{

    private $connexion; 
    private $resa; 
    private $panier;

    public function __construct(){
        $this->connexion = new connexion();
        $this->resa= new resa();
        $this->panier=new panier();
    }

    /*******************************************************
  affiche la page de connection
    Entrée : 
      action [string] : action demandée

    Sortie :
      $fichierVue [string] : nom du fichier requis pour générer le contenu à afficher dans la vue

    Retour : 
      
  *******************************************************/



  /*********************************
  *Affichage de la page de connection
  * Entrée : 
  *   
  * Sortie :
  ***********************************/
    public function connexion_user(){
        $vue=new vue('connexion');
        $vue->afficher([]);
    }


    /*********************************
  *Affichage de la page de création de compte
  * Entrée : 
  *   
  * Sortie :
  ***********************************/
    public function crea_compte(){
        $vue=new vue('crea_compte');
        $vue->afficher([]);
    }





/*******************************************************
  Vérifie si les données envoyées pour créer le nouveau compte sont complètes puis créer un nouveau client dans  BDD
    Entrée : 
      POST [array] : données du formulaire envoyé avec la méthode POST

    Sortie :
      $fichierVue [string] : nom du fichier requis pour générer le contenu à afficher dans la vue
      $new_compte [boolean ou int] : 1=>true si le user est ajouté dans la bdd | False=> si la requête est fausse | 0=> si aucune ligne de la BDD n'a été éffectée

    Retour : 
      
  *******************************************************/
    public function new_user(){
        $msg_erreur_champs_vide='';
        $valeurs=[];
        if(empty($_POST["nom_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre nom </br>';
        }
        //ajout dans un un tableau associatif des éléments à auto-invoquer
        if(!empty($_POST["nom_connex"])){
            $valeurs["nom"]=$_POST["nom_connex"];
        }


        if(empty($_POST["prenom_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre prenom </br>';
        }
        //ajout dans un un tableau associatif des éléments à auto-invoquer
        if(!empty($_POST["prenom_connex"])){
            $valeurs["prenom"]=$_POST["nom_connex"];
            var_dump($valeurs);
        }


        if(empty($_POST["tel_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre numéro de télephone </br>';
        }
        //ajout dans un un tableau associatif des éléments à auto-invoquer
        if(!empty($_POST["tel_connex"])){
            $valeurs["tel"]=$_POST["tel_connex"];
        }


        if(empty($_POST["email_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre email </br>';
        }
        //ajout dans un un tableau associatif des éléments à auto-invoquer
        if(!empty($_POST["email_connex"])){
            $valeurs["email"]=$_POST["email_connex"];
        }


        if(empty($_POST["rue_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre adresse </br>';
        }//ajout dans un un tableau associatif des éléments à auto-invoquer
        if(!empty($_POST["rue_connex"])){
            $valeurs["rue"]=$_POST["rue_connex"];
        }


        if(empty($_POST["CP_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre code postal </br>';
        }
        //ajout dans un un tableau associatif des éléments à auto-invoquer
        if(!empty($_POST["CP_connex"])){
            $valeurs["code_postal"]=$_POST["CP_connex"];
        }


        if(empty($_POST["ville_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre ville </br>';
        }
        //ajout dans un un tableau associatif des éléments à auto-invoquer
        if(!empty($_POST["tel_connex"])){
            $valeurs["tel"]=$_POST["tel_connex"];
        }


        if(empty($_POST["pays_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner votre ville </br>';
        }
        //ajout dans un un tableau associatif des éléments à auto-invoquer
        if(!empty($_POST["pays_connex"])){
            $valeurs["pays"]=$_POST["pays_connex"];
        }


        if(empty($_POST["mdp_connex"])){
            $msg_erreur_champs_vide.='veuillez renseigner un mot de passe </br>';
        }
        
        if(empty($_POST["mdp_confirm_connex"])){
            $msg_erreur_champs_vide.='veuillez confirmer votre mot de passe </br>';
        }
        if(empty($_POST["accept_pol"])&&$_POST["accept_pol"]=='true'){
            $msg_erreur_champs_vide.='veuillez confirmer votre mot de passe </br>';
        }
        if(!empty($_POST["mdp_confirm_connex"]) && !empty($_POST["mdp_confirm_connex"])){
            if($_POST["mdp_confirm_connex"]!=$_POST["mdp_connex"]){
                $msg_erreur_champs_vide.='votre mot de passe doit être identique à votre confirmation de mot de passe </br>'; 
            }
        } 

        if($msg_erreur_champs_vide==''){
            if($_POST["mdp_confirm_connex"]!=$_POST["mdp_connex"]){
                $msg_erreur_champs_vide.='votre mot de passe doit être identique à votre confirmation de mot de passe </br>';
                $vue=new vue('crea_compte');
                $vue->afficher(['message'=>$msg_erreur_champs_vide, 'valeur'=>['pays'=>$_POST["pays_connex"],'ville'=>$_POST["ville_connex"],'code_postal'=>$_POST["CP_connex"],'rue'=>$_POST["rue_connex"],'email'=>$_POST["email_connex"],'tel'=>$_POST["tel_connex"],'nom'=>$_POST["nom_connex"], 'prenom'=>$_POST["prenom_connex"]]]);
            }
            else{
                $new_compte=$this->connexion->CreateNewAccount(['pays'=>$_POST["pays_connex"],'ville'=>$_POST["ville_connex"],'code_postal'=>$_POST["CP_connex"],'rue'=>$_POST["rue_connex"],'email'=>$_POST["email_connex"],'tel'=>$_POST["tel_connex"],'nom'=>$_POST["nom_connex"], 'prenom'=>$_POST["prenom_connex"], 'mdp'=>$_POST["mdp_connex"]]);
                if($new_compte!=1){
                    $msg_erreur_champs_vide="Une erreur s'est produite lors de la création de votre compte";
                    $set_cookies=$this->SetSession();
                    $vue=new vue('crea_compte');
                    $vue->afficher(['message'=>$msg_erreur_champs_vide]);
                }
            
                else{
                    $vue=new vue('connexion');
                    $vue->afficher(array()); 
                }
                return $new_compte;
            }
        }
        else{
            // die();
            var_dump($msg_erreur_champs_vide);
            $vue=new vue('crea_compte');
            $vue->afficher(['message'=>$msg_erreur_champs_vide, 'valeur'=>$valeurs]);
        }
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
            if($verif==0 || $verif==false || $verif<=1){
                $vue=new vue('connexion');
                $message_erreur="erreur de mot de passe ou d'identifiant";
                $vue->afficher(['message_erreur'=>$message_erreur]);
            }else{
                $message_erreur='votre compte est bon';
                $session=$this->SetSession($verif);
                $get_resa=$this->resa->GetResaClient($verif[0]['user_id']);
                $copie=$this->panier->updatePanier(session_id(), $verif[0]['user_id']);
                var_dump($copie);
                $vue=new vue('account');
                $vue->afficher(['message_erreur'=>$message_erreur, 'client'=>$verif, 'resa'=>$get_resa]);
            }
            
        }
        else{
            $message_erreur="Les deux champs doivent être remplis";
            $vue=new vue('connexion');
            return $vue->afficher(['message_erreur'=>$message_erreur]);
        }
        
    }



/*******************************************************
  Initialise la session du client
    Entrée : 
      

    Sortie :
      return la session avec les infos enregistrées dedans

      
  *******************************************************/
    // static public function CheckSession(){
    //     if(isset($_COOKIE)){
    //         return true;
    //     }
    //     else{
    //         // SetSession()
    //         return false;
    //     }
        
    // }

    static public function SetSession($infos){
        $infos=$infos[0];
        $_SESSION["nom"]=$infos["user_nom"];
        $_SESSION["prénom"]=$infos["user_nom"];
        $_SESSION['id']=$infos["user_id"];
    }
    
    public function logout(){
        //suppression du cookie de session
        setcookie(session_name(), "", time()-3600, "/");
        // Détruire la session
        session_unset();
        session_destroy();
        //redirection vers la page d'accueil
        $vue=new vue('accueil');
        $vue->afficher([]);
    }
    
}    