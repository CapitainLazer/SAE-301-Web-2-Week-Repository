<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion</title>
  </head>
  <body>       
        <?php include_once('./addon/header2.php'); ?>
        <h2>Connexion à votre compte</h2>
        <form action='verifconnexion.php' method="POST">
            <div>
                <label>Mail*</label>
                <input type="text" name="mail" required placeholder="nom.prenom@mail.com">
            </div>
            <div>
                <label>Mot de Passe*</label>
                <input type="password" name="mdp" required placeholder="mot de passe">
            </div>
            <input type="submit" value="Connexion">
        </form>
        <br>
        <?php include_once('./addon/Footer2.php'); ?>
    </body>
</html>
