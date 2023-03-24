/*****************************************/
/* Récupération et affichage des données */
/*****************************************/

fetch("https://www.mmi.uha.fr/exercices/items.php")
.then(r=>{return r.json()})
.then(json=>{
	let output = "";

	json.forEach(article=>{
		if(article.stock == "Indisponible"){
			var stock = "<span class=red>Indisponible</span>";
		}
		output += `
			<div>
				<img src="${article.img}" alt="suppositoire">
				<div>
					<h2>${article.article}</h2>
					<div>Conditionnement : <span class=conditionnement>${article.conditionnement}</span></div>
					
					<div class=quantite>
						<span>-</span>
						<span>1</span>
						<span>+</span>
					</div>
					<button>Ajouter au panier</button>
				</div>
				<div>
					<div class=prix>${article.prix}&nbsp;€</div>
					<div class=stock>${stock || article.stock}</div>
				</div>
			</div>`;		
	})

	document.querySelector('.articles').innerHTML = output;
	tabConditionnement();
	gestionEvenements();
})

/****************/
/* Plus / moins */
/****************/
function gestionEvenements(){
	document.querySelectorAll(".quantite").forEach(quantite=>{
		quantite.children[0].addEventListener("click", moins);
		quantite.children[2].addEventListener("click", plus);
	})

	/* AJOUT PANIER */
	document.querySelectorAll(".articles button").forEach(btn=>{
		btn.addEventListener("click", ajouter)
	})
}
function plus(){
	let nb = this.previousElementSibling.innerText;
	this.previousElementSibling.innerText = parseInt(nb)+1;
}
function moins(){
	let nb = this.nextElementSibling.innerText;
	if(nb > 1){
		this.nextElementSibling.innerText = parseInt(nb)-1;
	}
}

/************************/
/* Zone de filtre / tri */
/************************/
let conditionStock = "";
let conditionPrix = 999999;
let conditionConditionnement = "";

function masquer(){
	document.querySelectorAll(".articles>div").forEach(e=>{
		if(
			e.querySelector(".stock").innerText == conditionStock ||
			parseFloat(e.querySelector(".prix").innerText) > conditionPrix ||
			( conditionConditionnement && parseInt(e.querySelector(".conditionnement").innerText) != conditionConditionnement )
		){
			e.classList.add("masque");
		} else {
			e.classList.remove("masque");
		}
	})
}

document.querySelector(".tri>button").addEventListener("click", stock);
document.querySelector(".triPrix>button").addEventListener("click", prix);
document.querySelector(".triConditionnement>select").addEventListener("change", conditionnement);

function stock(){
	if(this.classList.toggle("toutStock")){
		conditionStock = "";
	} else {
		conditionStock = "Indisponible";
	}
	masquer();
}

function prix(){
	conditionPrix = parseFloat(this.previousElementSibling.value) || 999999;
	masquer();
}

function conditionnement(){
	conditionConditionnement = parseInt(this.value) || "";
	masquer();
}

function tabConditionnement(){
	let tab = [];
	document.querySelectorAll(".conditionnement").forEach(conditionnement=>{
		tab.push(conditionnement.innerText);
	})
	tab = [...new Set(tab)].sort(function(a, b){return a-b});

	/***************/
	let outputCond = "<option value='' selected>Conditionnement</option>";
	tab.forEach(c=>{
		outputCond += `<option value="${c}">Par ${c}</option>`;
	})
	document.querySelector(".triConditionnement>select").innerHTML = outputCond;
}


/*********************/
/* Gestion du panier */
/*********************/

let panier = [];

function ajouter(){
	let article = this.parentElement.parentElement;
	let titre = article.querySelector("h2").innerText;
	let quantite = parseInt(article.querySelector(".quantite>span:nth-child(2)").innerText);
	let conditionnement = parseInt(article.querySelector(".conditionnement").innerText);
	let prix = parseFloat(article.querySelector(".prix").innerText);

	panier.push(
		{
			nom: titre,
			quantite: quantite,
			conditionnement: conditionnement,
			prix: prix
		}
	);
	
	numPanier();
	localStorage.panier = JSON.stringify(panier);
	message(quantite + " article(s) ajouté(s) au panier");
}

function numPanier(){
	if(panier.length > 0){
		document.querySelector(".nbPanier").style.display = "block";
		document.querySelector(".nbPanier").innerText = panier.length;
	}else{
		document.querySelector(".nbPanier").style.display = "none";
	}
}

function message(txt){
	let div = document.createElement("div");
	div.className = "message";
	div.innerText = txt;
	document.body.appendChild(div);

	setTimeout(()=>{
		div.remove();
	}, 2000);
}

/*******************************************/
/* Gestion du panier au retour sur la page */
/*******************************************/
panier = JSON.parse(localStorage.panier);
numPanier();