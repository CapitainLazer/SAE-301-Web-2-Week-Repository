<?php 
include("./config/config.php");
try {
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd, $identifiant, $mot_de_passe, $options);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
        $newmdp = $_POST['newmdp'];
        $confirmmdp = $_POST['mdp'];
        if (!$mail) {
            die('Adresse e-mail invalide.');
        }
        if ($newmdp !== $confirmmdp) {
            die('Les mots de passe ne correspondent pas.');
        }
        $checkEmail = $bdd->prepare("SELECT COUNT(*) FROM compte WHERE mail = :mail");
        $checkEmail->bindParam(':mail', $mail, PDO::PARAM_STR);
        $checkEmail->execute();

        if ($checkEmail->fetchColumn() > 0) {
            die('Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.');
        }
        $hashedPassword = sha1($newmdp);
        $sql = "INSERT INTO compte (mail, mdp) VALUES (:mail, :mdp)";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
        $stmt->bindParam(':mdp', $hashedPassword, PDO::PARAM_STR);
        $stmt->execute();

        header("Location: user/pageuser.php");
        exit; 

    } else {
        echo "Veuillez soumettre le formulaire d'inscription.";
    }
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>