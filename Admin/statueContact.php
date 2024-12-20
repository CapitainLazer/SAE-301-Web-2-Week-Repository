<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
    print_r($_POST);
    $requeteprep=$bdd->prepare('UPDATE contact SET statu=:statu WHERE id_contact=:id');
    $requeteprep->bindValue(':statu', $_POST["statu"], PDO::PARAM_STR);
    $requeteprep->bindValue(':id', $_POST["id"], PDO::PARAM_INT);
    $requeteprep->execute();
    header('Location: listecontact.php');
    exit();
?>