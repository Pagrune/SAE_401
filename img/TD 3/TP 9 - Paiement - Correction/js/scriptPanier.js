/*********************/
/* Gestion du panier */
/*********************/
let panier = JSON.parse(localStorage.panier);
afficher();

function afficher(){
	let total = 0;
	let output = `	<div class=entete>Articles</div>
					<div class=entete>Quantité</div>
					<div class=entete>P.U. H.T.</div>
					<div class=entete>Sous total</div>`;

	panier.forEach((article, index)=>{
		let sousTotal = round(article.quantite * article.prix);
		output += `	<div class="nomArticle" data-index=${index}>${article.nom} 
						<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="rgb(204, 65, 0)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
					</div>
					<input value=${article.quantite}>
					<div>${article.prix} €</div>
					<div>${sousTotal} €</div>`;
		total += sousTotal;
	})

	document.querySelector(".panier").innerHTML = output;
	document.querySelector(".TVA").innerText = round(total * 0.021) + " €";
	document.querySelector(".total").innerText = round(total * 1.021) + " €";

	document.querySelectorAll(".nomArticle>svg").forEach(croix=>{
		croix.addEventListener("click", supprimer)
	})
	document.querySelectorAll(".panier>input").forEach(croix=>{
		croix.addEventListener("change", modifier)
	})
}

function round(nb){
	return Math.round(nb*100)/100;
}

function modifier(){
	let num = parseInt(this.previousElementSibling.dataset.index)
	panier[num].quantite = parseInt(this.value);
	localStorage.panier = JSON.stringify(panier);
	afficher();
}

function supprimer(){
	panier.splice(parseInt(this.parentElement.dataset.index), 1);
	localStorage.panier = JSON.stringify(panier);
	afficher();
}


/********************/
/* Gestion de la CB */
/********************/
document.querySelector(".numero").addEventListener("keypress", numeroCarte);
document.querySelector(".numero").addEventListener("keyup", verifierNumero);
document.querySelector(".numero").addEventListener("change", espacesNumero);

function numeroCarte(event){
	if(!(parseInt(event.key) >= 0 || event.key == " ")){
		event.preventDefault();
	}
}

function verifierNumero(event){
	let img = document.querySelector('[alt="type"]');
	if(this.value[0] == "4"){
		img.src = "img/visa.svg";
		img.style.display = "block";
	}else{
		let nb = parseInt(this.value.substring(0, 2));
		if(nb >= 51 && nb <= 55){
			img.src = "img/mastercard.svg";
		img.style.display = "block";
		}else{
			img.style.display = "none";
		}
	}
}

function espacesNumero(){
	this.value = this.value.replace(/ /g, "").replace(/(.{4})/g,"$1 ");
}

/*********************/
/* Envoi des données */
/*********************/
document.querySelector("form").addEventListener("submit", envoi);

function envoi(event){
	event.preventDefault();

	this.querySelector('[type="submit"]').value = "En attente de validation";

	let montant = parseFloat(document.querySelector(".total").innerText);
	let numero = document.querySelector(".numero").value.replace(/ /g, "");
	let date = document.querySelector(".date").value;
	let nom = document.querySelector(".nom").value;
	let cle = document.querySelector(".dosCarte>input").value;
	
	fetch(this.action, 
		{
			method: "post",
			headers: {
				"Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
			},
			body: `montant=${montant}&numero=${numero}&date=${date}&nom=${nom}&cle=${cle}`
		}
	)
	.then(r=>{return r.json()})
	.then(json=> {      
		if(json.erreur){
			this.querySelector('[type="submit"]').value = "Un problème est servenu";
		} else{
			this.querySelector('[type="submit"]').value = json.statut;
		}
	});
}

