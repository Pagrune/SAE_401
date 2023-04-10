<?php
var_dump($clients);

foreach($clients as $client){
    
?>
<form action="bo.php?action=modif_game" method='post'>

<label for=''>horaire de la reservation</label>
<input type="text" name="horaire" value='' id="">
</form>

<?php
}