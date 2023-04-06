<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?= config::TITREONGLET ?></title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
  <link href="style/style.css" rel="stylesheet">
  
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
</head>
<body>
  <header>
    <div class="header_logo">
      <a href="index.php">
        <img src="img/header/logo_header.png" alt="Kaiserstuhl escape logo">
      </a>
    </div>
    <div class="header-selector">
      <div class="header-langue">
        <button class="choix_lang" data-lang='fr'>
          <img src="img/header/la-france.png" alt="Drapeau français">
        </button>
        <button class="choix_lang" data-lang='eng'>
          <img src="img/header/royaume-uni.png" alt="Drapeau Royaume-Uni">
        </button>
        
      </div>
      <div class="menu_icon_mobile">
        <img src="img/header/icon_menu.svg" alt="icône de menu">
      </div>
      <div class="block_menu_mobile">
        <div class="menu">
          <?php 
          if(isset($_COOKIE["lang"])){
            echo config::MENU; 
          }
          else{
            echo config::MENUENG;
          }
          ?>
        </div>
      </div>
      <div class="block_menu_ordi">
        <div class="menu"><?php 
          if(!isset($_COOKIE["lang"])){
            echo config::MENU; 
          }
          else{
            if($_COOKIE["lang"]=='fr'){
              echo config::MENU; 
            }
            if($_COOKIE['lang']=='eng'){
              echo config::MENUENG;
            }
          }
          ?>
          </div>
      </div>
    </div>
  </header>
  <main>
    
    <?=$contenu?>
  </main>
  <footer>
    <div class="footer_navigation">
    <?php 
          if(!isset($_COOKIE["lang"])){
            echo config::FOOTER; 
          }
          else{
            if($_COOKIE["lang"]=='fr'){
              echo config::FOOTER; 
            }
            if($_COOKIE['lang']=='eng'){
              echo config::FOOTERENG;
            }
          }
          ?>
    </div>
    <div class="footer_copyright">
      <img src="img/footer/logo-footer.png" alt="Logo Kaiserstuhl escape">
      <p>Les 3 Pélos@</p>
    </div>
  </footer>  
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
  <script src="js/custom.js"></script>
  <script src="js/panier.js"></script>
  <script>
    let target_lang = document.querySelectorAll(".choix_lang");
      target_lang.forEach(e=>{
     e.addEventListener("click", function(){
          let lang=this.getAttribute("data-lang");
          document.cookie = "lang="+lang;
          window.location.reload();
          });
      });
</script>
  <!-- <script src="js/scriptpanier.js"></script> -->
</body>
</html>