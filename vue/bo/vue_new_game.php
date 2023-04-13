<h1>
    New Game
</h1>

<div id="game_new">
    
<form action="bo.php?action=new_game" enctype="multipart/form-data" method='post'>
    <label for="">game_genre <select name="game_genre" id="">
            <option value="fantastique">fantastique</option>
            <option value="suspens">suspense</option>
            <option value="drame">drame</option>
        </select>

         

        <label for="">game duration
            <input type="text" value='' placeholder="hours" required name='duree'>
        </label>
         
        <label for="">game place
            <input type="text" value='' name='lieu' required>
        </label>
         
        <label for="">game category
            <select name="categorie" id="" required>
                <option value="familial">familial</option>
                <option value="novice">novice</option>
                <option value="amateur">amateur</option>
                <option value="expert">expert</option>
            </select>
        </label>
         
        <label for="">game nbjoueur
            <input type="text" value='' name='nbjoueur' required>
        </label>
         
        <label for="">game environnement fr
            <input type="text" value='' name='environnement' required>
        </label>
         
        <label for="">game environnement eng
            <input type="text" value='' name='environnementeng' required>
        </label>
         
        <label for="">game nom
            <input type="text" value='' name='nom' required>
        </label>
         
        <label for="">game nom eng
            <input type="text" value='' name='nomeng' required>
        </label>
         
        <label for="">game description
            <textarea name="description" cols="30" rows="10"></textarea>
        </label>
         
        <label for="">game description eng
            <textarea name="decriptioneng" cols="30" rows="10"></textarea>
        </label>
         
        <label for="">game prix
            <input type="text" value='' name='prix' required>
        </label>
         
        <label for="">game parcours
            <input type="text" value='' name='parcours' required>
        </label>
         
        <label for="">game nbenigme
            <input type="text" value='' name='nbenigme' required>
        </label>
         
        <label for="">game latitude
            <input type="text" value='' name='latitude' required>
        </label>
         
        <label for="">game longitude
            <input type="text" value='' name='longitude' required>
        </label>
         
        <label for="">game prix 3
            <input type="text" value='' name='prix_3' required>
        </label>
         
        <label for="">game prix 4
            <input type="text" value='' name='prix_4' required>
        </label>
         
        <label for="">game prix 5
            <input type="text" value='' name='prix_5' required>
        </label>
         
        <label for="">game prix 6
            <input type="text" value='' name='prix_6' required>
        </label>
         
        <label for="">game prix 7
            <input type="text" value='' name='prix_7' required>
        </label>
         
        <label for="">game prix 8
            <input type="text" value='' name='prix_8' required>
        </label>
         
        <label for="">game prix 9
            <input type="text" value='' name='prix_9' required>
        </label>
         
        <label for="">game prix 10
            <input type="text" value='' name='prix_10' required>
        </label>
         
        <label for="">game prix 11
            <input type="text" value='' name='prix_11' required>
        </label>
         
        <label for="">game prix 12
            <input type="text" value='' name='prix_12' required>
        </label>
         
        <label for="">game prix groupe
            <input type="text" value='' name='prix_groupe' required>
        </label>

        <label>changer la miniature de l'escape game
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
        <input type="file" name="image_escape" class="texte" accept="image/png" required>
        </label>

        <label>changer l'image secondaire du jeu
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
        <input type="file" name="image_contexte" class="texte" accept="image/png" required>
        </label>


        </br></br>
        <input type="submit" value='Confirm' name='valider' required>

    </form>
</div>
