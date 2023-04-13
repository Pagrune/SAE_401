<h1>F.A.Q. management</h1>
<?php
foreach ($faq as $faqs) {
?>
   
    <div id="faq">
        <form action="bo.php?action=modif_faq&faq=<?= $faqs['faq_id'] ?>" enctype="multipart/form-data" method='post' style="display: grid">
            <div class="titre">In french</div>
            <label for="">Question
                <textarea value='' required name='questionfr'><?= $faqs['faq_titre'] ?></textarea>
            </label>
            <label for="">Réponse
                <textarea value='' required name='repfr'><?= $faqs['faq_rep'] ?></textarea>
            </label>
            <div class="titre">In english</div>
            <label for="">Question
                <textarea value='' required name='questionen'><?= $faqs['faq_titre_eng'] ?></textarea>
            </label>
            <label for="">Answer
                <textarea value='' required name='repen'><?= $faqs['faq_rep_eng'] ?></textarea>
            </label>
            <div class="btn">
                <a class="btnSup" href="bo.php?action=delete_faq&faq=<?= $faqs['faq_id'] ?>">Delete the question</a>
                <input type="submit" value='Save the changes' required>
            </div>
        </form>
    </div>
<?php
}
