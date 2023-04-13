<?php

require "ctlPage.class.php";
require "ctlClient.class.php";
require "ctlAventure.class.php";
require 'ctlCadeaux.class.php';
require 'CtlConnexion.class.php';
require 'CtlPanier.class.php';

class ctlRouteur
{

    


    private $ctlEscGame;
    private $ctlClient;
    private $ctlCPage;
    private $ctlCadeau;
    private $ctlConnexion;
    private $ctlPanier;



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
        $this->ctlPanier= new ctlPanier();
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

                    //création d'un nouveau compte
                    case "crea_compte" : 
                        $this->ctlConnexion->crea_compte();
                        break;
                    
                    //création d'un nouveau compte
                    case 'new_user':
                        $this->ctlConnexion->new_user();
                    break;
                    
                    //déconnexion et redirection vers la page home
                    case 'deconnexion':
                        $this->ctlConnexion->logout();




                    //affichage page paiement    
                    case 'valid_panier':
                        $this->ctlPanier->valid_commande();
                        break;

                    //affichage du panier
                    case 'panier';
                        $this->ctlPanier->panier();
                    break;

                    //suppression d'un élément du panier
                    case 'supp_panier':
                        if(isset($_GET["del_id_elt"]))
                        $this->ctlPanier->del_elt_panier($_GET["del_id_elt"]);
                        else
                        $this->ctlPanier->panier();
                    break;

                    

                    //affichage d'une aventure
                    case 'aventure' : 
                        if(isset($_GET["id_game"])){
                            $this->ctlEscGame->aventure($_GET["id_game"]);
                        }
                        else{
                            $this->ctlEscGame->aventure_list();
                        }
                    break;
                        
                    //affichage de la page FAQ
                    case "faq":
                        $this->ctlPage->faq();
                    break;


                    //affichage page aventures     
                    case "aventures":
                        // require "vue/vue_aventure.php";
                        $this->ctlEscGame->aventure_list();
                    break;


                    //affichage page cadeau
                    case "cadeaux":
                        $this->ctlCadeau->cadeau();
                    break;
                    
                    //enregistrement d'une nouvelle carte cadeau
                    case "enregcadeaux":
                        // var_dump($_POST["value_cadeau"]);
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
                       
                        //affichage des pages CMS
                        case "cgv":
                            $this->ctlPage->cgv();
                        break;
                        case "mentions":
                            $this->ctlPage->mentions();
                        break;
                        case "politique":
                            $this->ctlPage->confi();
                        break;
                        case 'valider_ma_commande' : 
                            $this->ctlPanier->valid_commande();
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
