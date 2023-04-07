
/** Menu toggle sur le header mobile */
document.querySelector('.menu_icon_mobile').addEventListener('click', toggle_menu);


function toggle_menu() {
    document.querySelector('.block_menu_mobile').classList.toggle('ouvert');
    if (document.querySelector('.ouvert')) {
        document.querySelector('.menu_icon_mobile img').style.transform = 'rotate(45deg)';
    }
    else {
        document.querySelector('.menu_icon_mobile img').style.transform = 'rotate(0deg)';
    }
}

let letoggle = document.querySelectorAll(".el-toggle");

letoggle.forEach(e =>
    e.addEventListener("click", toggle_faq)
);

function toggle_faq() {
    this.nextElementSibling.classList.toggle('open');
    if (document.querySelector('.open')) {
        this.querySelector('img').style.transform = 'rotate(180deg)';
        this.querySelector('img').style.paddingRight = '0';
        this.querySelector('img').style.paddingLeft = '4%';
    }
    else {
        this.querySelector('img').style.transform = 'rotate(0deg)';
        this.querySelector('img').style.paddingRight = '4%';
        this.querySelector('img').style.paddingLeft = '0';
    }
}

let ave = document.querySelectorAll(".choix");

ave.forEach(e =>
    e.addEventListener("click", toggle_ave)
);

function toggle_ave() {
    this.nextElementSibling.classList.toggle('open');
}

if (document.querySelector('.btn_plus')) {

    var currentDate = new Date();
    let jours = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"]
    let mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"]
    currentDate.setDate(1);

    function AfficherMois() {
        var temp = new Date(currentDate);
        var output = "";
        for (var i = 0, fin = FinDuMois(); i < fin; i++) {
            output += `
                <div class="${jours[temp.getDay()]}">
                    <input class="inputJour" type="radio" id="${i}" name="date_jour" data-date="${temp.toLocaleDateString()}" value="true">
                    <label class="labelJour" for="${i}">${temp.toLocaleDateString()}</label>
                </div>`
            temp.setDate(temp.getDate() + 1);
        }
        document.querySelector(".cal").innerHTML = output;
        // document.querySelectorAll("textarea").forEach(function (e) {
        //     e.addEventListener("change", saveData)
        // })
    }


    function FinDuMois() {
        var temp = new Date(currentDate.getYear(), currentDate.getMonth() + 1, 0);
        return temp.getDate();
    }

    function getMonth() {
        return mois[currentDate.getMonth()];
    }

    document.querySelector(".month").innerHTML = mois[currentDate.getMonth()];

    document.querySelector(".btn_plus").addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() + 1);
        document.querySelector(".month").innerHTML = getMonth();
        AfficherMois();
    })

    document.querySelector(".btn_moins").addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() - 1);
        document.querySelector(".month").innerHTML = getMonth();
        AfficherMois();
    })



    // document.querySelector(".month").innerHTML = currentDate.getMonth();

    AfficherMois();
}

/** Map */
if(document.querySelector('#map')){
    var map = L.map('map').setView([48.866667, 2.333333], 6);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    
    var marker = L.marker([47.75, 7.3333]).addTo(map);
}