<!-- <a href="bo.php">home</a>
<a href='bo.php?action=logout'>déconnexion</a> -->
<div id="new_questions">
    <form action="bo.php?action=enreg_new_question" enctype="multipart/form-data" method='post'>
        <label for="">Question
            <input type="text" value='' required name='questionfr'>
        </label>
        <label for="">Réponse
            <input type="text" value='' required name='repfr'>
        </label>
        <label for="">Question
            <input type="text" value='' required name='questionen'>
        </label>
        <label for="">Answer
            <input type="text" value='' required name='repen'>
        </label>
        <input type="submit" value='valider' required>
    </form>
</div>