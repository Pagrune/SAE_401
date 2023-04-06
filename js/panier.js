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
    nombre_personne = this.dataset.prix;
    console.log(nombre_personne);
    return nombre_personne;
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
        // window.localStorage.setItem('panier',panier_transi);
        if(window.localStorage.getItem('panier')){
            let panier_actuel=window.localStorage.getItem('panier');
            console.log(panier_actuel);
            window.localStorage.setItem('panier',panier_actuel+'|'+(new_elt));
        }
        else{
            window.localStorage.setItem('panier',new_elt);
        }
        
        console.log(localStorage);
    }
    else{
        console.log("echec");
    }
        
}





