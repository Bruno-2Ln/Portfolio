<?php
session_start();


if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['message'])){

    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['message'] = $_POST['message'];
    echo print_r($_SESSION);
    
    if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['message'])) {

        if (preg_match("/^[A-Za-z '-]+$/", $_POST['prenom']) && preg_match("/^[A-Za-z '-]+$/", $_POST['nom'])) {

            $dest = "bruno-d-34@hotmail.fr";
            $object = "Contact Portfolio";
            $text = $_POST['prenom'] . " " . $_POST['nom'] . " \n";
            $text.= $_POST['message'];

            if (mail($dest, $object, htmlspecialchars($text))){

                //Le mail étant envoyé, les valeurs des champs n'ont plus besoin de retour et la redirection se fait sur un formulaire vierge
                $_SESSION['prenom'] = '';
                $_SESSION['nom'] = '';
                $_SESSION['message'] = '';

                header('Location: index.php');
            } else { ;}

        } else {}
    } else {}
} else {}
?>
