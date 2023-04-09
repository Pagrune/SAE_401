<?php
var_dump($most_popular);
?>

<div id="home">
    <div class="block-1">
        <div>
            <h1><?= lang::accueuil_titre ?></h1>
            <iframe id="video_home" width="97%" height="315" src="https://www.youtube.com/embed/VLhQo71FOt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="block-2">
            <div class="texte-block-1">
                <?= lang::accueuil_text_block_1 ?>
            </div>
            <div class="text-block-2">
                <?= lang::accueuil_text_block_2 ?>
            </div>
        </div>
    </div>
    <div class="block-3">
        <div class="block-3-1">
            <div class="block-news">
                <div class="news-left">
                    <?= lang::accueuil_left_news ?>
                    <img src="img/kredo/kredo.png" alt="Kredo castello escape game">
                </div>
                <div class="news-right">
                    <div>
                    <!-- <?=lang::accueuil_right_news?> -->
                        <?php
                        if(!isset($_COOKIE["lang"])){
                            echo $most_popular["game_description"];
                        }
                        else{
                            if($_COOKIE["lang"]=='fr'){
                                echo $most_popular["game_description"];
                            }
                            if($_COOKIE['lang']=='eng'){
                                echo $most_popular["game_decriptioneng"];
                            }
                        }
                        ?>
                    </div>
                    <div>
                    <p>
                    <?=lang::duree_esc?><?= $most_popular['game_duree'] ?> <?=lang::heures_esc?><?= $most_popular['game_parcours'] ?> km
                    </p>
                        <strong>
                            <?php
                            echo lang::niv_esc;
                            echo $most_popular['game_categorie'];
                            ?>
                        </strong>
                    </div>
                    <div class='button_news'>
                        <button class="button_plus">
                            <a> <?=lang::esp?></a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="block-avis">
                <h3><?= lang::accueuil_bloc_avis ?></h3>
                <div class="block_slider">
                    <img class="arrow_slider arrow_gauche" src="img/slidder/arrow_left.png" alt="icône flèche gauche">
                    <div id="slider">

                        <div class="slider-parent">
                            <div class="slide">
                                <div class="block-reviews-star">
                                    <div class="etoile">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile avis">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile avis">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile avis">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile avis">
                                        <img src="img/reviews/etoile_vide.png" alt="étoile vide avis">
                                    </div>
                                    <p>Julie Lamome</p>
                                </div>
                                <div class="desc_reviews">
                                    <p>
                                        J’ai fait Kredo Castello et j’ai adoré avec la famille ! Nous cherchions de nouvelles choses à faire en famille et nous avons été servi ! Nous allons revenir à la prochaine réunion de famille c’est sûr.
                                    </p>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="block-reviews-star">
                                    <div class="etoile">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile avis">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile avis">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile avis">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile avis">
                                        <img src="img/reviews/etoile_pleine.png" alt="étoile vide avis">
                                    </div>
                                    <p>Benji Lebizarre</p>
                                </div>
                                <div class="desc_reviews">
                                    <p>
                                        Je suis une personne fan des escape game et la nature. Et Kaiserstuhl Escape est la fusion des deux parfaite !
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <img class="arrow_slider arrow_droite" src="img/slidder/arrow_right.png" alt="icône flèche droite">
                </div>
            </div>
        </div>
        <div class="block-popular">
            <?= lang::accueuil_bloc_popular ?>
            <div class="popular-img">
                <img src="img/kredo/kredo.png" alt="Kredo castello escape game">
                <div>
                    <p>
                        Durée : 2 heures | environ 2,5 km
                        <br>
                        à Ihringen am Kaiserstuhl
                    </p>
                    <strong>
                        Convient aux joueurs confirmés
                    </strong>
                </div>
                <div class="popular_button">
                    <button class="button_plus">
                        <a> <?=lang::esp?></a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="block-4">
        <div>
            <?= lang::accueuil_bloc_4 ?>
        </div>
        <div>
            <img src="img/kredo/home.png" alt="">
        </div>
    </div>
    <div class="block-5">
        <?= lang::accueuil_bloc_5_tire ?>
        <div class="block-5-1">
            <img src="img/kredo/home_2.png" alt="">
            <div class="text-block-team-building">
                <?= lang::accueuil_bloc_5 ?>
            </div>
        </div>


    </div>
</div>