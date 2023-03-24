<?php
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Credentials: true');

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