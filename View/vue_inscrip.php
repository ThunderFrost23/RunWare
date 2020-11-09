<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link href="../css/connexion.css" rel="stylesheet">
    </head>

     <body>
         <div class="container">
             <h1>Inscription</h1>
             <form action="" method="POST">
               <fieldset>
                 <legend>Formulaire d'inscription</legend>
                 
                <div class="form-group">
                    <label for="Civilité" class="col-sm-2 control-label">Civilité</label>
                    <div class="col-sm-13">
                        <select name="civil" class="form-control">
                            <option>Femme</option>
                            <option>Homme</option>
                        </select>
                    </div>
                </div>

                 <div class="form-group">
                   <label for="nom">Nom</label>
                   <input name="Nom" type="text" class="form-control" id="nom" placeholder="">
                 </div>
                 
                 <div class="form-group">
                   <label for="prenom">Prénom</label>
                   <input name="Pnom" type="text" class="form-control" id="pnom" placeholder="">
                 </div>

                 <div class="form-group">
                   <label for="prenom">Mot de passe</label>
                   <input name="Mdp" type="password" class="form-control" id="mdp" placeholder="">
                 </div>
                 

                 <div class="form-group">
                   <label for="email">Email</label>
                   <input name="Mail" type="email" class="form-control" id="email" placeholder="Exemple: runware974@gmail.com">
                 </div>

                 <div class="form-group">
                    <label for="numero">Numéro de téléphone</label>
                    <input name="Numero" type="text" class="form-control" name="number" maxlength="10">
                 </div>

                 <div class="form-group">
                    <label for="datedenaissance">Date de naissance</label>
                    <input name="DateNaiss" type="date" class="form-control" name="dateNaiss" value="01-01-1990" min="01-01-1950" max="01-01-2004">
                 </div>
                 
                 <br>

                 <input class="btn btn-primary" type="submit" value="S'inscire">

               </fieldset>
             </form>
         </div>
         <?php if(isset($_POST['Mdp'])) {
           echo sha1($_POST['Mdp']);
         }
         ?>
    </body>
</html>
