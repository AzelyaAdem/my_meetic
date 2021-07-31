<?php
include_once("../Model/gestionprofil.php");
$connexion = new lagestion();
$userinfo = $connexion->gestion();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/ScrollingMenu.css">
    <link rel="stylesheet" href="CSS/profil.css">
    <link rel="stylesheet" href="CSS/button.css">
    <link rel="stylesheet" href="CSS/buttonHref.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <h1 id="title">BSARTEK</h1>
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
                        <h5 id="Prenom">Profil de <?php echo $userinfo['prenom']; ?></h5>
                        <span id="Nom">Commencez quelque chose de réel *</span>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="containerUl">
                    <ul>
                        <li class="child-menu">
                            <a href="#"><span>Votre Profil</span> <span class="fa fa-angle-right toggle-right">▾</span>
                            </a>
                            <ul class="child-menu-ul">
                                <li>
                                    <a href="../index.php">Accueil</a>
                                </li>
                                <li>
                                    <a href="editionmembre.php">Modifier votre Profil</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="body-part"></div>

        <a href="../Controller/deconnexion.php" class="btn">Se déconnecter</a>
    </header>
    
    <div class="box"><img id="Wac">
        <div class="text-center">  
            <br /><br />
            <span>Prénom = <?php echo $userinfo['prenom']; ?></span>
            <br />
            <span>Nom = <?php echo $userinfo['nom']; ?></span>
            <br />
            <span>Mail = <?php echo $userinfo['mail']; ?></span>
            <br />
            <span>Mot de passe = <?php echo $userinfo['motdepasse']; ?></span>
            <br />
            <span>Ville = <?php echo $userinfo['ville']; ?></span>
            <br />
            <span>Date de naissance = <?php echo $userinfo['datedenaissance']; ?></span>
            <br />
            <span>Genre = <?php echo $userinfo['genre']; ?></span>
            <br />
        </div>
        <div class="Inscrit">
            <a href="editionmembre.php" id="edition">
                <span class="thin">Modifier votre </span><span class="thick">profil !</span>
            </a>
        </div>
    </div>
    <script src="JS/headerMenu.js"></script>
</body>

</html>