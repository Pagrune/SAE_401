if(typeof(localStorage.getItem('panier'))=='undefined'){
    localStorage.setItem('panier', []);
}

if(document.querySelector("#aventure_solo")){
    let date;
    let heure;
    let nombre_personne;


    bouton = document.querySelector(".add");
    bouton.addEventListener("click", AddToCart);

    document.querySelectorAll("#date_jour").forEach(e=>{
        e.addEventListener("click", saveDate);
    });
    document.querySelectorAll("#heure_jour").forEach(e=>{
        e.addEventListener("click", saveHeure);
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


function AddToCart(){
    if(typeof(date)!='undefined' && typeof(heure)!='undefined'){
        let id = this.dataset.id;
        // let panier_transi= {};
        // panier_transi[id]={"date": date, 'heure' : heure};
        let panier=window.localStorage.getItem('panier');
        panier=JSON.parse(panier);
        console.log(panier);
        let new_elt= {'id' : id, "date": date, 'heure' : heure};
        panier.push(new_elt);
        window.localStorage.setItem('panier',JSON.stringify(panier));
        console.log(localStorage);
    }
    else{
        console.log("echec");
    }
        
}





