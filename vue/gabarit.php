<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?= config::TITREONGLET ?></title>
  <link href="style/style.css" rel="stylesheet">
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
        <a href="">
          <img src="img/header/la-france.png" alt="Drapeau français">
        </a>
        <a href="">
          <img src="img/header/royaume-uni.png" alt="Drapeau Royaume-Uni">
        </a>
        
      </div>
      <div class="menu_icon_mobile">
        <img src="img/header/icon_menu.svg" alt="icône de menu">
      </div>
      <div class="block_menu_mobile">
        <div class="menu"><?= config::MENU ?></div>
      </div>
      <div class="block_menu_ordi">
        <div class="menu"><?= config::MENU ?></div>
      </div>
    </div>
  </header>
  <main>
    
    <?=$contenu?>
  </main>
  <footer>
    <div class="footer_navigation">
      <?= config::FOOTER ?>
    </div>
    <div class="footer_copyright">
      <img src="img/footer/logo-footer.png" alt="Logo Kaiserstuhl escape">
      <p>Les 3 Pélos@</p>
    </div>
  </footer>  
  <script src="js/custom.js"></script>
  <script src="js/panier.js"></script>
  <!-- <script src="js/scriptpanier.js"></script> -->
</body>
</html>