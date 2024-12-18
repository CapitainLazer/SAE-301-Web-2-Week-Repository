<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../connexion.php');
        exit();
    }
    $userId = $_SESSION['user_id'];
    $userMail = $_SESSION['user_mail'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mumo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
            <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
    </head>
    <body>
        <?php include_once('../addon/header2.php');?>
        <main class="content">
            <a href="../deconnexion.php"><button>Déconnexion</button></a>
        </main>
        <?php include_once('../addon/Footer2.php');?>
    </body>
</html>