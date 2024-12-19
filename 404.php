<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .error-container {
            text-align: center;
            max-width: 600px;
        }
        .error-title {
            font-size: 5rem;
            color: #d63542;
            font-weight: bold;
        }
        .error-text {
            font-size: 1.5rem;
            color: white;
        }
        .back-btn {
            margin-top: 20px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1 class="error-title">404</h1>
        <p class="error-text">Oups ! La page que vous cherchez n'existe pas.</p>
        <div class="bouton">
            <a href="index.php"><button class="h">Retour à l'accueil</button></a>
        </div>
    </div>
</body>
</html>