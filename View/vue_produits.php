<html lang="fr">

	<head>
    <meta charset="UTF-8">

    <!--Lien vers le CSS et l'en-tête-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/produits.css">

    <?php include "header.php" ?>
  </head>	

  <body>
      <br>
      <h5 class="container-fluid">Ici, vous pouvez retrouver nos différents produits en vente.</h5><br><br>
      
      <?php
        require_once('../Controller/controleur.php');
        
        $database = new DB();
        $listProd = $database->listeProd();
        $totalPage = $database->paginationProduit();
        
        echo "<div class='container-fluid'>";
          echo "<div class='row my-3'>";
            foreach($listProd as $row) { 
              echo "<div class='col-4'>";
                echo "<div class='card'";
                  echo "<div><img class='produit' src=".$row->imgProd.'></div>';
                echo "<div class='card-body'>";
                  echo "<h5 class='card-title'><small><a href='vue_pageProduit.php?id=".$row->idProd."'>".$row->nomProd."</a></small></h5>";
                  echo "<p class='card-text'><strong class='text-danger'>".$row->prixProd." €"."</strong></p><br><br>";
                echo "</div>";
              echo "</div>";
            }
          echo "</div>";
        echo "</div>";

        echo '<nav aria-label="Page navigation">';
          echo '<ul class="pagination pagination-lg justify-content-end">';          
            for ($i=1; $i <= $totalPage; $i++) { 
              echo '<li class="page-item"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
            }
          echo '</ul>';
        echo '</nav>';
      ?> 
      

  </body>
  
  <br><?php include "footer.php" ?>
</html>