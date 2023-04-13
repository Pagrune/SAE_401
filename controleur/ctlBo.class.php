<?php

require_once "modele/client.class.php";
require_once "modele/resa.class.php";
require_once "modele/escGame.class.php";
require_once "modele/faq.class.php";
require_once "vue/vue_bo.class.php";


class ctlBo
{

    private $resa;
    private $client;
    private $game;
    private $faq;

    public function __construct()
    {
        $this->game = new EscGame();
        $this->resa = new resa();
        $this->client = new client();
        $this->faq = new faq();
    }

    public function logout_bo()
    {
        setcookie('connect_bo', null, time() - 3600);
        $this->vue = new vue_bo('bo_connexion');
        $this->vue->afficher_bo(array());
    }

    public function connexion()
    {
        if (isset($_POST["mdp"]) && isset($_POST["mdp"])) {
            if ($_POST["mdp"] == 'root' and $_POST["mdp"] == 'root') {
                setcookie('connect_bo', true);
                echo '<a href="bo.php">accéder au Back-office</a>';
            } else {
                $this->vue = new vue_bo('bo_connexion');
                $this->vue->afficher_bo(array());
            }
        } else {
            $this->vue = new vue_bo('bo_connexion');
            $this->vue->afficher_bo(array());
        }
    }

    public function getResas()
    {
        $result = $this->resa->getResa();
        $this->vue = new vue_bo('resa_bo');
        $this->vue->afficher_bo(array("resas" => $result));
    }

    public function modif_resa($id_resa)
    {
        $result = $this->resa->modif_resa($_POST['horaire'], $_POST['id_client'], $_POST['id_game'], $_POST['nb_personne'], $_POST['date'], $_POST['prix'], $id_resa);
        $this->getResas();
    }

    public function new_faq()
    {
        $req = $this->faq->enreg_faq($_POST['questionfr'], $_POST['repfr'], $_POST['questionen'], $_POST['repen']);
        var_dump($req);
        $this->enreg_faq();
    }

    public function getFaqs()
    {
        $result = $this->faq->getFaq();
        $this->vue = new vue_bo('question');
        $this->vue->afficher_bo(array("faq" => $result));
    }

    public function modif_faq($id_faq)
    {
        $req = $this->faq->modif_faq($_POST['questionfr'], $_POST['repfr'], $_POST['questionen'], $_POST['repen'], $id_faq);
        $this->getFaqs();
    }
    //nul

    public function getGames()
    {
        $result = $this->game->getEscGames();
        $this->vue = new vue_bo('game_bo');
        $this->vue->afficher_bo(array("games" => $result));
    }

    public function modif_game($id_game)
    {
        $req = $this->game->modif_game($_POST['game_genre'], $_POST['duree'], $_POST['lieu'], $_POST['categorie'], $_POST['nbjoueur'], $_POST['environnement'], $_POST['environnementeng'], $_POST['nom'], $_POST['nomeng'], $_POST['description'], $_POST['decriptioneng'], $_POST['prix'], $_POST['parcours'], $_POST['nbenigme'], $_POST['latitude'], $_POST['longitude'], $_POST['prix_3'], $_POST['prix_4'], $_POST['prix_5'], $_POST['prix_6'], $_POST['prix_7'], $_POST['prix_8'], $_POST['prix_9'], $_POST['prix_10'], $_POST['prix_11'], $_POST['prix_12'], $_POST['prix_groupe'], $id_game);
        var_dump($req);
        if (isset($_FILES['image_escape']) && !empty($_FILES['image_escape'])) {
            var_dump('coucou');
            $infos = new SplFileInfo($_FILES['image_escape']['name']);
            $extension_upload = $infos->getExtension();
            $extensions_autorisees = array('png');
            $allowed_types = array('image/png');
            $max_size = 20 * 1024 * 1024; // 10 Mo

            if ($_FILES['image_escape']['error'] !== UPLOAD_ERR_OK) {
                echo '<p>Erreur lors du téléversement du fichier.</p>';
                // $this->getGames();
                // die();
            } else {
                $file_type = $_FILES['image_escape']['type'];
                $file_size = $_FILES['image_escape']['size'];
            }
            if (!in_array($file_type, $allowed_types)) {
                echo '<p>Le format de fichier n\'est pas supporté.</p>';
                // $this->getGames();
                // die();
            } elseif ($file_size > $max_size) {
                echo '<p>Le fichier est trop volumineux.</p>';
                // $this->getGames();
                // die();
            } else {

                move_uploaded_file($_FILES['image_escape']['tmp_name'], './img/jeux/img_jeux_' . $id_game . '.' . $extension_upload);
                echo '<p>Le fichier a été téléversé avec succès.</p>';
            }
        }
        if (isset($_FILES['image_contexte']) && !empty($_FILES['image_escape'])) {
            $infos = new SplFileInfo($_FILES['image_contexte']['name']);
            $extension_upload = $infos->getExtension();
            $extensions_autorisees = array('png');
            $allowed_types = array('image/png');
            $max_size = 20 * 1024 * 1024; // 10 Mo

            if ($_FILES['image_contexte']['error'] !== UPLOAD_ERR_OK) {
                echo '<p>Erreur lors du téléversement du fichier.</p>';
            } else {
                $file_type = $_FILES['image_escape']['type'];
                $file_size = $_FILES['image_escape']['size'];
            }
            if (!in_array($file_type, $allowed_types)) {
                echo '<p>Le format de fichier n\'est pas supporté.</p>';
            } elseif ($file_size > $max_size) {
                echo '<p>Le fichier est trop volumineux.</p>';
            } else {

                move_uploaded_file($_FILES['image_contexte']['tmp_name'], './img/jeux/img_jeux2_' . $id_game . '.' . $extension_upload);
                echo '<p>Le fichier a été téléversé avec succès.</p>';
            }
        }
        // $req=$this->game->modif_game($_POST['game_genre'],$_POST['duree'],$_POST['lieu'],$_POST['categorie'],$_POST['nbjoueur'],$_POST['environnement'],$_POST['environnementeng'],$_POST['nom'],$_POST['nomeng'],$_POST['description'],$_POST['decriptioneng'],$_POST['prix'],$_POST['parcours'],$_POST['nbenigme'], $_POST['latitude'], $_POST['longitude'],$_POST['prix_3'],$_POST['prix_4'],$_POST['prix_5'],$_POST['prix_6'],$_POST['prix_7'],$_POST['prix_8'],$_POST['prix_9'],$_POST['prix_10'],$_POST['prix_11'],$_POST['prix_12'],$_POST['prix_groupe'], $id_game);
        // var_dump($req);
        $this->getGames();
    }

    public function new_game()
    {
        if (isset($_POST['valider']) && $_POST['valider'] == 'valider') {
            $result = $this->game->getEscGames();
            $nombre = count($result);
            $nombre++;
            if (isset($_FILES['image_escape'])) {
                $infos = new SplFileInfo($_FILES['image_escape']['name']);
                $extension_upload = $infos->getExtension();
                $extensions_autorisees = array('png');
                $allowed_types = array('image/png');
                $max_size = 20 * 1024 * 1024; // 10 Mo

                if ($_FILES['image_escape']['error'] !== UPLOAD_ERR_OK) {
                    echo '<p>Erreur lors du téléversement du fichier.</p>';
                    $this->getGames();
                    // die();
                } else {
                    $file_type = $_FILES['image_escape']['type'];
                    $file_size = $_FILES['image_escape']['size'];
                }
                if (!in_array($file_type, $allowed_types)) {
                    echo '<p>Le format de fichier n\'est pas supporté.</p>';
                    $this->getGames();
                    // die();
                } elseif ($file_size > $max_size) {
                    echo '<p>Le fichier est trop volumineux.</p>';
                    $this->getGames();
                    // die();
                } else {

                    move_uploaded_file($_FILES['image_escape']['tmp_name'], './img/jeux/img_jeux_' . $nombre . '.' . $extension_upload);
                    echo '<p>Le fichier a été téléversé avec succès.</p>';
                }
            }
            if (isset($_FILES['image_contexte'])) {
                $infos = new SplFileInfo($_FILES['image_contexte']['name']);
                $extension_upload = $infos->getExtension();
                $extensions_autorisees = array('png');
                $allowed_types = array('image/png');
                $max_size = 20 * 1024 * 1024; // 10 Mo

                if ($_FILES['image_contexte']['error'] !== UPLOAD_ERR_OK) {
                    echo '<p>Erreur lors du téléversement du fichier.</p>';
                } else {
                    $file_type = $_FILES['image_escape']['type'];
                    $file_size = $_FILES['image_escape']['size'];
                }
                if (!in_array($file_type, $allowed_types)) {
                    echo '<p>Le format de fichier n\'est pas supporté.</p>';
                } elseif ($file_size > $max_size) {
                    echo '<p>Le fichier est trop volumineux.</p>';
                } else {
                    move_uploaded_file($_FILES['image_contexte']['tmp_name'], './img/jeux/img_jeux2_' . $nombre . '.' . $extension_upload);
                    echo '<p>Le fichier a été téléversé avec succès.</p>';
                }
                // var_dump($_POST['game_genre'],(int)$_POST['duree'],$_POST['lieu'],$_POST['categorie'],(int)$_POST['nbjoueur'],$_POST['environnement'],$_POST['environnementeng'],$_POST['nom'],$_POST['nomeng'],$_POST['description'],$_POST['decriptioneng'],(float)$_POST['prix'],(float)$_POST['parcours'],(int)$_POST['nbenigme'],(float)$_POST['latitude'],(float)$_POST['longitude'],(float)$_POST['prix_3'],(float)$_POST['prix_4'],(float)$_POST['prix_5'],(float)$_POST['prix_6'],(float)$_POST['prix_7'],(float)$_POST['prix_8'],(float)$_POST['prix_9'],(float)$_POST['prix_10'],(float)$_POST['prix_11'],(float)$_POST['prix_12'],(float)$_POST['prix_groupe']);


                $req = $this->game->enreg_game($_POST['game_genre'], (int)$_POST['duree'], $_POST['lieu'], $_POST['categorie'], (int)$_POST['nbjoueur'], $_POST['environnement'], $_POST['environnementeng'], $_POST['nom'], $_POST['nomeng'], $_POST['description'], $_POST['decriptioneng'], (float)$_POST['prix'], (float)$_POST['parcours'], (int)$_POST['nbenigme'], $_POST['latitude'], $_POST['longitude'], (float)$_POST['prix_3'], (float)$_POST['prix_4'], (float)$_POST['prix_5'], (float)$_POST['prix_6'], (float)$_POST['prix_7'], (float)$_POST['prix_8'], (float)$_POST['prix_9'], (float)$_POST['prix_10'], (float)$_POST['prix_11'], (float)$_POST['prix_12'], (float)$_POST['prix_groupe']);

                var_dump($req);
                $this->getGames();
            }
        } else {
            $this->new_game_form();
        }
    }

    public function del_game($id_game)
    {
        $req = $this->game->delete_game($id_game);
        $this->getGames();
    }

    public function del_faq($id_faq)
    {
        $req = $this->faq->delete_faq($id_faq);
        $this->getFaqs();
    }

    public function new_game_form()
    {
        $this->vue = new vue_bo('new_game');
        $this->vue->afficher_bo(array());
    }

    public function getClients()
    {
        $result = $this->client->getClients();
        $this->vue = new vue_bo('client_bo');
        $this->vue->afficher_bo(array("clients" => $result));
    }
    public function del_user($user)
    {
        $req = $this->client->delete_client($user);
        $this->getClients();
    }
    public function enreg_faq()
    {

        $this->vue = new vue_bo('new_question');
        $this->vue->afficher_bo(array());
    }
}
