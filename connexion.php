<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./CSS/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion</title>
    <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
  </head>
  <body>       
        <?php include_once('./addon/header.php'); ?>
        <section class="section_connexion">
            <div class="tab-header">
                <a class="tab-link active" data-ref="connexion" href="javascript:void(0)">Connexion</a>
                <a class="tab-link" data-ref="inscription" href="javascript:void(0)">Inscription</a>
            </div>
            <div class="tab-body" data-id="connexion">
                <h2>Connexion a votre compte</h2>
                <form action="verifconnexion.php" method="POST" class="form-container">
                    <div class="form-group">
                        <label for="mail">Mail*</label>
                        <input type="email" id="mail" name="mail" required placeholder="nom.prenom@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de Passe*</label>
                        <input type="password" id="mdp" name="mdp" required placeholder="mot de passe">
                    </div>
                    <button type="submit" class="btn-submit">Connexion</button>
                </form>
            </div>
            <div class="tab-body" data-id="inscription">
                <h2>Creation de votre compte</h2>
                <form action="___.php" method="POST" class="form-container">
                    <div class="form-group">
                        <label for="mail">Mail*</label>
                        <input type="email" id="mail" name="mail" required placeholder="nom.prenom@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de Passe*</label>
                        <input type="password" id="createmdp" name="mdp" required placeholder="mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Confirmez le Mot de Passe*</label>
                        <input type="password" id="confirmmdp" name="mdp" required placeholder="mot de passe">
                    </div>
                    <button type="submit" class="btn-submit">Inscription</button>
                </form>
            </div>
        </section>
        <br>
        <?php include_once('./addon/Footer.php'); ?>
    </body>
</html>
