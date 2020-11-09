<html lang="fr">
    <head>
        <meta charset="UTF-8">

        <!--Lien vers le CSS et l'en-tête-->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/ficheProduit.css">

        <?php include "header.php" ?>
    </head>	

    <body>
        <?php
            require_once('../Controller/controleur.php');

            $database = new DB();
            $idProd = $_GET['id'];
            $ficheProduit = $database->afficherProduit($idProd);  
       ?>

        <div class="titleProd">
            <?php echo $ficheProduit->nomProd ?>
        </div>

        <div class="row container-fluid">
            <div class="col">
                <img width="590px" src="<?php echo $ficheProduit->imgProd ?>">
            </div>

            <div class="col">
                <h4 class="prix"><?php echo $ficheProduit->prixProd ?> €</h4><br>
                <h4><?php echo $ficheProduit->descProd ?></h4><br><br>

                <div class="panier">
                    <input type="number" id="quantité" name="Quantité" min="1" max="100" value="1"><br><br>
                    <a class="btn btn-primary" href="vue_panier.php" id="button">AJOUTER AU PANIER</a>
                </div>
            </div>
        </div>
    </body>
    <br><?php include "footer.php" ?>
</html>
