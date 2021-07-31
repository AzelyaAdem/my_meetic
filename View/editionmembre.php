<?php
session_start();
include_once("../Model/editionprofil.php");
$connexion = new modifier();
$user = $connexion->data_member();
$connexion->edition();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/edition.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="body-part"></div>
        <div class="box">
        <div class="text-center">
        <div class="connexion">
            <h3>EDITION DE MON PROFIL</h3>
            <br>
            <form method="POST" action="editionmembre.php">
                <div class="input-container">
                    <input type="text" name="newPrenom" placeholder="Prénom" value="<?php echo $user['prenom']; ?>" />
                    <label>Prénom :</label>
                    <br /><br />
                </div>
                <div class="input-container">
                    <input type="text" name="newNom" placeholder="Nom" value="<?php echo $user['nom']; ?>" />
                    <label>Nom :</label>
                    <br /><br />
                </div>
                <div class="input-container">
                    <input type="text" name="newVille" placeholder="Ville" value="<?php echo $user['ville']; ?>" />
                    <label>Ville :</label>
                    <br /><br />
                </div>
                <div class="input-container">
                    <input type="text" name="newMail" placeholder="Mail" value="<?php echo $user['mail']; ?>" />
                    <label>Email :</label>
                    <br /><br />
                </div>
                <div class="input-container">
                    <input type="password" name="newMdp" placeholder="Mot de passe" />
                    <label>Mot de passe :</label>
                    <br /><br />
                </div>
                <div class="input-container">
                    <input type="password" name="newMdp2" placeholder="Confirmation du mot de passe" />
                    <label>Confirmation du mot de passe :</label>
                    <br /><br />
                </div>
                <input type="submit" value="Mettre à jour mon profil !" class="btn2" /><br /><br />
            </form>
            <span id="alerte"><?php if (null !== $connexion->edition()) {
                                    echo $connexion->edition();
                                } ?></span>
        </div>
        </div>
        </div>
    </header>
</body>

</html>