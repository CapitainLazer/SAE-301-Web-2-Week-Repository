<?php
    include("../Config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete='SELECT mail, mdp FROM `admin`';
    $resultats=$bdd->query($requete);
    $admin=$resultats->fetch(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete='SELECT mail, mdp FROM `compte`';
    $resultats=$bdd->query($requete);
    $compte=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();


    if ($_POST["mail"]==$admin["mail"] && $_POST["mdp"]==$admin["mdp"]) {
        header('Location: PageAdmin.php');
        exit();
    }

    /*if ($_POST["mail"]==$admin["mail"] && $_POST["mdp"]==$admin["mdp"]) {
        header('Location: ../compte.php');
        exit();
    }*/

    else {
        header('Location: ../index.php');
        exit();
    }
?>