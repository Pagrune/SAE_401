<h1>Reservation management</h1>
<?php
// var_dump($resas);


foreach ($resas as $resa) {
?>
    
    <div id="booking">
        <form action="bo.php?action=modif_resa&resa=<?= $resa['resa_id'] ?>" method="post">
            <div class="titre">Réservation n°<?= $resa['resa_id'] ?></div>
            <label for=""> Schedule
                <input type="text" name='horaire' value='<?= $resa['resa_horaire'] ?>' required>
            </label>
            </br>
            <label for=""> Id client
                <input type="text" name='id_client' value='<?= $resa['id_user'] ?>' required>
            </label>
            </br>
            <label for=""> Id game
                <input type="text" name='id_game' value='<?= $resa['resa_idgame'] ?>' required>
            </label>
            </br>
            <label for=""> Number of people
                <input type="text" name='nb_personne' value='<?= $resa['resa_nbpersonne'] ?>' required>
            </label>
            </br>
            <label for=""> Date
                <input type="text" name='date' value='<?= $resa['resa_date'] ?>' required>
            </label>
            </br>
            <label for=""> Price
                <input type="text" name='prix' value='<?= $resa['resa_prix'] ?>' required>
            </label>
            </br>
            <div class="btn">
                <a class="btnSup" href="bo.php?action=del_resa&resa=<?= $resa['resa_id'] ?>">Delete reservation</a>
                <input type="submit" value="Save the changes" required>
            </div>
        </form>
    </div>
<?php
}
