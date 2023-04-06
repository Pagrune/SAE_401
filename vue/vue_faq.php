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
                <?php 
                if(!isset($_COOKIE["lang"])){
                    echo $quest['faq_titre'];
                }
                else{
                    if($_COOKIE["lang"]=='fr'){
                        echo $quest['faq_titre'];
                    }
                    if($_COOKIE['lang']=='eng'){
                        echo $quest['faq_titre_eng'];
                    }
                }
                ?>
            </h3>
            <img src="img/icons/fleche_bas.svg" alt="icone flèche bas">
        </div>
        <div class="contenu_faq">
            <p>
            <?php 
                if(!isset($_COOKIE["lang"])){
                    echo $quest['faq_rep'];
                }
                else{
                    if($_COOKIE["lang"]=='fr'){
                        echo $quest['faq_rep'];
                    }
                    if($_COOKIE['lang']=='eng'){
                        echo $quest['faq_rep_eng'];
                    }
                }
                ?>
            </p>
        </div>
    </div>
    <?php } ?>
</div>