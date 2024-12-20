<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
    $id=$_POST["id_eve"];
    $types=$_POST["types"];
    $requete_preparee= $bdd->prepare('INSERT INTO type_evenement(id_type_evenement, id_eve, id_type) VALUES (NULL,:id_eve,:types)');
    $requete_preparee->bindValue(':id_eve', $id, PDO::PARAM_INT);
    foreach($types as $t):
        $requete_preparee->bindValue(':types', $t, PDO::PARAM_INT);
        $requete_preparee->execute();
    endforeach;
    header('Location: pageadmin.php');
    exit();
?>