<a href="bo.php">home</a>
<a href='bo.php?action=logout'>déconnexion</a>

<?php
foreach ($faq as $faqs) {
?>
    <!-- <h2>$faqs[]</h2> -->

    <form action="bo.php?action=modif_faq&faq=<?= $faqs['faq_id'] ?>" enctype="multipart/form-data" method='post' style="display: grid">
        <label for="">Question
            <input type="text" value='<?= $faqs['faq_titre'] ?>' required name='questionfr'>
        </label>
        <label for="">Réponse
            <input type="text" value='<?= $faqs['faq_rep'] ?>' required name='repfr'>
        </label>
        <label for="">Question
            <input type="text" value='<?= $faqs['faq_titre_eng'] ?>' required name='questionen'>
        </label>
        <label for="">Answer
            <input type="text" value='<?= $faqs['faq_rep_eng'] ?>' required name='repen'>
        </label>
        <input type="submit" value='valider' required>
        <a href="bo.php?action=delete_faq&faq=<?= $faqs['faq_id'] ?>">delete question</a>
    </form>

<?php
}
