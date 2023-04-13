<?php
extract($infos);
// var_dump($infos);


?>
<div id="filtre"></div>
<div id="aventure_solo">
    <?php
    // var_dump($game_latitude);
    $latitude = json_encode($game_latitude, JSON_PRETTY_PRINT);
    $longitude = json_encode($game_longitude, JSON_PRETTY_PRINT);
    ?>
    <div class="block-1">
        <img src="img/jeux/img_jeux_<?= $game_id ?>.png" alt="img escape game">
        <div class="block_carac">
            <h1>
                <?php
                if (!isset($_COOKIE["lang"])) {
                    echo $game_nom;
                } else {
                    if ($_COOKIE["lang"] == 'fr') {
                        echo $game_nom;
                    }
                    if ($_COOKIE['lang'] == 'eng') {
                        echo $game_nomeng;
                    }
                }
                ?>
            </h1>
            <h2>
                <?= lang::carac_esc ?>
            </h2>
            <div class="grid_genre">
                <div class="genre">
                    <p>
                        <?= lang::genre_esc ?>
                    </p>
                    <strong><?= $game_genre ?></strong>
                </div>
                <div class="genre">
                    <p>
                        <?= lang::lieu ?>
                    </p>
                    <strong>
                        <?php
                        if (!isset($_COOKIE["lang"])) {
                            echo $game_environnement;
                        } else {
                            if ($_COOKIE["lang"] == 'fr') {
                                echo $game_environnement;
                            }
                            if ($_COOKIE['lang'] == 'eng') {
                                echo $game_environnementeng;
                            }
                        }
                        ?>
                    </strong>
                </div>
            </div>
            <div class="flexitude">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                </svg>
                <p>
                    <?= lang::duree_esc ?><?= $game_duree ?> <?= lang::heures_esc ?><?= $game_parcours ?> km</p>
            </div>
            <div class="flexitude">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <p>
                    <?= lang::where_esc ?>
                    <?= $game_lieu ?>
                </p>
            </div>
            <p class="dif_aventure">
                <span>
                    <?= lang::niv_esc ?><?= $game_categorie ?>
                </span>
            </p>
        </div>
    </div>
    <div class="block-2">
        <div class="descr">
            <div class="left-column">
                <p>
                    <?php
                    if (!isset($_COOKIE["lang"])) {
                        echo $game_description;
                    } else {
                        if ($_COOKIE["lang"] == 'fr') {
                            echo $game_description;
                        }
                        if ($_COOKIE['lang'] == 'eng') {
                            echo $game_decriptioneng;
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
        <img src="img/jeux/jeux2_<?= $game_id ?>.jpg" alt="img secondaire aventure">
    </div>
    <div class="block-3">
        <div class="categorie_prix">
            <h2>
                <?= lang::cat_prix ?>
            </h2>
            <table>
                <tr>
                    <td><?= lang::deux_pers ?></td>
                    <td>
                        <?= $game_prix_3 ?>€
                    </td>
                </tr>
                <tr>
                    <td><?= lang::quatre_pers ?></td>
                    <td>
                        <?= $game_prix_4 ?>€
                    </td>
                </tr>
                <tr>
                    <td><?= lang::cinq_pers ?></td>
                    <td><?= $game_prix_5 ?>€</td>
                </tr>
                <tr>
                    <td><?= lang::six_pers ?></td>
                    <td><?= $game_prix_6 ?>€</td>
                </tr>
                <tr>
                    <td><?= lang::sept_pers ?></td>
                    <td><?= $game_prix_7 ?>€</td>
                </tr>
                <tr>
                    <td><?= lang::huit_pers ?></td>
                    <td><?= $game_prix_8 ?>€</td>
                </tr>
                <tr>
                    <td><?= lang::neuf_pers ?></td>
                    <td><?= $game_prix_9 ?>€</td>
                </tr>
                <tr>
                    <td><?= lang::dix_pers ?></td>
                    <td><?= $game_prix_10 ?>€</td>
                </tr>
                <tr>
                    <td><?= lang::onze_pers ?></td>
                    <td><?= $game_prix_11 ?>€</td>
                </tr>
                <tr>
                    <td><?= lang::douze_pers ?></td>
                    <td><?= $game_prix_12 ?>€</td>
                </tr>
                <tr>
                    <td><?= lang::plus_douze_pers ?></td>
                    <td><?= $game_prix_groupe ?>€</td>
                </tr>
            </table>
        </div>
        <div class="creneaux">
            <h2>
                <?= lang::cren_av ?>
            </h2>
            <div>
                <div class="creneau_offre">
                    <button class="offrir">
                        <a href="index.php?action=cadeaux"><?= lang::offrez_aventure ?></a>
                    </button>
                    <p>
                        <?= lang::or ?>
                    </p>
                </div>
                <div class="resa_aventure">
                    <h3><?= lang::reserver_av ?></h3>
                    <div>
                        <div class="choix jour">
                            <img src="img/icons/time-and-calendar.png" alt="icone calendrier">
                            <p>
                                <?= lang::choix_jour ?>
                            </p>
                        </div>
                        <div class="toggle toggle-calendar">
                            <div class="mois">
                                <button class=btn_moins>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </button>
                                <p class="month"></p>
                                <button class=btn_plus>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="bigCal">
                                <div class="jours">
                                    <div class="leJour"><?= lang::lundi ?></div>
                                    <div class="leJour"><?= lang::mardi ?></div>
                                    <div class="leJour"><?= lang::mercredi ?></div>
                                    <div class="leJour"><?= lang::jeudi ?></div>
                                    <div class="leJour"><?= lang::vendredi ?></div>
                                    <div class="leJour"><?= lang::samedi ?></div>
                                    <div class="leJour"><?= lang::dimanche ?></div>
                                </div>
                                <div class="cal">
                                    <form action='' method='post'>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="choix creneau">
                        <img src="img/icons/horloge.png" alt="icone horraire">
                        <p>
                            <?= lang::choix_creneau ?>
                        </p>
                    </div>
                    <div class="toggle choix_horraire">
                        <form action="" method="post">
                            <div>
                                <input class="inputCren" type="radio" id="9heure" data-heure='09' name="heure_jour">
                                <label class="labelCren" for="9heure">9h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="10heure" data-heure='10' name="heure_jour">
                                <label class="labelCren" for="10heure">10h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="11heure" data-heure='11' name="heure_jour">
                                <label class="labelCren" for="11heure">11h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="12heure" data-heure='12' name="heure_jour">
                                <label class="labelCren" for="12heure">12h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="13heure" data-heure='13' name="heure_jour">
                                <label class="labelCren" for="13heure">13h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="14heure" data-heure='14' name="heure_jour">
                                <label class="labelCren" for="14heure">14h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="15heure" data-heure='15' name="heure_jour">
                                <label class="labelCren" for="15heure">15h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="16heure" data-heure='16' name="heure_jour">
                                <label class="labelCren" for="16heure">16h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="17heure" data-heure='17' name="heure_jour">
                                <label class="labelCren" for="17heure">17h</label>
                            </div>
                            <div>
                                <input class="inputCren" type="radio" id="18heure" data-heure='18' name="heure_jour">
                                <label class="labelCren" for="18heure">18h</label>
                            </div>
                        </form>
                    </div>
                    <div class="choix groupe">
                        <img src="img/icons/contact.png" alt="icone groupe">
                        <p>
                            <?= lang::choix_nbr_personne ?>
                        </p>
                    </div>
                    <div class="toggle">
                        <div class="groupe_choix">
                            <input class="inputGro" type="radio" id="taille1" name="taille_groupe" data-grp="3" data-prix=<?= $game_prix_3 ?>>
                            <label class="labelGro" for="taille1">
                                <p>
                                    <?= lang::deux_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_3 ?> €
                                </p>
                            </label>
                            <input class="inputGro" type="radio" id="taille2" name="taille_groupe" data-grp="4" data-prix=<?= $game_prix_4 ?>>
                            <label class="labelGro" for="taille2">
                                <p>
                                    <?= lang::quatre_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_4 ?> €
                                </p>
                            </label>
                            <input class="inputGro" type="radio" id="taille3" name="taille_groupe" data-grp="5" data-prix=<?= $game_prix_5 ?>>
                            <label class="labelGro" for="taille3">
                                <p>
                                    <?= lang::cinq_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_5 ?> €
                                </p>
                            </label>

                            <input class="inputGro" type="radio" id="taille4" name="taille_groupe" data-grp="6" data-prix=<?= $game_prix_6 ?>>
                            <label class="labelGro" for="taille4">
                                <p>
                                    <?= lang::six_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_6 ?> €
                                </p>
                            </label>
                            <input class="inputGro" type="radio" id="taille5" name="taille_groupe" data-grp="7" data-prix=<?= $game_prix_7 ?>>
                            <label class="labelGro" for="taille5">
                                <p>
                                    <?= lang::sept_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_7 ?> €
                                </p>
                            </label>
                            <input class="inputGro" type="radio" id="taille6" name="taille_groupe" data-grp="8" data-prix=<?= $game_prix_8 ?>>
                            <label class="labelGro" for="taille6">
                                <p>
                                    <?= lang::huit_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_8 ?> €
                                </p>
                            </label>
                            <input class="inputGro" type="radio" id="taille7" name="taille_groupe" data-grp="9" data-prix=<?= $game_prix_9 ?>>
                            <label class="labelGro" for="taille7">
                                <p>
                                    <?= lang::neuf_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_9 ?> €
                                </p>
                            </label>
                            <input class="inputGro" type="radio" id="taille8" name="taille_groupe" data-grp="10" data-prix=<?= $game_prix_10 ?>>
                            <label class="labelGro" for="taille8">
                                <p>
                                    <?= lang::dix_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_10 ?> €
                                </p>
                            </label>
                            <input class="inputGro" type="radio" id="taille9" name="taille_groupe" data-grp="11" data-prix=<?= $game_prix_11 ?>>
                            <label class="labelGro" for="taille9">
                                <p>
                                    <?= lang::onze_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_11 ?> €
                                </p>
                            </label>
                            <input class="inputGro" type="radio" id="taille10" name="taille_groupe" data-grp="12" data-prix=<?= $game_prix_12 ?>>
                            <label class="labelGro" for="taille10">
                                <p>
                                    <?= lang::douze_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_12 ?> €
                                </p>
                            </label>
                            <input type="radio" id="taille_groupe" name="taille_groupe" data-grp="groupe" data-prix=<?= $game_prix_groupe ?>>
                            <label class="labelGro" for="">
                                <p>
                                    <?= lang::plus_douze_pers ?>
                                </p>
                                <p>
                                    <?= $game_prix_groupe ?> €
                                </p>
                            </label>
                            <button id="popup-panier" class="add" data-id="<?= $game_id ?>">
                                <img src="img/header/paniers.png" alt="Icone panier">
                                <p><?= lang::ajout_panier ?></p>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="add-to-cart">
            <p class="resa_selec"><?= lang::resa_success ?></p>
            <div class="choix_panier">
                <button class="continue_achat">
                    <p><?= lang::continuer_achat ?></p>
                </button>
                <button class="add-panier">
                    <img src="img/header/paniers.png" alt="Icone panier">
                    <a href="index.php?action=panier"><?= lang::aller_panier ?></a>
                </button>
            </div>               
        </div>
        <div class="add-to-cart no-fill">
            <p class="resa_selec"><?= lang::erreur_resa_av ?></p>
            <div class="choix_panier">
                <button class="continue_achat">
                    <p><?= lang::continuer_resa ?></p>
                </button>
            </div>               
        </div>
    </div>
    <div class="carte">
        <div id="map"></div>
    </div>
    <div class="block-avantage">
        <h2>
            <?= lang::avantages_resa ?>
        </h2>
        <div class="grid_avantage">
            <div class="icon_avant">
                <img src="img/icons/thunder.png" alt="icone éclair">
                <div>
                    <span><?= lang::resa_rapide ?></span>
                    <p>
                        <?= lang::reserver ?>
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/lhorloge.png" alt="icone horloge">
                <div>
                    <span><?= lang::acces ?></span>
                    <p>
                        <?= lang::jouretnuit ?>
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/pile-de-pieces.png" alt="icone piece de monnaie">
                <div>
                    <span><?= lang::prix_garantis ?></span>
                    <p>
                        <?= lang::frais_supp ?>
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/email.png" alt="icone enveloppe">
                <div>
                    <span><?= lang::confirmation ?></span>
                    <p>
                        <?= lang::billet ?>
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/cadenas-verrouille.png" alt="icone cadenas">
                <div>
                    <span><?= lang::paiement_ligne ?></span>
                    <p>
                        <?= lang::protocole ?>
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/smiley.png" alt="icone smiley">
                <div>
                    <span><?= lang::stress ?></span>
                    <p>
                        <?= lang::place_res ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$latitude = "<script>let lat=" . $latitude . "</script>";
$longitude = "<script>let long=" . $longitude . "</script>";
// var_dump($latitude);
echo $latitude;
echo $longitude;
?>