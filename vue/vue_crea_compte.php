<?php   
    if(isset($valeur)){
        extract($valeur); 
    }
?>

<div id="crea_compte">
    <h1>
        Créer mon compte
    </h1>
    <form action="index.php?action=new_user" method="post">
        <div class="block-duo">
            <label for="nom_connex">
                <input type="text" id="nom_connex" <?php if(isset($nom)) echo'value='.$nom ?> name="nom_connex" placeholder="Nom" required>
            </label>
            <label for="prenom_connex">
                <input type="text" id="prenom_connex" <?php if(isset($prenom)) echo'value='.$prenom ?> name="prenom_connex" placeholder="Prénom" required>
            </label>
        </div>
        <div class="block-duo">
            <label for="tel_contact">
                <input type="tel" id="tel_connex" <?php if(isset($tel)) echo'value='.$tel ?> name="tel_connex" placeholder="Votre numéro de téléphone">
            </label>
            <label for="email_connex">
                <input type="email" id="email_connex" <?php if(isset($email)) echo'value='.$email ?> name="email_connex" placeholder="Mail" required>
            </label>
        </div>
        <label for="rue_connex">
            <input type="text" id="rue_connex" <?php if(isset($rue)) echo'value='.$rue ?> name="rue_connex" placeholder="N° de Rue" required>
        </label>
        <div class="block-duo">
            <label for="CP_connex">
                <input type="number" id="CP_connex" <?php if(isset($code_postal)) echo'value='.$code_postal ?> name="CP_connex" placeholder="Code Postal" required>
            </label>
            <label for="ville_connex">
                <input type="text" id="ville_connex" <?php if(isset($ville)) echo'value='.$ville ?> name="ville_connex" placeholder="Ville" required>
            </label>
        </div>
        <label for="pays_connex">
            <input type="text" id="pays_connex" <?php if(isset($pays)) echo'value='.$pays ?> name="pays_connex" placeholder="Pays" required>
        </label>
        <label for="mdp_connex">
            <input type="password" id="mdp_connex" name="mdp_connex" placeholder="Mot de passe" required>
        </label>
        <label for="mdp_confirm">
            <input type="password" id="mdp_confirm" name="mdp_confirm_connex" placeholder="Confirmer mon mot de passe" required>
        </label>
        <div class="pol_check">
            <input type="checkbox" id="accept_pol" name="accept_pol" value="true" required>
            <label for="accept_pol">J'accepte la 
                <a href="index.php?action=politique">politique de confidentialité </a>
            </label>
        </div>
        <input id="submit_compte" name="submit_compte" type="submit" value="Créer mon compte">
    </form>
    <?php
    if(isset($message)){
        echo $message;
        if(isset($valeur)){
            var_dump($valeur);
        }
    }
    ?>
</div>