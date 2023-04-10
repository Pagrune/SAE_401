<?php
// var_dump($most_popular);
// var_dump($new);
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
                    <img src="img/jeux/img_jeux_<?=$new['game_id']?>.png" alt="Img escape game">
                </div>
                <div class="news-right">
                    <div class="descri_news">
                    <!-- <?=lang::accueuil_right_news?> -->
                    <p>
                    <?php
                        if(!isset($_COOKIE["lang"])){
                            echo $new["game_description"];
                        }
                        else{
                            if($_COOKIE["lang"]=='fr'){
                                echo $new["game_description"];
                            }
                            if($_COOKIE['lang']=='eng'){
                                echo $new["game_decriptioneng"];
                            }
                        }
                        ?>
                    </p>
                    
                    </div>
                    <p>...</p>
                    <div>
                    <p>
                    <?=lang::duree_esc?><?= $new['game_duree'] ?> <?=lang::heures_esc?><?= $new['game_parcours'] ?> km
                    </p>
                        <strong>
                            <?php
                            echo lang::niv_esc;
                            echo $new['game_categorie'];
                            ?>
                        </strong>
                    </div>
                    <div class='button_news'>
                        <button class="button_plus">
                            <a href="index.php?action=aventure&id_game=<?=$new["game_id"]?>"> <?=lang::esp?></a>
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
                                        <?= lang::review_1 ?>
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
                                        <?= lang::review_2 ?>
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
                <img src="img/jeux/img_jeux_<?=$most_popular['game_id']?>.png" alt="Img escape game">
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
                <div class="popular_button">
                    <button class="button_plus">
                        <a href="index.php?action=aventure&id_game=<?=$most_popular["game_id"]?>"> <?=lang::esp?></a>
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