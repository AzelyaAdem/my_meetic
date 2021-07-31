<?php
session_start();

require "../Model/database.php";
class connect extends database {

    public function connexion() {

        if (isset($_POST['formconnexion'])) {
            $mailconnect = htmlspecialchars($_POST['mailconnect']);
            $mdpconnect = sha1($_POST['mdpconnect']);
            if (!empty($mailconnect) and !empty($mdpconnect)) {

                require "../Model/connexionREQ.php";

                if ($userexist == 1) {
                    $userinfo = $requser->fetch();
                    $_SESSION['id'] = $userinfo['id'];
                    $_SESSION['mail'] = $userinfo['pseudo'];
                    header("Location: ../View/profilmembre.php?id=" . $_SESSION['id']);
                } else {
                    return "Mail ou mot de passe incorrect !";
                }
            } else {
                return "Tous les champs doivent être complétés !";
            }
        }
    }
}