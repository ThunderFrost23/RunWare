<html lang="fr">
    <head>
        <meta charset="UTF-8">

        <!--Lien vers le CSS et l'en-tête-->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">

        <?php include "header.php" ?>
    </head>	

    <body>
        <?php
            require_once('../Controller/controleur.php');

            $database = new DB();
            $ficheProduit = $database->afficherProduit();         
        ?>

    </body>