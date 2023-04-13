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
            $req=$this->panier->getPanier($_SESSION["id"], session_id());
        }
        else{
            $req=$this->panier->getPanier('',session_id());
        }  
        $vue=new Vue('panier');
        // var_dump($req);
        $vue->afficher(array('reponse'=>$req));
    }

    public function del_elt_panier($id_elt){
        $elt_del=$this->panier->delEltPanier($id_elt);
        $this->panier();
   }

   public function valid_commande(){
        $commande=$this->panier->transi_panier_commande($_SESSION["id"]);  
        $this->panier();     
   }
   

}