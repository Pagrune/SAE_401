<div id="panier">
    <h1><?= lang::mon_panier ?></h1>
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
                        <?=$gay['panier_nbpersonne']?> <?= lang::compte_personne ?>
                    </p>
                </div>
                <p class="tarif"><?=$gay['panier_prix']?>€</p>
            </div>
            <div class="creneau_resa">
                <h4><?= lang::compte_creneau ?></h4>
                <div class="line"></div>
                <p class="date_resa"><?=$gay['panier_date']?></p>
                <p class="heure_resa"> <?=$gay['panier_heure']?>h</p>
            </div>
            <a class="supp_jeu" href="index.php?action=supp_panier&del_id_elt=<?=$gay['panier_elt']?>"><?= lang::supprimer_jeu ?></a>
        </div>
        <?php }
        ?>
       <div class="valid_panier">
            <div class="code_cadeau">
                <label for="">
                    <input id="code_reduc" type="text" placeholder="<?= lang::mon_code ?>">
                </label>
                <input type="submit"  id='verif_carte' value="<?= lang::util_code ?>">
            </div>
            <div id="verif_carte_message">
                
            </div>    
            
                <?php if(isset($_SESSION['id'])){
                    echo '
                    <button class="btn_valid_panier paiement_js"><img src="img/header/paniers.png" alt="icône panier"><span>'.lang::valid_panier.'</span>';
                }
                else{
                    echo  '<button class="btn_valid_panier"><a class="" href="index.php?action=connexion">
                            <img src="img/header/paniers.png" alt="icône panier">
                            <span>
                                '.lang::connex_panier.'
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
            <h2><?= lang::paiement ?></h2>
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
                                <?= lang::expire ?>
                            </p>
                            <input type="text" class="date" placeholder="<?= lang::mois ?>">
                        </div>
				        <input type="text" class="nom" placeholder="<?= lang::denomination ?>">
                        <div class="dosCarte">
                            <p><?= lang::numero_secret ?></p>
                            <input type="text" placeholder="000">
                        </div>
                        <a href="index.php?action=valider_ma_commande"><?= lang::confirm_commande ?></a>
                    </div>
                    
                </form>
                <div class='recap_commande'>
                    <h3>
                        <?= lang::recap_comm ?>
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
    echo lang::panier_vide;
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