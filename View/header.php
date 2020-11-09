<?php
    session_start(); 
    require_once('../Controller/controleur.php');
        
    $database = new DB();
    if(isset($_SESSION['idUtil'])) {
        $utilOnline = $database->getClient($_SESSION['idUtil']);
    }
    ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/banner.css">
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.5.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>

    <header>
        <div class="container-fluid">
            <div class="logo">
                <img src="../photos/logo.png" alt="logo">
            </div>

            <div class="banner">
                <img src="../photos/ba.jpg">
            </div>

            <nav class="navbar navbar-expand-sm navbar-light bg-transparent">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <a href="index.php" class="navbar-brand">RunWare</a>
                    <ul class="navbar-nav">
                        <li class="nav-item btn"><a href="index.php" class="nav-link">Accueil</a></li>
                        <li class="nav-item btn"><a href="vue_produits.php?page=1" class="nav-link">Produits</a></li>
                        <li class="nav-item btn"><a href="vue_contact.php" class="nav-link">Contact</a></li>
                     
                    </ul>
                    
                    <ul class="navbar-nav" style='margin-left:auto;'>
                    <?php if(!isset($_SESSION['idUtil'])) { ?>
                        <li class="nav-item btn"><a href="vue_conn.php" class="nav-link">Connexion</a></li>
                    <?php } else { ?>
                        <li class="nav-item btn"><a class="nav-link" ><?php echo $utilOnline->nomUtil." ".$utilOnline->pnomUtil ?></a></li>
                        <li class="nav-item btn"><a href="deconnexion.php" class="nav-link">Déconnexion</a></li>
                    <?php } ?>
                        <li class="nav-item btn btn-secondary button"><a href="vue_panier.php" class="nav-link">Panier</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</html>