<?php
session_start();

require "controleur/ctlRouteur.class.php";
require "config/config.class.php";

if(!isset($_COOKIE["lang"])){
    require_once './langue/fr.php';
    // echo "langue/fr.php";
}
else{
    if($_COOKIE["lang"]=='fr'){
        require_once './langue/fr.php';
        echo 'langue/fr.php';
    }
    if($_COOKIE['lang']=='eng'){
        require_once './langue/eng.php';
        echo 'langue/eng.php';
    }
    if(!isset($_COOKIE['lang'])){
        require_once './langue/fr.php';
        echo 'langue/fr.php';
    }
}


$objrouteur = new ctlRouteur();
$objrouteur->Routage();






