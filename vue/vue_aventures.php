<?php
// var_dump($infos);
?>
<div id="aventures">
    <div class="block-1">
        <div>
            <h1>Plongez au coeur de <span>nos aventures</span></h1>
            <img class="img_boussole" src="img/page_aventures/boussole.jpg" alt="Photo d'une carte avec une boussole">
        </div>
        <div class="block-2">
            <div class="texte-block-1">
                <p>
                    Notre entreprise d'Escape Game en extérieur offre une expérience unique pour les amateurs de défis, d'aventure et d'exploration.
                </p>
                <p>
                    Nos jeux ont lieu dans des lieux pittoresques en plein air, tels que des parcs, des forêts, des rues historiques ou des quartiers animés, ce qui permet aux joueurs de découvrir de nouveaux endroits tout en résolvant des énigmes et en travaillant en équipe.
                </p>
            </div>
            <div class="text-block-2">
                <p>
                    Préparez-vous à affronter des défis uniques et à vivre une aventure inoubliable en plein air grâce à notre Escape Game en extérieur&nbsp;!
                </p>
            </div>
        </div>
    </div>
    <div id="aventure_famille">
        <h2>Les aventures à faire en famille</h2>
        <div class="block_trio_aventure">

        <?php
        //Affichage des escapes games qui sont accessibles aux novices
        foreach($infos as $game){
            if ($game["game_categorie"]=="familial"){
                ?>
            <div class="block_aventure">
                <h3><?=$game["game_nom"]?></h3>
                <img src="img/kredo/kredo.png" alt="Image escape game Kredo">
                <div class="genre_aventure">
                    <p>
                        Genre :
                    </p>
                    <p>
                        <span><?=$game["game_genre"]?></span>
                    </p>
                </div>
                <div class="caract_aventure">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <p>Durée : <?=$game["game_duree"]?> heures | environ <?=$game["game_parcours"]?> km</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <p>
                            à 
                            <?php//=$game["game_location"]?>
                        </p>
                    </div>
                </div>
                <p class="dif_aventure">
                    <span>
                        Convient aux joueurs débutants
                    </span>
                </p>
                <div class="button_ensavoir">
                    <button class="button_plus">
                        <a href="index.php?action=aventure&id_game=<?=$game["game_id"]?>">En savoir plus</a>
                    </button>
                </div>
            </div>
        <?php
            }
        }

        ?>
            <!-- <div class="block_aventure">
                <h3>Kredo Castello</h3>
                <img src="img/kredo/kredo.png" alt="Image escape game Kredo">
                <div class="genre_aventure">
                    <p>
                        Genre :
                    </p>
                    <p>
                        <span>Fantastique</span>
                    </p>
                </div>
                <div class="caract_aventure">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <p>Durée : 2 heures | environ 2,5 km</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <p>
                            à Ihringen am Kaiserstuhl
                        </p>
                    </div>
                </div>
                <p class="dif_aventure">
                    <span>
                        Convient aux joueurs débutants
                    </span>
                </p>
                <div class="button_ensavoir">
                    <button class="button_plus">
                        <a>En savoir plus</a>
                    </button>
                </div>
            </div> -->
        </div>
    </div>
    <div id="aventure_debutant">
        <h2>Les aventures pour les plus novices</h2>
        <div class="block_trio_aventure">
        <?php
        //Affichage des escapes games qui sont accessibles aux novices
        foreach($infos as $game){
            if ($game["game_categorie"]=="novice"){
                ?>
            <div class="block_aventure">
                <h3><?=$game["game_nom"]?></h3>
                <img src="img/kredo/kredo.png" alt="Image escape game Kredo">
                <div class="genre_aventure">
                    <p>
                        Genre :
                    </p>
                    <p>
                        <span><?=$game["game_genre"]?></span>
                    </p>
                </div>
                <div class="caract_aventure">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <p>Durée : <?=$game["game_duree"]?> heures | environ <?=$game["game_parcours"]?> km</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <p>
                            à 
                            <?php//=$game["game_location"]?>
                        </p>
                    </div>
                </div>
                <p class="dif_aventure">
                    <span>
                        Convient aux joueurs débutants
                    </span>
                </p>
                <div class="button_ensavoir">
                    <button class="button_plus">
                        <a href="index.php?action=aventure&id_game=<?=$game["game_id"]?>">En savoir plus</a>
                    </button>
                </div>
            </div>
<?php
            }
        }
        ?>

        <!-- affichage produit en html pas dynamique -->
            <!-- <div class="block_aventure">
                <h3>Kredo Castello</h3>
                <img src="img/kredo/kredo.png" alt="Image escape game Kredo">
                <div class="genre_aventure">
                    <p>
                        Genre :
                    </p>
                    <p>
                        <span>Fantastique</span>
                    </p>
                </div>
                <div class="caract_aventure">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <p>Durée : 2 heures | environ 2,5 km</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <p>
                            à Ihringen am Kaiserstuhl
                        </p>
                    </div>
                </div>
                <p class="dif_aventure">
                    <span>
                        Convient aux joueurs débutants
                    </span>
                </p>
                <div class="button_ensavoir">
                    <button class="button_plus">
                        <a>En savoir plus</a>
                    </button>
                </div>
            </div> -->
            <!-- <div class="block_aventure">
                <h3>Kredo Castello</h3>
                <img src="img/kredo/kredo.png" alt="Image escape game Kredo">
                <div class="genre_aventure">
                    <p>
                        Genre :
                    </p>
                    <p>
                        <span>Fantastique</span>
                    </p>
                </div>
                <div class="caract_aventure">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <p>Durée : 2 heures | environ 2,5 km</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <p>
                            à Ihringen am Kaiserstuhl
                        </p>
                    </div>
                </div>
                <p class="dif_aventure">
                    <span>
                        Convient aux joueurs débutants
                    </span>
                </p>
                <div class="button_ensavoir">
                    <button class="button_plus">
                        <a>En savoir plus</a>
                    </button>
                </div>
            </div> -->
        </div>
    </div>
    <div id="aventure_confirmée">
        <h2>Les aventures pour les plus confirmés</h2>
        <div class="block_trio_aventure">

            <!-- <div class="block_aventure">
                <h3>Kredo Castello</h3>
                <img src="img/kredo/kredo.png" alt="Image escape game Kredo">
                <div class="genre_aventure">
                    <p>
                        Genre :
                    </p>
                    <p>
                        <span>Fantastique</span>
                    </p>
                </div>
                <div class="caract_aventure">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <p>Durée : 2 heures | environ 2,5 km</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <p>
                            à Ihringen am Kaiserstuhl
                        </p>
                    </div>
                </div>
                <p class="dif_aventure">
                    <span>
                        Convient aux joueurs débutants
                    </span>
                </p>
                <div class="button_ensavoir">
                    <button class="button_plus">
                        <a>En savoir plus</a>
                    </button>
                </div>
            </div>
            <div class="block_aventure">
                <h3>Kredo Castello</h3>
                <img src="img/kredo/kredo.png" alt="Image escape game Kredo">
                <div class="genre_aventure">
                    <p>
                        Genre :
                    </p>
                    <p>
                        <span>Fantastique</span>
                    </p>
                </div>
                <div class="caract_aventure">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <p>Durée : 2 heures | environ 2,5 km</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <p>
                            à Ihringen am Kaiserstuhl
                        </p>
                    </div>
                </div>
                <p class="dif_aventure">
                    <span>
                        Convient aux joueurs débutants
                    </span>
                </p>
                <div class="button_ensavoir">
                    <button class="button_plus">
                        <a>En savoir plus</a>
                    </button>
                </div>
            </div> -->
            <?php
        //Affichage des escapes games qui sont accessibles aux novices
        foreach($infos as $game){
            if ($game["game_categorie"]=="expert"){
                ?>
            <div class="block_aventure">
                <h3><?=$game["game_nom"]?></h3>
                <img src="img/kredo/kredo.png" alt="Image escape game Kredo">
                <div class="genre_aventure">
                    <p>
                        Genre :
                    </p>
                    <p>
                        <span><?=$game["game_genre"]?></span>
                    </p>
                </div>
                <div class="caract_aventure">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <p>Durée : <?=$game["game_duree"]?> heures | environ <?=$game["game_parcours"]?> km</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#3E3535" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <p>
                            à 
                            <?php//=$game["game_location"]?>
                        </p>
                    </div>
                </div>
                <p class="dif_aventure">
                    <span>
                        Convient aux joueurs débutants
                    </span>
                </p>
                <div class="button_ensavoir">
                    <button class="button_plus">
                        <a href="index.php?action=aventure&id_game=<?=$game["game_id"]?>">En savoir plus</a>
                    </button>
                </div>
            </div>
<?php
            }
        }
        ?>
        </div>
    </div>
    <div id="futur_escape">
        <h2>Escape game à venir</h2>
        <div>
            <h3>23 Mai 2023</h3>
            <img src="img/page_aventures/new_escape.png" alt="">
        </div>

    </div>
</div>