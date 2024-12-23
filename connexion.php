<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mumo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="./js/bouton.js"></script>
        <script src="./js/popup_erreur.js" type="text/javascript"></script>
        <meta name="description" content="Une page consacrée à la création d’un compte ou à la connexion à un compte existant." />
        <link rel="icon" type="image/png" href="./images/favicon_MuMo.png">
</head>
  <body>       
        <?php include_once('./addon/header.php'); ?>
        <section class="section_connexion">
            <div class="tab-body connexion" id="connexion">
                <h2>Connexion a votre compte</h2>
                <form action="verifconnexion.php" method="POST" class="form-container">
                    <div class="form-group">
                        <label for="mail"class="letter-spacing-15">Mail</label>
                        <input type="mail" id="mail" name="mail" required placeholder="nom.prenom@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="mdp"class="letter-spacing-15">Mot de Passe*</label>
                        <input type="password" id="mdp" name="mdp" required placeholder="mot de passe">
                    </div>
                    <button type="submit" class="btn-submit">Connexion</button>
                </form>
            </div>
            <div class="tab-body hidden inscription" id="inscription">
                <h2>Creation de votre compte</h2>
                <form action="creeutilisateur.php" method="POST" class="form-container">
                    <div class="form-group">
                        <label for="mail"class="letter-spacing-15">Mail*</label>
                        <input type="mail" id="mail" name="mail" required placeholder="nom.prenom@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="mdp" class="letter-spacing-15">Mot de Passe*</label>
                        <input type="password" id="createmdp" name="newmdp" required placeholder="mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="mdp"class="letter-spacing-15">Confirmez le Mot de Passe*</label>
                        <input type="password" id="confirmmdp" name="confirmmdp" required placeholder="mot de passe">
                    </div>
                    <button type="submit" class="btn-submit">Inscription</button>
                </form>
            </div>
            <br>
            <div class="tab-header">
                <button class="link-connexion boutonconect hidden">Connexion</button>
                <button class="link-inscription boutonconect">Inscription</button>
            </div>
            <br>
        </section>
        <br>
        <script src="./js/Formulaire_connection.js" defer type="text/javascript"></script>
        <?php include_once('./addon/footer.php'); ?>
        
    </body>
</html>