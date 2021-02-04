<?php
session_start();


if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['message']) && isset($_POST['email'])){

    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['message'] = $_POST['message'];
    echo print_r($_SESSION);
    
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
                $_SESSION['mail'] = '';
                $_SESSION['message'] = '';

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
    //aucun message nécessaire car altération volontaire du formulaire
}

header('Location: index.php');
?>
