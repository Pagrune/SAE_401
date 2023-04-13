<h1>
    Customer management
</h1>
<div id="client_bo">
    
    <?php
    // var_dump($clients);

    foreach($clients as $client){
        
    ?>
    <div class="presentation_client">
        <div class="grid">
            <div>
                <span>
                    Name : 
                </span>
                <span>
                    <?=$client["user_nom"]?>
                </span>
            </div>
            <div>
                <span>
                    First name : 
                </span>
                <span>
                    <?=$client["user_prenom"]?>
                </span>
            </div>
            <div>
                <span>
                    Phone : 
                </span>
                <span>
                    <?=$client["user_telephone"]?>
                </span>
            </div>
            <div>
                <span>
                    City : 
                </span>
                <span>
                    <?=$client["user_ville"]?>
                </span>
            </div>
            <div>
                <span>
                    ZIP code : 
                </span>
                <span>
                    <?=$client["user_codepostal"]?>
                </span>
            </div>
            <div>
                <span>
                Email : 
                </span>
                <span>
                    <?=$client["user_mail"]?>
                </span>
            </div>
            <div>
                <span>
                   Password : 
                </span>
                <span>
                    <?=$client["user_mdp"]?>
                </span>
            </div>
        </div>
        <a href="bo.php?action=del_user&user=<?=$client["user_id"]?>">Delete this customer</a>
    </div>

    <?php
    }
    ?>
</div>