<?php
    session_start();
    include("./config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
    $mdp = $_POST["mdp"];
    if (!$mail || empty($mdp)) {
        header('Location: index.php?error=5');
        exit();
    }
    $requete = 'SELECT * FROM compte WHERE mail = :mail';
    $stmt = $bdd->prepare($requete);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->execute();
    $compte = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($compte && sha1($mdp) == $compte['mdp']) {
        $_SESSION['user_id'] = $compte['id_compte'];
        $_SESSION['user_mail'] = $compte['mail'];
        header('Location: ./user/pageuser.php');
        exit();
    }
    $requeteAdmin = 'SELECT * FROM admin WHERE mail = :mail';
    $stmtAdmin = $bdd->prepare($requeteAdmin);
    $stmtAdmin->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmtAdmin->execute();
    $admin = $stmtAdmin->fetch(PDO::FETCH_ASSOC);
    if ($admin && sha1($mdp) == $admin['mdp']) {
        $_SESSION['user_id'] = $admin['id'];
        $_SESSION['user_mail'] = $admin['mail'];
        header('Location: ./admin/pageadmin.php');
        exit();
    }
    header('Location: index.php?error=4');
    exit();
?>