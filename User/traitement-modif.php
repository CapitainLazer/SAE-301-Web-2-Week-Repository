<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../connexion.php');
        exit();
    }

    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    // Récupérer l'ID de l'utilisateur
    $userId = $_SESSION['user_id'];

    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);

    // Préparer la requête pour mettre à jour les informations
    $requete = 'UPDATE compte SET nom = ?, prenom = ?, telephone = ? WHERE id_compte = ?';
    $stmt = $bdd->prepare($requete);

    // Exécuter la requête avec les nouvelles valeurs
    $stmt->execute([$nom, $prenom, $telephone, $userId]);

    // Rediriger l'utilisateur vers la page principale après la mise à jour
    header('Location: PageUser.php');
    exit();
?>