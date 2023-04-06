<?php

class config{
    public const DBHOST ="localhost";
    public const DBNAME ="sae_401";
    public const DBUSER ="root";
    public const DBPWD="";

    public const TITREONGLET="Kaiserstuhl Escape";

    public const MENU="<a class='lien' href='index.php?action=aventures'>Les aventures</a>
    <a class='lien' href='index.php?action=cadeaux'>Les cadeaux</a>
    <a class='lien' href='index.php?action=faq'>F.A.Q</a>
    <a class='lien' href='index.php?action=contact'>Contact</a>
    <a class='lien' href='index.php?action=panier'><img src='img/header/paniers.png' alt='Icône de panier'></a>
    <a class='lien' href='index.php?action=connexion'><img src='img/header/utilisateur.png' alt='Icône connexion'></a>";

    public const MENUENG="<a class='lien' href='index.php?action=aventures'>Adventure</a>
    <a class='lien' href='index.php?action=cadeaux'>Gift</a>
    <a class='lien' href='index.php?action=faq'>F.A.Q</a>
    <a class='lien' href='index.php?action=contact'>Contact</a>
    <a class='lien' href='index.php?action=panier'><img src='img/header/paniers.png' alt='Icône de panier'></a>
    <a class='lien' href='index.php?action=connexion'><img src='img/header/utilisateur.png' alt='Icône connexion'></a>";

    public const FOOTER = "
    <a class='lien' href='index.php?action=cgv'>CGV</a><p> | </p>
    <a class='lien' href='index.php?action=mentions'>Mentions légales</a><p> | </p>
    <a class='lien' href='index.php?action=politique'>Politique de confidentialité</a>";

    public const FOOTERENG= "
    <a class='lien' href='index.php?action=cgv'>Terms and Conditions of Sale</a><p> | </p>
    <a class='lien' href='index.php?action=mentions'>Legal notice</a><p> | </p>
    <a class='lien' href='index.php?action=politique'>Privacy Policy</a>";
}