<?php
session_start();


if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['message'])){
     
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['message'] = $_POST['message'];
echo print_r($_SESSION);
    
}

?>
