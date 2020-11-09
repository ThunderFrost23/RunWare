<?php
    session_start(); 
    require "../Model/modele.php";

    if(isset($_POST['mailUtil']) && isset($_POST['mdpUtil'])) {
        $database = new DB();
        $login = $database->login();
    }

    
    if(isset($_POST['civil']) && isset($_POST['Mdp']) && isset($_POST['Nom']) && isset($_POST['Pnom']) && isset($_POST['Email']) && isset($_POST['Numero']) && isset($_POST['DateNaiss'])) {
        $database = new DB();
        $inscrit = $database->inscription();
        $message = "Vous êtes bien inscrit !";
        header("Location:index.php?message=".$message);
    }
?>