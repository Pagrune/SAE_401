<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Administration du site</title>
  <link href="style/style_bo.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header_logo">
      <a href="index.php">
        <img src="img/header/logo_header.png" alt="Kaiserstuhl escape logo">
      </a>
    </div>
    <div class="block_menu_ordi">
      <div class="icon_home">
        <img src="./img/header/page-daccueil.png" alt="Icône Home">
        <a href="bo.php">Home</a>
      </div>
      <button class="deconnexion">
          <img src="./img/page_compte/logout.png" alt="icône de déconnexion">
          <a href="bo.php?action=logout">Logout</a>
      </button>
    </div>
  </header>
<?=$contenu?>

</body>
</html>