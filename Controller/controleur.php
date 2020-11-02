<?php
require_once('../Model/modele.php');

class produits extends DB {
    
    //Dans le modele.php
    /*function listeProd() {
        $strSQL = $this->cnx->prepare("SELECT * FROM produit");
        $strSQL->execute();
        
        $requete = $strSQL->fetchAll(PDO::FETCH_ASSOC);
        return $requete;
    }*/
}
?>