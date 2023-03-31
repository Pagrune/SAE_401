if(document.querySelector("#aventure_solo")){
    bouton = document.querySelector(".add");
    bouton.addEventListener("click", AddToCart);

    document.querySelectorAll("input[type=radio]").forEach(e=>{
        e.addEventListener("click", AddToCart);
    })
}


function AddToCart(){
    let id = this.dataset.id;
    let infos = this.dataset.date.toString();
        if(window.localStorage.getItem(id)==null){//si non je l'ajoute
            window.localStorage.setItem(id,a);
            console.log(localStorage);
        }
        else{//si oui le supprime
            window.localStorage.removeItem(a);
            console.log(window.localStorage.getItem(a));
        }
}



