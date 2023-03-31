<div id="panier">
    <h1>Mon panier</h1>
    <div class=panier>
			<div class=entete>Articles</div>
			<div class=entete>Quantité</div>

			<div>Premier article</div>
			<div>2</div>
			<div>1.99 €</div>
			<div>3.98 €</div>

			<div>Deuxième article</div>
			<div>1</div>
			<div>2.99 €</div>
			<div>2.99
    
    <button>
            <img src="" alt="">
            <p>
                Valider mon panier
            </p>
    </button>
    <div class="paiement">
        <div class="title_paiement">
            <h2>Paiement</h2>
            <div class="logo_cb">
                <img src="img/paiement/Visa_Inc._logo.svg.webp" alt="logo Visa">
                <img src="img/paiement/MasterCard_Logo.png" alt="Logo Mastercard">
            </div>
        </div>
        <div>
            <div>
                <form action="">
                    <div>
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
                    </div>
                    <input type="submit" value="Confirmer mon paiement">
                </form>
                <h3>
                    Récapitulatif de la commande
                </h3>
                <p>
                    69€
                </p>
                <button>
                    <p>
                        Revenir à mon panier
                    </p>
                </button>
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