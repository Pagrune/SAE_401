<div id="panier">
    <h1>Mon panier</h1>
    <div class=panier>
        <?php
        if($reponse>0){
        foreach ($reponse as $gay){
            ?>
        
        <div class="mes_resa">
            <img src="img/jeux/img_jeux_<?=$gay['panier_idgame']?>.png" alt="">
            <div class="info_resa">
                <!-- <h3><?=$gay['panier_nbpersonne']?></h3> -->
                <div class="resa_nbr">
                    <img src="img/icons/contact.png" alt="icône nombre de personne">
                    <p>
                        <?=$gay['panier_nbpersonne']?> personnes
                    </p>
                </div>
                <p class="tarif"><?=$gay['panier_prix']?>€</p>
            </div>
            <div class="creneau_resa">
                <h4>Mon créneau</h4>
                <div class="line"></div>
                <p class="date_resa"><?=$gay['panier_date']?></p>
                <p class="heure_resa"> <?=$gay['panier_heure']?>h</p>
            </div>
            <a class="supp_jeu" href="index.php?action=supp_panier&del_id_elt=<?=$gay['panier_elt']?>">Supprimer ce jeu</a>
        </div>
        <?php }
        ?>
       <div class="valid_panier">
            <div class="code_cadeau">
                <label for="">
                    <input id="code_reduc" type="text" placeholder="Mon code cadeau">
                </label>
                <input type="submit"  id='verif_carte' value="Utiliser mon code">
            </div>
            <div id="verif_carte_message">
                
            </div>    
            
                <?php if(isset($_SESSION['id'])){
                    echo '
                    <button class="btn_valid_panier paiement_js"><img src="img/header/paniers.png" alt="icône panier"><span>Valider mon panier</span>';
                }
                else{
                    echo  '<button class="btn_valid_panier"><a class="" href="index.php?action=connexion">
                            <img src="img/header/paniers.png" alt="icône panier">
                            <span>
                                Me connecter pour valider mon panier
                            </span>
                        </a>';
                }
                ?>
                
                    
            </button>
       </div>

    
    </div>

    <?php if(isset($_SESSION['id'])){
        ?>
    <div class="paiement">
        <div class="title_paiement">
            <h2>Paiement</h2>
            <div class="logo_cb">
                <img src="img/paiement/Visa_Inc._logo.svg.webp" alt="logo Visa">
                <img src="img/paiement/MasterCard_Logo.png" alt="Logo Mastercard">
            </div>
        </div>
        <div>
            <div class="partie_paiement">
                <form action="">
                    <div class="form_paiement">
                        <input type="text" class="numero" placeholder="0000 0000 0000 0000">
                        <div>
                            <p>
                                Expire / fin
                            </p>
                            <input type="text" class="date" placeholder="MM/AA">
                        </div>
				        <input type="text" class="nom" placeholder="M(e) PRENOM NOM">
                        <div class="dosCarte">
                            <p>Numéro secret</p>
                            <input type="text" placeholder="000">
                        </div>
                        <a href="index.php?action=valider_ma_commande">Confirmer ma commande</a>
                    </div>
                    
                </form>
                <div class='recap_commande'>
                    <h3>
                        Récapitulatif de la commande
                    </h3>
                    <p>
                        69€
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    <?php
        };
    ?>
</div>

<?php
}
else{
    echo ' votre panier est vide';
}

	// if(
	// 	!isset($_POST['montant']) || 
	// 	!isset($_POST['numero']) || 
	// 	!isset($_POST['date']) || 
	// 	!isset($_POST['nom']) || 
	// 	!isset($_POST['cle'])
	// ) {

	// 	echo ' {"erreur": "Données non transmises"}';

	// } elseif(rand(0, 1) == 1) { /* Une chance sur deux que le paiement soit accepté */

	// 	/* Simulation d'un délai d'attente pour valider le paiement */
	// 	sleep(rand(1,2));
	// 	echo '{"statut": "Paiement accepté"}';

	// } else {

	// 	/* Simulation d'un délai d'attente pour valider le paiement */
	// 	sleep(rand(1,2));
	// 	echo '{"statut": "Paiement refusé par la banque"}';

	// }