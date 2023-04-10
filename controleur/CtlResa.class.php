<?php

require_once "modele/resa.class.php";
// require_once "modele/"

class CtlResa{

     private $resa;

     public function __construct(){
        $this->resa=new Resa();
     }

     public function pack(){
        $pack_infos=$this->resa->getPack($id_pack);
     }
} 