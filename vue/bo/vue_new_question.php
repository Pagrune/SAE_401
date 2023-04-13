<!-- <a href="bo.php">home</a>
<a href='bo.php?action=logout'>déconnexion</a> -->
<h1>Add questions and answers</h1>
<div id="new_questions">
    <form action="bo.php?action=enreg_new_question" enctype="multipart/form-data" method='post'>
        <div class="titre">In french</div>
        <label for="">Question
            <input type="text" value='' required name='questionfr'>
        </label>
        <label for="">Réponse
            <input type="text" value='' required name='repfr'>
        </label>
        <div class="titre">In english</div>
        <label for="">Question
            <input type="text" value='' required name='questionen'>
        </label>
        <label for="">Answer
            <input type="text" value='' required name='repen'>
        </label>
        <input type="submit" value='Confirm' required>
    </form>
</div>