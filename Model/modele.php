<?php
class DB {
    private $cnx = null;

    function __construct() {
        $config = parse_ini_file('config.ini');

        $login  = $config['DB_LOGIN'];
        $passwd = $config['DB_PASSWORD'];
        $base   = $config['DB_NOM'];
        $host   = $config['DB_SERVEUR'];
        $type   = $config['DB_SGBD'];
        $dsn    = $type.':host='. $host.';dbname='. $base;

        $this->cnx = new PDO($dsn, $login, $passwd);
    }


    /*function __destruct() {
        if ($this->resultat!==null) { $this->resultat = null; }
        if ($this->cnx!==null) { $this->cnx = null; }
    }*/


    function Requete($strSQL, $tblValeur){
        $this->resultat = $this->cnx->prepare($strSQL);
        $this->resultat->execute($tblValeur);
        return $this->resultat->fetchAll();
    }
    
    function listeProd() {
        $currentPage = ($_GET['page']*6-6);

        $strSQL = $this->cnx->prepare("SELECT * FROM produit WHERE idProd>$currentPage LIMIT 6");
        $strSQL->execute();
        
        $requete = $strSQL->fetchAll(PDO::FETCH_OBJ);
        return $requete;
    }

    function paginationProduit() {
        $strSQL = $this->cnx->prepare("SELECT(ceil(count(*)/6)) AS 'TotalPage' FROM produit");
        $strSQL->execute();
        
        $requete = $strSQL->fetch(PDO::FETCH_ASSOC);
        return $requete['TotalPage'];
    }

    function afficherProduit() {
        $strSQL = $this->cnx->prepare("SELECT * FROM produit WHERE idProd = ?");

        $requete = $strSQL->fetch(PDO::FETCH_OBJ);
        return $requete;
    }
}
?>