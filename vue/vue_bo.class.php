<?php
/*************************************
Classe chargée de l'affichage des vues
*************************************/
class vue_bo {

  private $fichierVue;    // Nom du fichier permettant de générer le contenu pour la vue en fonction de l'action demandée
                          // Exemple : "vue/vueAccueil.php", "vue/vueArticles.php", "vue/vueErreur.php", ...

  /*******************************************************
  Initialise le nom du fichier requis pour générer le contenu à afficher dans la vue correspondant à l'action
    Entrée : 
      action [string] : action demandée

    Sortie :
      $fichierVue [string] : nom du fichier requis pour générer le contenu à afficher dans la vue

    Retour : 
      
  *******************************************************/
  public function __construct($action) {
    $this->fichierVue = "vue/bo/vue_".$action.".php";
  }

  /*******************************************************
  Affiche dans le gabarit la vue correspondant à l'action demandée
    Entrée : 
      data [array] : tableau associatif contenant les données à afficher dans la vue
  
    Retour : 
      
  *******************************************************/
  public function afficher_bo($data) {
    // $title = TITREONGLET;
    // $header = NOMSITE;
//    $titre = "";      // Le titre de la page est généré dans le fichierVue
    // $menu = MENU;
    
    extract($data);   // Extrait les valeurs du tableau associatif $data dans des variables 
    ob_start();
    var_dump($this->fichierVue);
    require $this->fichierVue;   // Génère le contenu de la page en fonction de l'action

    $contenu = ob_get_clean();
    
    $footer = "&copy; MMI Mulhouse";
  
    require "bo/gabarit_bo.php";
  }
}