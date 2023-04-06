<div id="connexion">
    <div >
        <h1>
            <?=lang::connexion?>
        </h1>
        <form action="index.php?action=connexion&verif=true" method='post'>
            <label for="identifiant">
                <input type="text" id="identifiant" name="identifiant" placeholder="<?=lang::identification?>" >
            </label>
            <label for="mdp">
                <input type="password" id="mdp" name="mdp" placeholder="<?=lang::votre_mdp?>" >
            </label>
            <input id="me_connecter" name="me_connecter" type="submit" value="<?=lang::me_connecter?>">
        </form>
        <?php
        if(!empty($message_erreur)){
           echo "<div class='error_no_account'>".$message_erreur."</div>";
        }
        ?>
        <div class="no_account">
            <p>
                <?=lang::no_compte?>
            </p>
            <a href="index.php?action=crea_compte">
                <?=lang::compte_crea?>
            </a>
        </div>
    </div>
</div>