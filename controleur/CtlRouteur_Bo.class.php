<?php

require "ctlPage.class.php";
require "ctlClient.class.php";
require "ctlAventure.class.php";
require 'ctlCadeaux.class.php';
require 'CtlConnexion.class.php';
require 'CtlPanier.class.php';

class ctlRouteur
{

    


    private $ctlEscGame;
    private $ctlClient;
    private $ctlCPage;
    private $ctlCadeau;
    private $ctlConnexion;
    private $ctlPanier;
    private $ctlResa;


    public function __construct()
    {
        $this->ctlClient = new ctlClient();
        $this->ctlEscGame = new ctlAventure();
        $this->ctlPage = new ctlPage();
        $this->ctlCadeau= new ctlCadeau();
        $this->ctlConnexion= new ctlConnexion();
        $this->ctlPanier= new ctlPanier();
        $this->ctlResa= new CtlResa();
    }


    public function ctlRouteurBo(){

        if (isset($_GET["action"])) {
            switch ($_GET["action"]) {
                case 'réservation':
                    $this->ctlResa->getResa();
                    break;

                case 'client':
                    $this->ctlResa->getResa();
                break;

                case 'game':
                    $this->ctlResa->getResa();
                break;

                default : 
                    $this->ctlPage->Bo();


            }
        else{
            require 'vue/vue_accueil.php';
        }}
    }

