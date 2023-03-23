
/** Menu toggle sur le header mobile */
document.querySelector('.menu_icon_mobile').addEventListener('click', toggle_menu);


function toggle_menu(){
    document.querySelector('.block_menu_mobile').classList.toggle('ouvert');
    if(document.querySelector('.ouvert')){
        document.querySelector('.menu_icon_mobile img').style.transform ='rotate(45deg)';
    }
    else{
        document.querySelector('.menu_icon_mobile img').style.transform ='rotate(0deg)';
    }
}

var currentDate = new Date();
        let jours = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"]
        currentDate.setDate(1);

        function AfficherMois() {
            var temp = new Date(currentDate);
            var output = "";
            for (var i = 0, fin = FinDuMois(); i < fin; i++) {
                output += `
                    <div class="${jours[temp.getDay()]}" data-date="${temp.toLocaleDateString()}">
                        <form action='' method='post'>
                        <input type="checkbox" id="date_jour" name="date_jour" value="true">
                        <div>${temp.toLocaleDateString()}</div>
                    
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


        document.querySelector(".btn_plus").addEventListener("click", function () {
            currentDate.setMonth(currentDate.getMonth() + 1);
            AfficherMois();
        })
        document.querySelector(".btn_moins").addEventListener("click", function () {
            currentDate.setMonth(currentDate.getMonth() - 1);
            AfficherMois();
        })

        
        // document.querySelector(".month").innerHTML = currentDate.getMonth();

        AfficherMois();