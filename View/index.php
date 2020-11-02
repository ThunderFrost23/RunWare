<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>RunWare</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <?php include 'header.php' ?>
    <link rel="stylesheet" href="../css/articles_accueil.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </head>

  <body>
    <br><br>
    <div id="carouselPub" class="container carousel slide imgCarousel col-10" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="../photos/pub1.jpg" class="d-block pub">
        </div>

        <div class="carousel-item">
          <img src="../photos/pub2.jpg" class="d-block pub">
        </div>

        <div class="carousel-item">
          <img src="../photos/pub4.jpg" class="d-block pub">
        </div>
      </div>

      <a href="#carouselPub" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>

      <a href="#carouselPub" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>

    <script>
      $('.carousel').carousel({
        pause: "null"
      })
    </script>


    <br><br>
    <h3 class="center">Des articles qui peuvent vous intéressez!</h3>


<div align="center">
<?php
$var = rand(1,5);
if($var ==1){
  echo '<img src="corei5.jpg">' ;
    }
if($var ==2){
  echo '<img src="msi_a320m.jpg"> ';
    }
if($var ==3){
  echo '<img src="gtx1660.jpg"> ';
    }
if($var ==4){
  echo '<img src="hdd1to.jpg"> ';
    }
if($var ==5){
  echo '<img src="geforcegtx1650.jpg"> ';
    }
?>
</div>


  </body>
</html>