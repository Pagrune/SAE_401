<div id="connexion">
    <div >
        <h1>
            Connexion
        </h1>
        <form action="index.php?action=connexion&verif=true" method='post'>
            <label for="identifiant">
                <input type="text" id="identifiant" name="identifiant" placeholder="Votre email d'identification" >
            </label>
            <label for="mdp">
                <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" >
            </label>
            <input id="me_connecter" name="me_connecter" type="submit" value="Me connecter">
        </form>
        <?php
        if(!empty($message_erreur)){
           echo $message_erreur;
        }
        ?>
        <div>
            <p>
                Je n'ai pas de compte ?
            </p>
            <a href="">
                Créer votre compte
            </a>
        </div>
    </div>
</div>