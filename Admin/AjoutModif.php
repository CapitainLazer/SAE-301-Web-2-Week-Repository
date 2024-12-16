<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    print_r($_POST);
    $requeteprep=$bdd->prepare('UPDATE evenements SET nom_evenements=:nom_evenements, dates_debut=:dates_debut, dates_fin=:dates_fin, description_evenements=:description_evenements, id_loc=:id_loc, id_camion=:id_camion WHERE id_eve=:id');
    $requeteprep->bindValue(':nom_evenements', $_POST["nom"], PDO::PARAM_STR);
    $requeteprep->bindValue(':dates_debut',date("Y/m/j"), PDO::PARAM_STR);
    $requeteprep->bindValue(':dates_fin',date("Y/m/j"), PDO::PARAM_STR);
    $requeteprep->bindValue(':description_evenements', $_POST["descriptions"], PDO::PARAM_STR);
    $requeteprep->bindValue(':id_camion',$_POST["camion"], PDO::PARAM_INT);
    $requeteprep->bindValue(':id_loc',$_POST["lieu"], PDO::PARAM_INT);
    $requeteprep->bindValue(':id', $_POST["id"], PDO::PARAM_INT);
    $requeteprep->execute();

    header('Location: PageAdmin.php');
    exit();
?>