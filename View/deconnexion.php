<?php
    session_start();
    session_destroy();
    $message = "Vous êtes bien deconnecté !";
    header("Location:index.php?message=".$message);
?>