<a href="bo.php">home</a>

<?php
// var_dump($resas);


foreach($resas as $resa){
?>



    <form action="bo.php?action=modif_resa&resa=<?=$resa['resa_id']?>" method="post">
    <label for=""> horaire
        <input type="text" name='horaire' value='<?=$resa['resa_horaire']?>' required>
    </label>
</br>
    <label for=""> id client
        <input type="text" name='id_client' value='<?=$resa['id_user']?>' required>
    </label>
    </br>
    <label for=""> id game
        <input type="text" name='id_game' value='<?=$resa['resa_idgame']?>' required>
    </label>
    </br>
    <label for="">  resa nb personne
        <input type="text" name='nb_personne' value='<?=$resa['resa_nbpersonne']?>' required>
    </label>
    </br>
    <label for="">  resa date
        <input type="text" name='date' value='<?=$resa['resa_date']?>'required>
    </label>
    </br>
    <label for="">  resa prix
        <input type="text" name='prix' value='<?=$resa['resa_prix']?>' required>
    </label>
    </br>

    <input type="submit" value="valider" required>

    <a href="bo.php?action=del_resa&resa=<?=$resa['resa_id']?>"> supprimer cette réservation</a>
    </form>
    </br>
    </br>
    </br>
    </br>


<?php
}