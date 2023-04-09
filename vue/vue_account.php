<div id='mon_compte'>
    <h1><?=lang::compte_titre?></h1>
    <div class="modif_compte">
        <h2><?=lang::compte_h2_info?></h2>
        <form action="" method="post">
            <div class="block-duo">
                <label for="nom_compte">
                    <input type="text" id="nom_compte" <?php if(isset($client['user_nom']) && !empty($client['user_nom'])) echo'value='.$client['user_nom'] ?> name="nom_compte" placeholder="<?=lang::compte_nom?>" required>
                </label>
                <label for="prenom_compte">
                    <input type="text" id="prenom_compte" <?php
                    if(isset($client['user_prenom']) && !empty($client['user_prenom'])) echo'value='.$client['user_prenom'] ?> name="prenom_compte" placeholder="<?=lang::compte_prenom?>" required>
                </label>
            </div>
            <div class="block-duo">
                <label for="tel_compte">
                    <input type="tel" id="tel_compte" <?php if(isset($client['user_telephone']) && !empty($client['user_telephone'])) echo'value='.$client['user_telephone'] ?> name="tel_compte" placeholder="<?=lang::compte_tel?>">
                </label>
                <label for="email_compte">
                    <input type="email" id="email_compte" <?php if(isset($client['user_mail']) && !empty($client['user_mail'])) echo'value='.$client['user_mail'] ?> name="email_compte" placeholder="<?=lang::compte_mail?>" required>
                </label>
            </div>
            <label for="rue_compte">
                <input type="text" id="rue_compte" <?php if(isset($client['user_adresse']) && !empty($client['user_adresse'])) echo'value='.$client['user_adresse'] ?> name="rue_compte" placeholder="<?=lang::compte_rue?>" required>
            </label>
            <div class="block-duo">
                <label for="CP_compte">
                    <input type="text" id="CP_compte" <?php if(isset($client['user_codepostal']) && !empty($client['user_codepostal'])) echo'value='.$client['user_codepostal'] ?> name="CP_compte" placeholder="<?=lang::compte_cp?>" required>
                </label>
                <label for="ville_compte">
                    <input type="text" id="ville_compte" <?php if(isset($client['user_ville']) && !empty($client['user_ville'])) echo'value='.$client['user_ville'] ?> name="ville_compte" placeholder="<?=lang::compte_ville?>" required>
                </label>
            </div>
            <label for="pays_connex">
                <input type="text" id="pays_connex" <?php if(isset($client['user_pays']) && !empty($client['user_pays'])) echo'value='.$client['user_pays'] ?> name="pays_connex" placeholder="<?=lang::compte_pays?>" required>
            </label>
            <label for="mdp_connex">
                <input type="password" id="mdp_connex" name="mdp_connex" placeholder="<?=lang::compte_mdp?>" required>
            </label>
            <label for="mdp_confirm">
                <input type="password" id="mdp_confirm" name="mdp_confirm_connex" placeholder="<?=lang::compte_conf_mdp?>" required>
            </label>
            <input id="submit_compte" name="submit_compte" type="submit" value="<?=lang::compte_modif_info?>">
        </form>
    </div>
    

    

<div class="mes_jeux">
    <h2><?=lang::compte_h2_jeux?></h2>
    <?php

    
    // var_dump($client);
    // var_dump($resa);
    if($resa==false){
        echo '<div class="no_resa">
        <img src="img/icons/manque.png" alt="icône rien">
        <p>'.lang::compte_no_resa.'</p>
        </div>';
    }
    else{
        
        foreach($resa as $reservation){
            ?>
       
        <div class="mes_resa">
        <img src="img/kredo/kredo.png" alt="">
        <div class="info_resa">
            <h3><?php
            if($_COOKIE['lang']=="fr" or !isset($_COOKIE["lang"])){
                echo $reservation["game_nom"];
            }
            else{
                echo $reservation["game_nomeng"];
            }
            ?>
            
        </h3>
            <div class="resa_nbr">
                <img src="img/icons/contact.png" alt="icône nombre de personne">
                <p>
                <?=$reservation["resa_nbpersonne"]?> <?=lang::compte_personne?>
                </p>
            </div>
            <p class="tarif"><?=$reservation["resa_prix"]?>€</p>
        </div>
        <div class="creneau_resa">
            <h4><?=lang::compte_creneau?></h4>
            <div class="line"></div>
            <p class="date_resa"><?=$reservation["resa_date"]?></p>
            <p class="heure_resa"> <?=$reservation["resa_horaire"]?>h</p>
        </div>
    </div>
    <?php
        }
    }
    ?>
    
</div>
   

    <button class="deconnexion">
        <img src="img/page_compte/logout.png" alt="icône de déconnexion">
        <a href="index.php?action=deconnexion"><?=lang::compte_deconnexion?></a>
    </button>


</div>

