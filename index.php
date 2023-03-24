<?php
session_start();
require "controleur/ctlRouteur.class.php";
require "config/config.class.php";


$objrouteur = new ctlRouteur();
$objrouteur->Routage();
