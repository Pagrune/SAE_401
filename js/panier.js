if(document.querySelector("#aventure_solo")){
    bouton = document.querySelector(".add");
    bouton.addEventListener("click", AddToCart);
}

function AddToCart(){
    let a = this.dataset.id;
        if(window.localStorage.getItem(a)==null){//si non je l'ajoute
            window.localStorage.setItem(a,a);
            console.log(localStorage);
        }
        else{//si oui le supprime
            window.localStorage.removeItem(a);
            console.log(window.localStorage.getItem(a));
        }
}


