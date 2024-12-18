<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
        <title>Merci</title>
    </head>
    <body>
        <?php include_once('addon/header.php');?>
        <main class="content">
            <h1>Merci pour votre message !</h1>
            <p>Nous vous répondrons dans les plus brefs délais.</p>
            <a href="index.php">Retour à l'accueil</a>
        </main>
        <?php include_once('addon/Footer.php');?>
    </body>
</html>