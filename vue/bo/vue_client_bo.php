<?php
// var_dump($clients);

foreach($clients as $client){
    
?>
<a href="bo.php">home</a>
<a href='bo.php?action=logout'>déconnexion</a>
<div class="presentation_client">
    <div class="grid" style='margin-top : 20px; display: grid; grid-template-column : 1fr 1fr;'>
        <div>
            <span>
                Nom : 
            </span>
            <span>
                <?=$client["user_nom"]?>
            </span>
        </div>
        <div>
            <span>
                Prénom : 
            </span>
            <span>
                <?=$client["user_prenom"]?>
            </span>
        </div>
        <div>
            <span>
                Téléphone : 
            </span>
            <span>
                <?=$client["user_telephone"]?>
            </span>
        </div>
        <div>
            <span>
                ville : 
            </span>
            <span>
                <?=$client["user_ville"]?>
            </span>
        </div>
        <div>
            <span>
                Codepostal : 
            </span>
            <span>
                <?=$client["user_codepostal"]?>
            </span>
        </div>
        <div>
            <span>
            Email : 
            </span>
            <span>
                <?=$client["user_mail"]?>
            </span>
        </div>
        <div>
            <span>
                Mot de passe : 
            </span>
            <span>
                <?=$client["user_mdp"]?>
            </span>
        </div>
    </div>
    <a href="bo.php?action=del_user&user=<?=$client["user_id"]?>">supprimer ce client</a>
</div>

<?php
}