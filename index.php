<?php
session_start();
require "controleur/ctlRouteur.class.php";
require "config/config.class.php";
if($_COOKIE["lang"]=='fr'){
    require_once 'langue/fr.php';
    echo 'langue/fr.php';
}
if($_COOKIE['lang']=='eng'){
    require_once 'langue/eng.php';
    echo 'langue/eng.php';
}
if(!isset($_COOKIE['lang'])){
    require_once 'langue/fr.php';
    echo 'langue/fr.php';
}

$objrouteur = new ctlRouteur();
$objrouteur->Routage();



echo '<script>
let target_lang = document.querySelectorAll(".choix_lang");
target_lang.forEach(e=>{
    e.addEventListener("click", function(){
        let lang=this.getAttribute("data-lang");
        document.cookie = "lang="+lang;
        console.log(document.cookie);
    });
});</script>';


