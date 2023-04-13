<a href="bo.php">home</a>
<a href='bo.php?action=logout'>déconnexion</a>

<?php
foreach($games as $game){
    ?>
    <h2><?=$game['game_nomeng']?></h2>

    <form action="bo.php?action=modif_game&game=<?=$game['game_id']?>" enctype="multipart/form-data" method='post'>
    <label for="">game_genre <select name="game_genre" id="">
        <option value="<?=$game['game_genre']?>"><?=$game['game_genre']?></option>
        <option value="fantastique">fantastique</option>
        <option value="suspens">suspense</option>
        <option value="drame">drame</option>
    </select>

<br>
    
    <label for="">game duration
        <input type="text" value='<?=$game['game_duree']?>' required name='duree'>
    </label>
    <br>
    <label for="">game place
        <input type="text" value='<?=$game['game_lieu']?>' name='lieu' required>
    </label>
    <br>
    <label for="">game category
        <select name="categorie" id="" required>
    <option value="<?=$game['game_categorie']?>"><?=$game['game_categorie']?></option>
    <option value="familial">familial</option>
    <option value="novice">novice</option>
    <option value="amateur">amateur</option>
    <option value="expert">expert</option>
</select>
    </label>
    <br>
    <label for="">game nbjoueur
        <input type="text" value='<?=$game['game_nbjoueur']?>' name='nbjoueur' required>
    </label>
    <br>
    <label for="">game environnement fr
        <input type="text" value='<?=$game['game_environnement']?>' name='environnement' required>
    </label>
    <br>
    <label for="">game environnement eng
        <input type="text" value='<?=$game['game_environnementeng']?>' name='environnementeng' required>
    </label>
    <br>
    <label for="">game nom
        <input type="text" value='<?=$game['game_nom']?>' name='nom' required>
    </label>
    <br>
    <label for="">game nom eng
        <input type="text" value='<?=$game['game_nomeng']?>' name='nomeng' required>
    </label>
    <br>
    <label for="">game description
        <input type="text" value='<?=$game['game_description']?>' name='description' required>
    </label>
    <br>
    <label for="">game description eng
        <input type="text" value='<?=$game['game_decriptioneng']?>' name='decriptioneng' required>
    </label>
    <br>
    <label for="">game prix
        <input type="text" value='<?=$game['game_prix']?>' name='prix' required>
    </label>
    <br>
    <label for="">game parcours
        <input type="text" value='<?=$game['game_parcours']?>' name='parcours' required>
    </label>
    <br>
    <label for="">game nbenigme
        <input type="text" value='<?=$game['game_nbenigme']?>' name='nbenigme' required>
    </label>
    <br>
    <label for="">game latitude
        <input type="text" value='<?=$game['game_latitude']?>' name='latitude' required>
    </label>
    <br>
    <label for="">game longitude
        <input type="text" value='<?=$game['game_longitude']?>' name='longitude' required>
    </label>
    <br>
    <label for="">game prix 3
        <input type="text" value='<?=$game['game_prix_3']?>' name='prix_3' required>
    </label>
    <br>
    <label for="">game prix 4
        <input type="text" value='<?=$game['game_prix_4']?>' name='prix_4' required>
    </label>
    <br>
    <label for="">game prix 5
        <input type="text" value='<?=$game['game_prix_5']?>' name='prix_5' required>
    </label>
    <br>
    <label for="">game prix 6
        <input type="text" value='<?=$game['game_prix_6']?>' name='prix_6' required>
    </label>
    <br>
    <label for="">game prix 7
        <input type="text" value='<?=$game['game_prix_7']?>' name='prix_7' required>
    </label>
    <br>
    <label for="">game prix 8
        <input type="text" value='<?=$game['game_prix_8']?>' name='prix_8' required>
    </label>
    <br>
    <label for="">game prix 9
        <input type="text" value='<?=$game['game_prix_9']?>' name='prix_9' required>
    </label>
    <br>
    <label for="">game prix 10
        <input type="text" value='<?=$game['game_prix_10']?>' name='prix_10' required>
    </label>
    <br>
    <label for="">game prix 11
        <input type="text" value='<?=$game['game_prix_11']?>' name='prix_11' required>
    </label>
    <br>
    <label for="">game prix 12
        <input type="text" value='<?=$game['game_prix_12']?>' name='prix_12' required>
    </label>
    <br>
    <label for="">game prix groupe
        <input type="text" value='<?=$game['game_prix_groupe']?>' name='prix_groupe' required>
    </label>
    <br></br>
    <label>changer la miniature de l'escape game</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
        <input type="file" name="image_escape" class="texte" accept="image/png">
        
</br></br>
    <label>changer l'image secondaire du jeu</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
    <input type="file" name="image_contexte" class="texte" accept="image/png">

    
</br></br>
    <input type="submit" value='valider' required>
    </br></br></br>
    <a href="bo.php?action=delete_game&game=<?=$game['game_id']?>">delete game</a>
    </form>



<?php
}?>