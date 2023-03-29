<?php

require "ctlPage.class.php";
require "ctlClient.class.php";
require "ctlAventure.class.php";
require 'ctlCadeaux.class.php';
require 'CtlConnexion.class.php';
require 'CtlCheckout.class.php';

class ctlRouteur
{

    


    private $ctlEscGame;
    private $ctlClient;
    private $ctlCPage;
    private $ctlCadeau;
    private $ctlConnexion;
    private $ctlCheckout;



    //*******
    //Initialisation des Class Modele pour chaque action
    //Entrée : 
    //      [vide]
    //Sortie : 
    //      [variables initialisées en tant qu'objet]
    //******/
    public function __construct()
    {
        $this->ctlClient = new ctlClient();
        $this->ctlEscGame = new ctlAventure();
        $this->ctlPage = new ctlPage();
        $this->ctlCadeau= new ctlCadeau();
        $this->ctlConnexion= new ctlConnexion();
        $this->ctlCheckout= new CtlCheckout();
    }


    //*******
    //Routage à partir des actions réalisées passées en paramètre dans l'url 
    //Entrée : 
    //      [vide]
    //Sortie : 
    //      [affichage des pages demandées ou de la page d'accueil]
    //******/
    public function Routage()
    {
        try {
            if (isset($_GET["action"])) {
                switch ($_GET["action"]) {

                    //affichage page profil si le client est connecté 
                    //sinon affichage de la page de connexion/création de compte
                    case "connexion" : 
                        if(isset($_SESSION["id"])){
                            // var_dump((int)$_SESSION["id"]);
                            $this->ctlClient->client((int)$_SESSION["id"]);
                        }else{
                            if(!isset($_GET["verif"]))
                                $this->ctlConnexion->connexion_user();
                            else{
                                if($_GET["verif"]==true)
                                $this->ctlConnexion->connexion_check();
                                else
                                $this->ctlConnexion->connexion_user();
                            }
                        }
                        break;
                    case "crea_compte" : 
                        $this->ctlConnexion->crea_compte();
                        break;
                    
                    case 'new_user':
                        $this->ctlConnexion->new_user();
                    break;
                    
                    case 'deconnexion':
                        $this->ctlConnexion->logout();





                    //affichage page paiement    
                    case 'paiement':
                        return true;
                        break;

                    case 'panier';
                    $this->ctlCheckout->panier();
                    break;
                    
                    case 'aventure' : 
                        if(isset($_GET["id_game"])){
                            $this->ctlEscGame->aventure($_GET["id_game"]);
                        }
                        else{
                            $this->ctlEscGame->aventure_list();
                        }
                    break;
                        
                    case "faq":
                        $this->ctlPage->faq();
                    break;


                    //affichage page aventures     
                    case "aventures":
                        // require "vue/vue_aventure.php";
                        $this->ctlEscGame->aventure_list();
                    break;

                    case "cadeaux":
                        $this->ctlCadeau->cadeau();
                    break;
                    
                    case "enregcadeaux":
                        var_dump($_POST["value_cadeau"]);
                        $this->ctlCadeau->EnregCadeau($_POST["value_cadeau"]);
                    break;

                    //affichage page aventure information avec vérif de l'id du jeu à afficher    
                    case "aventure":
                        if(isset($_POST["id_game"])){
                            $this->ctlEscGame->aventure($_POST["id_game"]);
                        }
                        else{
                            $this->ctlPage->accueil();///faire la gestion d'erreur avec Zoé
                        }
                    break;
                    
                    //affichage page contact 
                    case "contact":
                        $this->ctlPage->contact();
                        break;


                        //////***************** page CMS ****************////////////
                       
                        //affichage page faq    
                        case "cgv":
                            $this->ctlPage->cgv();
                        break;
                        case "mentions":
                            $this->ctlPage->mentions();
                        break;
                        case "politique":
                            $this->ctlPage->confi();
                        break;





                    default:
                        $this->ctlPage->accueil();
                        break;
                }
            } else
                $this->ctlPage->accueil();
        } catch (Exception $e) {
            $this->ctlPage->erreur($e->getMessage());
        }
    }
}
