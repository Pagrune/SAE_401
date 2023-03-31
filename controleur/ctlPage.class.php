<?php
require_once "vue/vue.class.php";
require_once "modele/faq.class.php";

class ctlPage {
    private $page;
    private $faq;

    public function __construct(){
        $this->faq = new FAQ();
    }

    public function accueil(){
        $vue = new vue("accueil"); // Instancie la vue appropriée
        $vue->afficher(array()); 
    }
    
    public function contact(){
        $vue=new vue("contact");
        $vue->afficher(array());
    }
    public function faq(){
        $faq=$this->faq->getFaq();
        $vue=new vue("faq");
        $vue->afficher(array("faq"=>$faq));
    }


    /////****** PAGE CMS ******/////
    public function cgv(){
        $vue=new vue("cgv");
        $vue->afficher(array());
    }
    public function confi(){
        $vue=new vue("politique");
        $vue->afficher(array());
    }
    public function mentions(){
        $vue=new vue("mentions");
        $vue->afficher(array());
    }
    
    

    public function erreur($message){
        $vue = new vue("erreur"); // Instancie la vue appropriée
        $vue->afficher(array("message" => $message)); // Affiche la liste des erreur dans la vue
    }
}