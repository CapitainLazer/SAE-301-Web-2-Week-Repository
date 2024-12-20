<?php
   http_response_code(404);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 404</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
</head>
<body class="erreur404">
    <div class="error-container">
        <h1 class="error-title">404</h1>
        <p class="error-text">Oups ! La page que vous cherchez n'existe pas.</p>
        <div class="bouton">
            <a href="index.php"><button class="h">Retour à l'accueil</button></a>
        </div>
    </div>
</body>
</html>