<?php
    var_dump($infos);
    extract($infos);
    
?>
<div id="aventure_solo">
    <div class="block-1">
        <img src="img/kredo/kredo.png" alt="escape game Kredo castello">
        <div class="block_carac">
            <h1>
            <?=$game_nom?>

            </h1>
            <h2>
                Caractéristiques
            </h2>
            <div class="grid_genre">
                <div class="genre">
                    <p>
                        Genre :
                    </p>
                    <strong><?=$game_genre?></strong>
                </div>
                <div class="genre">
                   <strong>
                    <?=$game_environnement?>
                   </strong>
                   <p>
                    Escape
                   </p>
                </div>
            </div>
            <div class="flexitude">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                </svg>
                <p>
                    Durée : <?=$game_duree?> heures | environ <?=$game_parcours?> km</p>
            </div>
            <div class="flexitude">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                <p>
                    à 
                    <?=$game_lieu?>
                </p>
            </div>
            <p class="dif_aventure">
                <span>
                    Convient aux joueurs <?=$game_categorie?>
                </span>
            </p>
        </div>
    </div>
    <div class="block-2">
        <div class="descr">
            <div class="left-column">
                <p>
                    "Der Codex" se compose de 3 aventures qui se déroulent dans différents endroits de Kaiserstuhl à partir de mai 2023. Commandez maintenant ce coupon et sécurisez-vous pour 110 € par personne les 3 aventures en une seule fois.
                </p>
                <p>
                    Voyagez dans des époques différentes et plongez-vous dans les histoires de "Kredo Castello", "Spiritus Sancti" et "Vinea Flamara". Découvrez où se cache le secret - Qu'est-ce que le Codex ? Vous serez époustouflé - promis !
                </p>
            </div>
            <div class="rigt-column">
                <p>
                    Une aventure sauvage vous attend et nous vous promettons que des choses se produiront auxquelles vous ne vous attendiez pas !
                </p>
                <p>
                    Nous ne vous en dirons pas trop ! Réservez ce coupon et vivez l'aventure Escape la plus extraordinaire et la plus grande du monde !
                </p>
            </div>
        </div>
        <img src="img/page_aventure_solo/coridor.jpg" alt="">
    </div>
    <div class="block-3">
        <div class="categorie_prix">
            <h2>
                Catégories de prix
            </h2>
            <table>
               <tr>
                <td>Prix de groupe avec 2 - 3 personnes</td>
                <td>
                    <?=$game_prix_3?>€
                </td>
               </tr>
               <tr>
                <td>Prix de groupe avec 4 personnes</td>
                <td>
                <?=$game_prix_4?>€
                </td>
               </tr>
               <tr>
                <td>Prix de groupe avec 5 personnes</td>
                <td><?=$game_prix_5?>€</td>
               </tr>
               <tr>
                <td>Prix de groupe avec 6 personnes</td>
                <td><?=$game_prix_6?>€</td>
               </tr>
               <tr>
                <td>Prix de groupe avec 7 personnes</td>
                <td><?=$game_prix_7?>€</td>
               </tr>
               <tr>
                <td>Prix de groupe avec 8 personnes</td>
                <td><?=$game_prix_8?>€</td>
               </tr>
               <tr>
                <td>Prix de groupe avec 9 personnes</td>
                <td><?=$game_prix_9?>€</td>
               </tr>
               <tr>
                <td>Prix de groupe avec 10 personnes</td>
                <td><?=$game_prix_10?>€</td>
               </tr>
               <tr>
                <td>Prix de groupe avec 11 personnes</td>
                <td><?=$game_prix_11?>€</td>
               </tr>
               <tr>
                <td>Prix de groupe avec 12 personnes</td>
                <td><?=$game_prix_12?>€</td>
               </tr>
               <tr>
                <td>Prix de groupe avec plus de 12 personnes</td>
                <td><?=$game_prix_groupe?>€</td>
               </tr>
            </table>
        </div>
        <div class="creneaux">
            <h2>
                Créneaux disponibles
            </h2>
            <div>
                <div class="creneau_offre">
                    <button class="offrir">
                        <a href="index.php?action=cadeaux">Offrez l'aventure à quelqu'un</a>
                    </button>
                    <p>
                        ou
                    </p>
                </div>
                <div class="resa_aventure">
                    <h3>Réserver votre aventure</h3>
                    <div>
                        <div class="choix jour">
                            <img src="img/icons/time-and-calendar.png" alt="icone calendrier">
                            <p>
                                Choisir votre jour
                            </p>
                        </div>
                        <div class="toggle toggle-calendar">
                            <button class=btn_moins>-</button>
                            <!-- <p class="month"></p> -->
                            <button class=btn_plus>+</button>
                            <div class="cal"></div>
                        </div>
                    </div>
                    <div class="choix creneau">
                        <img src="img/icons/horloge.png" alt="icone horraire">
                        <p>
                            Choisir votre créneau
                        </p>
                    </div>
                    <div class="toggle choix_horraire">
                        <form action="" method="post">
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">9h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">10h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">11h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">12h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">13h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">14h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">15h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">16h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">17h</label>
                            </div>
                            <div>
                                <input type="checkbox" id="heure_jour" name="heure_jour">
                                <label for="">18h</label>
                            </div>
                        </form>
                    </div>
                    <div class="choix groupe">
                        <img src="img/icons/contact.png" alt="icone groupe">
                        <p>
                            Choisir le nombre de personnes
                        </p>
                    </div>
                    <div>
                        <div class="groupe_choix">
                            <input type="checkbox" id="taille_groupe" name="taille_groupe">
                            <label for="">
                                <p>
                                    Prix de groupe avec 2 - 3 personnes
                                </p>
                                <p>
                                    69,00€
                                </p>
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
    <div class="block-avantage">
        <h2>
            Les avantages de la réservation
        </h2>
        <div class="grid_avantage">
            <div class="icon_avant">
                <img src="img/icons/thunder.png" alt="icone éclair">
                <div>
                    <span>Réservation rapide et simple</span>
                    <p>
                        Réservez votre activité en quelques minutes seulement
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/lhorloge.png" alt="icone horloge">
                <div>
                    <span>Accessible 24h/24, 7j/7</span>
                    <p>
                        Notre site Web est ouvert jour et nuit
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/pile-de-pieces.png" alt="icone piece de monnaie">
                <div>
                    <span>Prix garantis</span>
                    <p>
                        Pas de frais supplémentaire
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/email.png" alt="icone enveloppe">
                <div>
                    <span>Confirmation immédiate</span>
                    <p>
                        Les billets sont envoyés sur votre adresse e-mail
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/cadenas-verrouille.png" alt="icone cadenas">
                <div>
                    <span>Paiement en ligne</span>
                    <p>
                        100 % sécurisé avec protocole de sécurisation SSL
                    </p>
                </div>
            </div>
            <div class="icon_avant">
                <img src="img/icons/smiley.png" alt="icone smiley">
                <div>
                    <span>Pas de stress</span>
                    <p>
                        Votre place est réservée
                    </p>
                </div>
            </div>         
        </div>
    </div>
</div>