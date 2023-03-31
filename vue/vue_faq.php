<!-- <?php
var_dump($faq);
?> -->
<div id="faq">
    <h1>
        FAQ
    </h1>
    <h2>
        Questions générales
    </h2>
    <?php foreach($faq as $quest) {
                   
    ?>
                
    <div class="toggle">
        <div class="el-toggle">
            <h3>
                <?=$quest['faqsj_quest'];?>
            </h3>
            <img src="img/icons/fleche_bas.svg" alt="icone flèche bas">
        </div>
        <div class="contenu_faq">
            <p>
                <?=$quest['Faqsj_rep']?>
            </p>
        </div>
    </div>
    <?php } ?>
</div>