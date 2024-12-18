<?php
    session_start();

    include("./config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
    
    // Récupère l'email et le mot de passe de l'utilisateur
    $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
    $mdp = $_POST["mdp"];

    if (!$mail || empty($mdp)) {
        header('Location: index.php?error=5');
        exit();
    }

    // Vérifier les comptes utilisateurs
    $requete = 'SELECT * FROM compte WHERE mail = :mail';
    $stmt = $bdd->prepare($requete);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->execute();
    $compte = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($compte && sha1($mdp) === $compte['mdp']) {
        // Stocker les informations utilisateur dans la session
        $_SESSION['user_id'] = $compte['id'];
        $_SESSION['user_mail'] = $compte['mail'];
        $_SESSION['is_admin'] = false; // Optionnel : différencier les comptes admin et utilisateur

        header('Location: ./user/PageUser.php');
        exit();
    }

    // Vérifier les comptes admin
    $requeteAdmin = 'SELECT * FROM admin WHERE mail = :mail';
    $stmtAdmin = $bdd->prepare($requeteAdmin);
    $stmtAdmin->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmtAdmin->execute();
    $admin = $stmtAdmin->fetch(PDO::FETCH_ASSOC);

    if ($admin && sha1($mdp) === $admin['mdp']) {
        // Stocker les informations admin dans la session
        $_SESSION['user_id'] = $admin['id'];
        $_SESSION['user_mail'] = $admin['mail'];
        $_SESSION['is_admin'] = true;

        header('Location: ./admin/PageAdmin.php');
        exit();
    }

    header('Location: index.php?error=4'); // Redirige si connexion échoue
    exit();
    
    /*
    $requete='SELECT mail, mdp FROM `admin`';
    $resultats=$bdd->query($requete);
    $admin=$resultats->fetch(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete2='SELECT mail, mdp FROM `compte`';
    $resultats2=$bdd->query($requete2);
    $compte=$resultats2->fetchALL(PDO::FETCH_ASSOC);
    $resultats2->closeCursor();

    foreach($compte as $c):
        if ($_POST["mail"]==$c["mail"] && sha1($_POST["mdp"]) == $c["mdp"]) {
            header('Location: ./user/PageUser.php');
            exit();
        }
    endforeach;

    if ($_POST["mail"]==$admin["mail"] && sha1($_POST["mdp"]) == $admin["mdp"]) {
        header('Location: ./admin/PageAdmin.php');
        exit();
    }
    
    else {
        header('Location: connexion.php?error=4');
        exit();
    }*/
    
?>