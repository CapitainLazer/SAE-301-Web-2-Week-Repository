<?php
    include("./Config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete='SELECT mail, mdp FROM `admin`';
    $resultats=$bdd->query($requete);
    $admin=$resultats->fetch(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete2='SELECT mail, mdp FROM `compte`';
    $resultats2=$bdd->query($requete2);
    $compte=$resultats2->fetch(PDO::FETCH_ASSOC);
    $resultats2->closeCursor();

    if ($_POST["mail"]==$admin["mail"] && $_POST[sha1("mdp")]==$admin[sha1("mdp")]) {
        header('Location: ./admin/PageAdmin.php');
        exit();
    }
    if ($_POST["mail"]==$compte["mail"] && $_POST[sha1("mdp")]==$compte[sha1("mdp")]) {
        header('Location: ./user/PageUser.php');
        exit();
    }
    else {
        header('Location: index.php');
        exit();
    }
?>