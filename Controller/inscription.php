<?php

include "../Model/database.php";

class inscription extends database {

    public function inscription_request() {

        if(isset($_POST['forminscription'])){
            $nom = htmlspecialchars($_POST['nom'])??null;
            $prenom = htmlspecialchars($_POST['prenom'])??null;
            $mail = htmlspecialchars($_POST['mail'])??null;
            $mail2 = htmlspecialchars($_POST['mail2'])??null;
            $mdp = sha1($_POST['mdp'])??null;
            $mdp2 = sha1($_POST['mdp2'])??null;
            $ville = htmlspecialchars($_POST['ville'])??null;
            $date = $_POST['datedenaissance']??null;
            $genre = $_POST['genre']??null;

            if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['datedenaissance']) AND !empty($_POST['genre']) AND !empty($_POST['ville']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])){
                $nomlength = strlen($nom);
                $prenomlength = strlen($prenom);
                $villelength = strlen($ville);
                $dateArray = explode('-',$date);
                $dateBirth = (int)$dateArray[0];
                $dateYear = (int)date("Y");

                if($nomlength <= 255){   
                    if($prenomlength <= 255){
                        if($villelength <= 255){
                            if($dateYear - $dateBirth > 18){
                                    if($mail == $mail2){                                
                                        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                                            
                                            require "../Model/inscriptionREQ2.php";

                                            if($mailexist == 0){
                                                if($mdp == $mdp2){

                                                    require "../Model/inscriptionREQ.php";

                                                }else{
                                                    return "Vos mots de passe ne correspondent pas !";
                                                }
                                            }else{
                                                return "Adresse mail d??j?? utilis??e !";
                                            }    
                                        }else{
                                            return "Votre adresse mail n'est pas valide !"; 
                                        }
                                    }else{
                                        return "Vos adresses mail ne correspondent pas !";
                                    }
                            }else{
                                return "Vous devez avoir plus de 18 ans pour acc??der au site !";
                            }    
                        }else{
                            return "Votre ville ne dois pas d??pass??es 58 caract??res !";
                        }
                    }else{
                        return "Votre prenom ne dois pas d??pass??es 255 caract??res !";
                    }
                }else{
                    return "Votre nom ne dois pas d??pass??es 255 caract??res !";
                }
            }else{
                return "Tous les champs doivent ??tre compl??t??s !";
            }
        }
    }
}