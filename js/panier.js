if(document.querySelector("#aventure_solo")){
    let date;
    let heure;
    let nombre_personne;
    let prix;

    bouton = document.querySelector(".add");
    bouton.addEventListener("click", AddToCart);

    document.querySelectorAll("#date_jour").forEach(e=>{
        e.addEventListener("click", saveDate);
    });
    document.querySelectorAll("#heure_jour").forEach(e=>{
        e.addEventListener("click", saveHeure);
    });
    document.querySelectorAll("#taille_groupe").forEach(e=>{
        e.addEventListener("click", saveNbpersonne);
    });
}


//récupération de la date choisie par le client
function saveDate(){
    date = this.dataset.date;
    console.log(date);
    return date;
}
function saveHeure(){
    heure = this.dataset.heure;
    console.log(heure);
    return heure;
}
function saveNbpersonne(){
    prix = this.dataset.prix;
    nombre_personne=this.dataset.grp;
    return nombre_personne, prix ;
}


function AddToCart(){
    if(typeof(date)!='undefined' && typeof(heure)!='undefined' && typeof(nombre_personne)!='undefined'){
        let id = this.dataset.id;
        let panier;
        // let panier_transi= {};
        // panier_transi[id]={"date": date, 'heure' : heure};
        panier=window.localStorage.getItem('panier');
        console.log(typeof(panier));
        // if(panier==''){
        //     console.log(localStorage);
        //     window.localStorage.setItem('panier', new Array())
        //     console.log(typeof(window.localStorage.getItem('panier')));
        // }
        // let panier_transi=localStorage.getItem('panier');
        // console.log(panier_transi);
        let new_elt= [id, date, heure, nombre_personne];
        console.log(new_elt);
        // panier_transi.push(new_elt);
        // window.localStorage.setItem('panier',panier_transi);ù
        console.log(id,heure, date, nombre_personne, prix);
        fetch("./js/dossier_fetch/ajout_panier_bdd.php", 
        {
            method: "post",
            headers: {
                "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
            },
            body: `id=${id}&date=${date}&heure=${heure}&nombre_personne=${nombre_personne}&prix=${prix}`
        }
        )
        .then(function(response) {  // Prétraitement de la réponse.
            return response.text(); 
        })
        .then(function(text) {       // Utilisation de la réponse.
            console.log(text);
        })
        
    }
    else{
        console.log("echec");
    }
        
}


if(document.querySelector('#verif_carte')){
    document.querySelector('#verif_carte').addEventListener("click", verifCadeau);
}





function verifCadeau(){
    let code_check=document.querySelector('#code_reduc').value;
    fetch("./js/dossier_fetch/verif_code_cadeau.php", 
        {
            method: "post",
            headers: {
                "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
            },
            body: `code=${code_check}`
        }
        )
        .then(function(response) {  // Prétraitement de la réponse.
            return response.json(); 
        })
        .then(function(json) {       // Utilisation de la réponse.
            if(json==0){
                document.querySelector("#verif_carte_message").innerText='Votre code n\'est pas valide';
            }else{
                document.querySelector("#verif_carte_message").innerText='Votre code est valide, il va être appliqué au montant de votre commande.'
            }
        })
    
}









