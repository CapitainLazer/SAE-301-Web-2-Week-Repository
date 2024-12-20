<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: ./connexion.php');
        exit();
    }
    $userId = $_SESSION['user_id'];
    $userMail = $_SESSION['user_mail'];
    header('Location: ./user/pageuser.php');
    exit();
?>