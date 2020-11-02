<!DOCTYPE html>
<html lang="fr">


   <head> 
      <meta charset="utf-8">

      <link rel="stylesheet" href="../css/contact.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <?php include "header.php" ?>
   </head>

   <body>
      <!-- block d'instruction-->
      <div class="contact-section">
         <h1>Contact</h1><br>
         <h5 class="container-fluid">N'hésitez pas à nous contacter si vous avez des questions.</h5><br><br>

         <!-- Envoie les données au formulaire çi dessus-->
         <form class="contact-form" action="contact.php" method="post">
            
            <input type="text" class="contact-form-text" placeholder="Enter votre nom" >
            <input type="text" class="contact-form-text" placeholder="Entrer votre Telephone">
            <input type="email"class="contact-form-text" placeholder="Entrer votre mail">
            <textarea class="contact-form-text" placeholder="Votre Message"></textarea>
            <input type="submit" class="contact-form-btn" value="envoyer"> 
         </form>
      </div>
   
<?php
   class Database {
    /* attribue*/
   private $cnx;
   } 
    /* constructeur */
    function __construct() {
      try {
            $cnx = new PDO("mysql:host=localhost;dbname=runware",'root', 'admin');    
         }
      catch( PDOException $Exception ) {
            throw new MyDatabaseException( $Exception->getMessage() , (int)$Exception->getCode());
        }
      }
?>
     
   </body>
</html> 