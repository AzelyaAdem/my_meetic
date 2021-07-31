<?php
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: View/inscriptionmembre.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="View/CSS/accueil.css">
    <link rel="stylesheet" href="View/CSS/ScrollingMenu.css">
    <link rel="stylesheet" href="View/CSS/button.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <h1 id="title">SELMEK</h1>
        <div class="header">
            <div class="left-head">

                <div class="logo">
                    <img src="https://cdn.discordapp.com/attachments/717015565692043304/805534817772634132/I_love_you-removebg-preview.png" alt="logo">
                </div>
                <a href="#" class="toggle-nav">|||</a>
            </div>
            <div class="nice-nav">
                <div class="user-info clear">
                    <div class="user-name ">
                        <h5 id="Prenom">Commencez</h5>
                        <span id="Nom">quelque chose de réel *</span>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="containerUl">
                    <ul>
                        <li class="child-menu">
                            <a href="#"><span>Accueil</span> <span class="fa fa-angle-right toggle-right">▾</span>
                            </a>
                            <ul class="child-menu-ul">
                                <li>
                                    <a href="View/profilmembre.php">Votre Profil</a>
                                </li>
                                <li>
                                    <a href="View/editionmembre.php">Modifier votre Profil</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="body-part"></div>
        <a href="Controller/deconnexion.php" class="btn">Se déconnecter</a>
    </header>
    <div class="slider">
        <ul class="slides">
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/717015565692043304/805527403698978826/image1.png" alt="image1"></li>
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/717015565692043304/805527740966109235/image2.png" alt="image2"></li>
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/717015565692043304/805528170328490054/image3.jpg" alt="image3"></li>
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/717015565692043304/805528526441938994/image4.png" alt="image4"></li>
            <li class="slide"><img src="https://cdn.discordapp.com/attachments/717015565692043304/805528712451850330/image5.png" alt="image5"></li>
        </ul>
    </div>
    <script src="View/JS/headerMenu.js"></script>
</body>

</html>