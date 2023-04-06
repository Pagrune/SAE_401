<div id='mon_compte'>
    <h1>Mon compte</h1>
    <div class="modif_compte">
        <h2>Mes informations</h2>
        <form action="" method="post">
            <div class="block-duo">
                <label for="nom_compte">
                    <input type="text" id="nom_compte" <?php if(isset($nom) && !empty($user_nom)) echo'value='.$nom ?> name="nom_compte" placeholder="Nom" required>
                </label>
                <label for="prenom_compte">
                    <input type="text" id="prenom_compte" <?php if(isset($user_prenom) && !empty($user_prenom)) echo'value='.$user_prenom ?> name="prenom_compte" placeholder="Prénom" required>
                </label>
            </div>
            <div class="block-duo">
                <label for="tel_compte">
                    <input type="tel" id="tel_compte" <?php if(isset($tel) && !empty($tel)) echo'value='.$tel ?> name="tel_compte" placeholder="Votre numéro de téléphone">
                </label>
                <label for="email_compte">
                    <input type="email" id="email_compte" <?php if(isset($email) && !empty($email)) echo'value='.$email ?> name="email_compte" placeholder="Mail" required>
                </label>
            </div>
            <label for="rue_compte">
                <input type="text" id="rue_compte" <?php if(isset($rue) && !empty($rue)) echo'value='.$rue ?> name="rue_compte" placeholder="N° de Rue" required>
            </label>
            <div class="block-duo">
                <label for="CP_compte">
                    <input type="number" id="CP_compte" <?php if(isset($code_postal) && !empty($code_postal)) echo'value='.$code_postal ?> name="CP_compte" placeholder="Code Postal" required>
                </label>
                <label for="ville_compte">
                    <input type="text" id="ville_compte" <?php if(isset($ville) && !empty($ville)) echo'value='.$ville ?> name="ville_compte" placeholder="Ville" required>
                </label>
            </div>
            <label for="pays_connex">
                <input type="text" id="pays_connex" <?php if(isset($pays) && !empty($pays)) echo'value='.$pays ?> name="pays_connex" placeholder="Pays" required>
            </label>
            <label for="mdp_connex">
                <input type="password" id="mdp_connex" name="mdp_connex" placeholder="Mot de passe" required>
            </label>
            <label for="mdp_confirm">
                <input type="password" id="mdp_confirm" name="mdp_confirm_connex" placeholder="Confirmer mon mot de passe" required>
            </label>
            <input id="submit_compte" name="submit_compte" type="submit" value="Modifier mes informations">
        </form>
    </div>
    

    

<div class="mes_jeux">
    <h2>Mes jeux réservés</h2>
    <?php

    
    // var_dump($client);
    // var_dump($resa);
    if($resa==false){
        echo '<div class="no_resa">
        <img src="img/icons/manque.png" alt="icône rien">
        <p>Pas de réservation</p>
        </div>';
    }
    else{
        echo '<div class="mes_resa">
        <img src="img/kredo/kredo.png" alt="">
        <div class="info_resa">
            <h3>Kredo Castello</h3>
            <div class="resa_nbr">
                <img src="img/icons/contact.png" alt="icône nombre de personne">
                <p>
                    2-3 personnes
                </p>
            </div>
            <p class="tarif">69€</p>
        </div>
        <div class="creneau_resa">
            <h4>Mon créneau</h4>
            <div class="line"></div>
            <p class="date_resa">27/04/2023</p>
            <p class="heure_resa"> 15h30</p>
        </div>
    </div>';
    }
    ?>
    
</div>
   

    <button class="deconnexion">
        <img src="img/page_compte/logout.png" alt="icône de déconnexion">
        <a href="index.php?action=deconnexion">Déconnexion</a>
    </button>


</div>

