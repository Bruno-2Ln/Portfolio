<?php
session_start();
//TODO : Mettre en place un effacement du nombre de mail et error_captcha de la session toutes les ?

if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['message']) && isset($_POST['email']) && isset($_POST['captcha'])){

    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['message'] = $_POST['message'];

    if ($_SESSION['captcha_error'] < 5){

        if ($_SESSION["nbr_email"] < 3){

            if ($_POST['captcha'] == $_SESSION['captcha']){
            
                if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['message']) && !empty($_POST['email'])) {

                    if (preg_match("/^[A-Za-z '-]+$/", $_POST['prenom']) && preg_match("/^[A-Za-z '-]+$/", $_POST['nom']) && preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}/", $_POST['email'])) {

                        $dest = "bruno-d-34@hotmail.fr";
                        $object = "Contact Portfolio";
                        $text = $_POST['prenom'] . " " . $_POST['nom'] . " \n" . $_POST['email'] . "\n";
                        $text.= $_POST['message'];

                        if (mail($dest, $object, htmlspecialchars($text))){

                            //Le mail étant envoyé, les valeurs des champs n'ont plus besoin de retour et la redirection se fait sur un formulaire vierge
                            $_SESSION['prenom'] = '';
                            $_SESSION['nom'] = '';
                            $_SESSION['email'] = '';
                            $_SESSION['message'] = '';

                            $_SESSION["nbr_email"] += 1;
                            unset($_SESSION["captcha_one_error_time_stamp"]);
                            unset($_SESSION["captcha_error"]);
                            if ($_SESSION["nbr_email"] === 3) {
                                $_SESSION["email_max_time_stamp"] = time();
                            }
                            //TODO : message de réussite de l'envoie

                        } else {
                                //TODO : problème lors de l'envoie message invitant à une nouvelle tentative ou à me recontacter via linkedin si le problème persiste
                        }   
                    } else {
                        //TODO : message informant d'un mauvais remplissage du formulaire
                    }
                } else {
                    //TODO : message informant d'une zone vide du formulaire
                }
            } else {
                //TODO : captcha incorrect
                if (!$_SESSION["captcha_one_error_time_stamp"]){
                    $_SESSION["captcha_one_error_time_stamp"] = time();
                }
                
                $_SESSION["captcha_error"] += 1;
                if (!$_SESSION["captcha_error_time_stamp"] && $_SESSION["captcha_error"] === 5) {

                    $_SESSION["captcha_error_time_stamp"] = time();
                }
            }
        } else {
            //TODO : message informant que la limite du nombres de mails possibles est atteinte mais que je ne manquerai pas de répondre aux précédents très rapidemment.
        }
    } else {
        //TODO : nombres de tentatives du captcha atteintes
    }
} else {
    //aucun message nécessaire car altération volontaire du formulaire
}

header('Location: index.php');
?>
