<?php


require "ctlPage.class.php";
require "ctlClient.class.php";
require "ctlAventure.class.php";
require 'ctlCadeaux.class.php';
require 'CtlConnexion.class.php';

class ctlRouteur
{

    


    private $ctlEscGame;
    private $ctlClient;
    private $ctlCPage;
    private $ctlCadeau;
    private $ctlConnexion;



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
                        if(!isset($_GET["verif"]))
                            $this->ctlConnexion->connexion_user();
                        else
                            if($_GET["verif"]==true)
                            $this->ctlConnexion->connexion_check();
                            else
                            $this->ctlConnexion->connexion_user();
                        break;
                    case "crea_compte" : 
                        $this->ctlConnexion->crea_compte();
                        break;


                    //affichage page paiement    
                    case 'paiement':
                        return true;
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
                    case "client": //affichage de la page d'infos client
                        // if(isset("connect")){ //vérification si le visiteur est connecté
                        //     if(isset($GET_['id_client'])){//vérif que l'id client passé en paramètre soit bien un integer (protection contre injection)
                        //         $id_client = (int)$GET_['id_client'];
                        //         if($id_client>0)
                        //         $this-> ctrClient -> client($id_client);//affichage de la vue
                        //     }
                        // }else{// si pas connecté affichage de la page de connection
                        //     $this -> ctlPage-> connection();
                        // }
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
            echo $e->getMessage();
        }
    }
}
