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
             <form>
               <fieldset>
                 <legend>Formulaire d'inscription</legend>
                 
                <div class="form-group">
                    <label for="Civilité" class="col-sm-2 control-label">Civilité</label>
                    <div class="col-sm-13">
                        <select class="form-control">
                            <option>Femme</option>
                            <option>Homme</option>
                        </select>
                    </div>
                </div>

                 <div class="form-group">
                   <label for="nom">Nom</label>
                   <input type="text" class="form-control" id="nom" placeholder="">
                 </div>
                 
                 <div class="form-group">
                   <label for="prenom">Prénom</label>
                   <input type="text" class="form-control" id="nom" placeholder="">
                 </div>
                 

                 <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" id="email" placeholder="runware974@gmail.com">
                 </div>

                 <div class="form-group">
                    <label for="datedenaissance">Date de naissance</label>
                    <input type="date" class="form-control" name="dateNaiss" value="01-01-1990" min="01-01-1950" max="01-01-2004">
                 </div>
               </fieldset>
             </form>
         </div>
    </body>
</html>
