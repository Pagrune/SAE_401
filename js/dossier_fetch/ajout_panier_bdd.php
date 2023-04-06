<?php
session_start();
require_once ('../../modele/panier.class.php');
require_once ('../../config/config.class.php');
// var_dump(session_id());
// die();
 echo 'labla';
if(isset($_POST["id"]) && isset($_POST["heure"]) && isset($_POST["date"]) && isset($_POST["nombre_personne"])&& isset($_POST["prix"])){
    if(isset($_SESSION["id"])){
        $id_user=intval($_SESSION["id"]);
    }
    else{
        $id_user='';
    }
    $panier=new Panier();

    $id_session= session_id();
    var_dump($id_session);
    $id_game=intval($_POST["id"]);
    var_dump($id_game);
    $id_user=intval($id_user);
    var_dump($id_user);
    $date=$_POST["date"];
    var_dump($date);
    $heure=intval($_POST["heure"]);
    var_dump($heure);
    $nombre_personne=strval($_POST["nombre_personne"]);
    var_dump($nombre_personne);
    $prix=floatval($_POST["prix"]);
    var_dump($prix);
    
    $resultat=$panier->EnregPanier($id_game, $id_user, $id_session, $date, $heure, $nombre_personne,$prix);
    var_dump($resultat);


    

}
else{
    echo 'erreur de passage d\'infos';
}