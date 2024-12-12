<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    if ($_POST["choix"]=="eve") {
        $requete='DELETE FROM evenements WHERE id_eve='.$_POST["id"];
        $nbsuppression=$bdd->exec($requete);
    }

    if ($_POST["choix"]=="types") {
        $requete='DELETE FROM types WHERE id_type='.$_POST["id"];
        $nbsuppression=$bdd->exec($requete);
    }

    if ($_POST["choix"]=="lieu") {
        $requete='DELETE FROM localisation WHERE id_loc='.$_POST["id"];
        $nbsuppression=$bdd->exec($requete);
    }

    if ($_POST["choix"]=="camion") {
        $requete='DELETE FROM camion WHERE id_camion='.$_POST["id"];
        $nbsuppression=$bdd->exec($requete);
    }

    // redirection
    header('Location: admin.php');
    exit();
?>