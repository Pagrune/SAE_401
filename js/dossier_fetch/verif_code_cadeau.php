<?php
session_start();

require_once ('../../modele/cadeaux.class.php');
require_once ('../../config/config.class.php');

$cadeau=new cadeau();

$cadeau_checked=$cadeau->verifCadeau($_POST["code"]);

if($cadeau_checked!=0){
    $message= 'code valide';
    $cadeau->delete_carte($_POST["code"]);
}
else
    $message='ce code n\'est pas valide';

    // echo $message;
    echo json_encode($cadeau_checked);