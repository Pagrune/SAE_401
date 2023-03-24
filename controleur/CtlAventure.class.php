<?php

require_once "vue/vue.class.php";
require_once "modele/escGame.class.php";

class CtlAventure{
    private $aventure;

    public function __construct(){
        $this->aventure = new EscGame();
    }

    public function aventure_list(){
        $aventure_total=$this->aventure->getEscGames();
        $vue=new vue("aventures");
        $vue->afficher(array("infos"=>$aventure_total));
    }

    public function aventure($id_game){
        $infos_aventure = $this->aventure->getEscGame($id_game);
        if($infos_aventure==false){
            $this->aventure_list();
        }
        else{
            $vue=new vue("aventure");
            $vue->afficher(array("infos"=>$infos_aventure[0]));
        }
        
    }



    
}