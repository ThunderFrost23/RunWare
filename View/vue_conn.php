<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link href="../css/connexion.css" rel="stylesheet">
    </head>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    </head>
    <body class="text-center">
        <form class="form-signin">
            <img class="mb-4" src="../photos/login.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Veuillez vous connecter!</h1>
            <label for="inputEmail" class="sr-only">Adresse mail</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
            <p class="mt-5 mb-3 text-muted">Vous n'êtes pas inscrit ? <a href="vue_inscrip.php">Cliquez ici</a> pour vous inscrire</p>
        </form>
    </body>
</html>
