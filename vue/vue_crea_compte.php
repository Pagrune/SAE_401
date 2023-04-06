<?php   
if(isset($valeur)){
    extract($valeur);
}
?>

<div id="crea_compte">
    <h1>
        <?=lang::compte_crea?>
    </h1>
    <form action="index.php?action=new_user" method="post">
        <div class="block-duo">
            <label for="nom_connex">
                <input type="text" id="nom_connex" <?php if(isset($nom) && !empty($nom)) echo'value='.$nom ?> name="nom_connex" placeholder="<?=lang::compte_nom?>" required>
            </label>
            <label for="prenom_connex">
                <input type="text" id="prenom_connex" <?php if(isset($prenom) && !empty($prenom)) echo'value='.$prenom ?> name="prenom_connex" placeholder="<?=lang::compte_prenom?>" required>
            </label>
        </div>
        <div class="block-duo">
            <label for="tel_contact">
                <input type="tel" id="tel_connex" <?php if(isset($tel) && !empty($tel)) echo'value='.$tel ?> name="tel_connex" placeholder="<?=lang::compte_tel?>">
            </label>
            <label for="email_connex">
                <input type="email" id="email_connex" <?php if(isset($email) && !empty($email)) echo'value='.$email ?> name="email_connex" placeholder="<?=lang::compte_mail?>" required>
            </label>
        </div>
        <label for="rue_connex">
            <input type="text" id="rue_connex" <?php if(isset($rue) && !empty($rue)) echo'value='.$rue ?> name="rue_connex" placeholder="<?=lang::compte_rue?>" required>
        </label>
        <div class="block-duo">
            <label for="CP_connex">
                <input type="number" id="CP_connex" <?php if(isset($code_postal) && !empty($code_postal)) echo'value='.$code_postal ?> name="CP_connex" placeholder="<?=lang::compte_cp?>" required>
            </label>
            <label for="ville_connex">
                <input type="text" id="ville_connex" <?php if(isset($ville) && !empty($ville)) echo'value='.$ville ?> name="ville_connex" placeholder="<?=lang::compte_ville?>" required>
            </label>
        </div>
        <label for="pays_connex">
            <input type="text" id="pays_connex" <?php if(isset($pays) && !empty($pays)) echo'value='.$pays ?> name="pays_connex" placeholder="<?=lang::compte_pays?>" required>
        </label>
        <label for="mdp_connex">
            <input type="password" id="mdp_connex" name="mdp_connex" placeholder="<?=lang::compte_mdp?>" required>
        </label>
        <label for="mdp_confirm">
            <input type="password" id="mdp_confirm" name="mdp_confirm_connex" placeholder="<?=lang::compte_conf_mdp?>" required>
        </label>
        <div class="pol_check">
            <input type="checkbox" id="accept_pol" name="accept_pol" value="true" required>
            <label for="accept_pol"><?=lang::compte_accept_pol?> 
                <a href="index.php?action=politique"><?=lang::compte_pol?></a>
            </label>
        </div>
        <input id="submit_compte" name="submit_compte" type="submit" value="<?=lang::compte_crea?>">
    </form>
    <?php
    if(isset($message)){
        echo $message;
    }
    ?>
</div>