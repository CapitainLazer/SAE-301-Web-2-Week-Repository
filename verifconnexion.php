<?php
    //session_start();

    include("./config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

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
    }
    
?>