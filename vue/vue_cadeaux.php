<div id="filtre"></div>
<div id="cadeau">
    <div class="block-1">
        <img src="img/page_cadeaux/carte_cadeau.jpg" alt="Carte cadeau">
        <div class="block-cadeau">
            <h1>
                <?=lang::carte_titre?>
            </h1>
            <p>
                <?=lang::carte_text_1?>
            </p>
            <p>
                <?=lang::carte_text_2?>
            </p>
            
            <!-- <form action="index.php?<?php //if(isset($_COOKIE["connexion"])){//verif de la connexion du client
                //echo 'action=cadeaux&validation=true';//si il est déjà connecté on valide la commande
            //}
            //else{
              //  echo 'action=connexion';//si il n'est pas connecté on le redirige vers la page de connexion
            //}
            ?>" method="post"> -->
            <form action='index.php?action=enregcadeaux&validation=true' method="post">
                <label for="montant_carte">
                    <?=lang::carte_montant?>
                    <input type="number" id="montant_carte" name="value_cadeau" min="20" max="1000" placeholder="€">
                </label>
                <input id="achat_carte" name="achat_carte" type="submit" value="<?=lang::carte_value?>">
            </form>

            <div class="add-to-cart carte_confirm">
                <p class="resa_selec">Merci pour votre achat d'une carte cadeau d'un montant de <?=$_POST["value_cadeau"]?> €</p>
                <div class="choix_panier">
                    <button class="add-panier">
                        <p>Fermer</p>
                    </button>
                </div>               
            </div>

            <?php 
                if(!empty($_POST["value_cadeau"])){
                    // var_dump($_POST["value_cadeau"]);
                }
            ?>
        </div>
    </div>
</div>