<div id="panier">
    <h1>Mon panier</h1>
    <div class=panier>
        <?php
        foreach ($reponse as $gay){
            
        }
        <div class="mes_resa">
            <img src="img/kredo/kredo.png" alt="">
            <div class="info_resa">
                <h3>Kredo Castello</h3>
                <div class="resa_nbr">
                    <img src="img/icons/contact.png" alt="icône nombre de personne">
                    <p>
                        2-3 personnes
                    </p>
                </div>
                <p class="tarif">69€</p>
            </div>
            <div class="creneau_resa">
                <h4>Mon créneau</h4>
                <div class="line"></div>
                <p class="date_resa">27/04/2023</p>
                <p class="heure_resa"> 15h30</p>
            </div>
            <a class="supp_jeu" href="">Supprimer ce jeu</a>
        </div>
       <div class="valid_panier">
            <div class="code_cadeau">
                <label for="">
                    <input type="text" placeholder="Mon code cadeau">
                </label>
                <input type="submit" value="Utiliser mon code">
            </div>
            <button class="btn_valid_panier">
                <a href="">
                    <img src="img/header/paniers.png" alt="icône panier">
                    <span>
                        Valider mon panier
                    </span>
                </a>
            </button>
       </div>
    
    </div>
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
                        <input type="submit" value="Confirmer mon paiement">
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
</div>

<?php

	if(
		!isset($_POST['montant']) || 
		!isset($_POST['numero']) || 
		!isset($_POST['date']) || 
		!isset($_POST['nom']) || 
		!isset($_POST['cle'])
	) {

		echo '{"erreur": "Données non transmises"}';

	} elseif(rand(0, 1) == 1) { /* Une chance sur deux que le paiement soit accepté */

		/* Simulation d'un délai d'attente pour valider le paiement */
		sleep(rand(1,2));
		echo '{"statut": "Paiement accepté"}';

	} else {

		/* Simulation d'un délai d'attente pour valider le paiement */
		sleep(rand(1,2));
		echo '{"statut": "Paiement refusé par la banque"}';

	}
?>