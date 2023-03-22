<div id="crea_compte">
    <h1>
        Créer mon compte
    </h1>
    <form action="">
        <div>
            <label for="nom_connex">
                <input type="text" id="nom_connex" name="nom_connex" placeholder="Nom" required>
            </label>
            <label for="prenom_connex">
                <input type="text" id="prenom_connex" name="prenom_connex" placeholder="Prénom" required>
            </label>
        </div>
        <div>
            <label for="tel_contact">
                <input type="tel" id="tel_contact" name="tel_contact" placeholder="Votre numéro de téléphone">
            </label>
            <label for="email_connex">
                <input type="email" id="email_connex" name="email_connex" placeholder="Mail" required>
            </label>
        </div>
        <label for="rue_connex">
            <input type="text" id="rue_connex" name="rue_connex" placeholder="N° de Rue" required>
        </label>
        <div>
            <label for="CP_connex">
                <input type="text" id="CP_connex" name="CP_connex" placeholder="Code Postal" required>
            </label>
            <label for="ville_connex">
                <input type="text" id="ville_connex" name="ville_connex" placeholder="Ville" required>
            </label>
        </div>
        <label for="pays_connex">
            <input type="text" id="pays_connex" name="pays_connex" placeholder="Pays" required>
        </label>
        <label for="mdp_connex">
            <input type="password" id="mdp_connex" name="mdp_connex" placeholder="Mot de passe" required>
        </label>
        <label for="mdp_confirm">
            <input type="password" id="mdp_confirm" name="mdp_confirm" placeholder="Confirmer mon mot de passe" required>
        </label>
        <div>
            <input type="checkbox" id="accept_pol" name="accept_pol" checked required>
            <label for="accept_pol">J'accepte la 
                <a href="">politique de confidentialité </a>
            </label>
        </div>
        <input id="submit_compte" name="submit_compte" type="submit" value="Créer mon compte">
    </form>

</div>