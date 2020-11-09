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

    function login() {
        $strSQL="SELECT * FROM utilisateur WHERE mailUtil=? and mdpUtil=?";
        $result=$this->cnx->prepare($strSQL);
        $login=$_POST['mailUtil'];
        $mdp=$_POST['mdpUtil'];
        $result->execute(array($login, $mdp));
            if($result->rowCount()==1) {
                $idUser = $result->fetch(PDO::FETCH_ASSOC)['idUtil'];
                var_dump($idUser);
                $_SESSION['idUtil'] = $idUser;
            } else {
                $message = "Vos identifiants ne sont pas corrects ou n'existent pas !";
                header("Location:vue_conn.php?message=".$message);
            }
    }

    function inscription() {
        $strSQL = $this->cnx->prepare("INSERT INTO utilisateur('civiliteUtil', 'mdpUtil', 'nomUtil', 'pnomUtil', 'naissUtil', 'mailUtil', 'numUtil') VALUES (?, ?, ?, ?, ?, ?, ?)");
        $strSQL->execute(array($_POST['civil'], sha1($_POST['Mdp']), $_POST['Nom'], $_POST['Pnom'], $_POST['DateNaiss'], $_POST['Mail'], $_POST['Numero']));
    }

    function getClient($idUtil) {
        $strSQL = $this->cnx->prepare("SELECT * FROM utilisateur WHERE idUtil=?");
        $strSQL->execute([$idUtil]);
        
        $requete = $strSQL->fetch(PDO::FETCH_OBJ);
        return $requete;
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

    function afficherProduit($idProd) {
        $strSQL = $this->cnx->prepare("SELECT * FROM produit WHERE idProd = ?");
        $strSQL->execute([$idProd]);

        $requete = $strSQL->fetch(PDO::FETCH_OBJ);
        return $requete;
    }
}
?>