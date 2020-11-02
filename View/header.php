<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/banner.css">
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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
                        <li class="nav-item btn"><a href="vue_conn.php" class="nav-link">Connexion</a></li>
                        <li class="nav-item btn btn-secondary button"><a href="vue_panier.php" class="nav-link">Panier</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</html>