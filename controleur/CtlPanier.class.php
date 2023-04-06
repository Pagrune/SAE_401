<?php
require_once "vue/vue.class.php";
require_once "modele/panier.class.php";

class ctlPanier {

    private $panier;

    public function __construct(){
        $this->panier=new panier();
    }


    
    public function panier(){
        if(isset($_SESSION["id"])){
            $with_session='';
        }
        else{
            $with_session=true;
        }  
        $req=$this->panier->getPanier($with_session, session_id());
        $vue=new Vue('panier');
        var_dump($req);
        $vue->afficher(array('reponse'=>$req));
    }

    public function del_elt_panier($id_elt){
        $elt_del=$this->panier->delEltPanier($id_elt);
        $this->panier();
   }

}