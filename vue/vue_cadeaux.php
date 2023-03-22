<div id="cadeau">
    <div class="block-1">
        <img src="img/page_cadeaux/carte_cadeau.jpg" alt="Carte cadeau">
        <div class="block-cadeau">
            <h1>
                Carte Cadeau
            </h1>
            <p>
                Vous ne savez pas quoi offrir pour un anniversaire ou tout autre occasion. Vous cherchez un cadeau original qui surprendra son destinataire ?
            </p>
            <p>
                Ne cherchez-plus, vous êtes au bon endroit !
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
                    Montant de la carte en €
                    <input type="number" id="montant_carte" name="value_cadeau" min="20" max="1000" placeholder="€">
                </label>
                <input id="achat_carte" name="achat_carte" type="submit" value="Acheter une carte cadeau">
            </form>

            <?php 
                if(!empty($_POST["value_cadeau"])){
                    var_dump($_POST["value_cadeau"]);
                }
            ?>
        </div>
    </div>
</div>