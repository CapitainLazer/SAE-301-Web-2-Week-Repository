<?php
    session_start();
    // Vérifier si l'utilisateur est connecté
    if (!isset($_SESSION['user_id'])) {
        header('Location: ./connexion.php'); // Rediriger si non connecté
        exit();
    }

    // Récupérez les informations utilisateur si nécessaire
    $userId = $_SESSION['user_id'];
    $userMail = $_SESSION['user_mail'];

    header('Location: ./User/PageUser.php'); // Rediriger si non connecté
    exit();
?>