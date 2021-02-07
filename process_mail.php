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
                            //-------------------------
                            $_SESSION["message_envoye"] = true;
                            //-------------------------
                            unset($_SESSION["captcha_one_error_time_stamp"]);
                            unset($_SESSION["captcha_error"]);
                            if ($_SESSION["nbr_email"] === 3) {
                                $_SESSION["email_max_time_stamp"] = time();
                                $_SESSION["message_max_mail"] = true;
                            }

                        } else {

                                $_SESSION["probleme_technique"] = true;
                        }   
                    } else {

                        $_SESSION["message_non_conforme"] = true;
                    }
                } else {

                    $_SESSION["message_zone_vide"] = true;
                }
            } else {

                if (!$_SESSION["captcha_one_error_time_stamp"]){
                    $_SESSION["captcha_one_error_time_stamp"] = time();
                }
                
                $_SESSION["captcha_error"] += 1;
                if (!$_SESSION["captcha_error_time_stamp"] && $_SESSION["captcha_error"] === 5) {

                    $_SESSION["captcha_error_time_stamp"] = time();
                }

                if ($_SESSION["captcha_error"] != 5){

                    $_SESSION["message_captcha_error"] = true;

                } else {
                    $_SESSION["message_captcha_error_max"] = true;
                }

            }
        } else {
            $_SESSION["message_max_mail"] = true;
        }
    } else {
        $_SESSION["message_captcha_error_max"] = true;
    }
} else {

}

header('Location: index.php');
?>
