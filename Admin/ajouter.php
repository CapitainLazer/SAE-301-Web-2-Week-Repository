<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
    if ($_POST["choix"]=="eve") {
        $requete_preparee= $bdd->prepare('INSERT INTO evenements(id_eve, nom_evenements, dates_debut, dates_fin, description_evenements, id_loc, id_camion) VALUES (NULL,:nom_evenements,:dates_debut,:dates_fin,:description_evenements,:id_loc,:id_camion)');
        $requete_preparee->bindValue(':nom_evenements', $_POST["nom"], PDO::PARAM_STR);
        $requete_preparee->bindValue(':dates_debut',date("Y/m/j"), PDO::PARAM_STR);
        $requete_preparee->bindValue(':dates_fin',date("Y/m/j"), PDO::PARAM_STR);
        $requete_preparee->bindValue(':description_evenements', $_POST["descriptions"], PDO::PARAM_STR);
        $requete_preparee->bindValue(':id_camion',$_POST["camion"], PDO::PARAM_INT);
        $requete_preparee->bindValue(':id_loc',$_POST["lieu"], PDO::PARAM_INT);
        $requete_preparee->execute();
        $requete='SELECT id_eve FROM evenements ORDER BY id_eve DESC LIMIT 1';
        $resultats=$bdd->query($requete);
        $id=$resultats->fetch(PDO::FETCH_ASSOC);
        $resultats->closeCursor();
        header('Location: lientypes.php?id_eve='.$id["id_eve"]);
    }
    if ($_POST["choix"]=="types") {
        $requete_preparee= $bdd->prepare('INSERT INTO types(id_type, nom) 
                                        VALUES (NULL,:nom)');
        $requete_preparee->bindValue(':nom', $_POST["nom"], PDO::PARAM_STR);
        $requete_preparee->execute();
        header('Location: pageadmin.php');
    }
    if ($_POST["choix"]=="lieu") {
        $requete_preparee= $bdd->prepare('INSERT INTO localisation(id_loc, lieu, departement, ville) 
                                        VALUES (NULL,:lieu,:departement,:ville)');
        $requete_preparee->bindValue(':lieu', $_POST["lieu"], PDO::PARAM_STR);
        $requete_preparee->bindValue(':departement', $_POST["departement"], PDO::PARAM_STR);
        $requete_preparee->bindValue(':ville',$_POST["ville"], PDO::PARAM_STR);
        $requete_preparee->execute();
        header('Location: pageadmin.php');
    }
    if ($_POST["choix"]=="camion") {
        $requete_preparee= $bdd->prepare('INSERT INTO camion(id_camion, nom_camion) 
                                        VALUES (NULL,:nom_camion)');
        $requete_preparee->bindValue(':nom_camion', $_POST["nom"], PDO::PARAM_STR);
        $requete_preparee->execute();
        header('Location: pageadmin.php');
    }
    if ($_POST["choix"]=="archives") {
        $requete_preparee= $bdd->prepare('INSERT INTO archive(id_archive,descriptions,lien) 
                                        VALUES (NULL,:lien,:descriptions)');
        $requete_preparee->bindValue(':lien', $_POST["lien"], PDO::PARAM_STR);
        $requete_preparee->bindValue(':descriptions', $_POST["description"], PDO::PARAM_STR);
        $requete_preparee->execute();
        header('Location: pageadmin.php');
    }
    if ($_POST["choix"]=="sponsors") {
        $requete_preparee= $bdd->prepare('INSERT INTO sponsors(id_sponsors,nom,lien,descriptions,categorie) 
                                        VALUES (NULL,:nom,:lien,:descriptions,:categorie)');
        $requete_preparee->bindValue(':nom', $_POST["nom"], PDO::PARAM_STR);
        $requete_preparee->bindValue(':lien', $_POST["lien"], PDO::PARAM_STR);
        $requete_preparee->bindValue(':descriptions', $_POST["description"], PDO::PARAM_STR);
        $requete_preparee->bindValue(':categorie', $_POST["categorie"], PDO::PARAM_STR);
        $requete_preparee->execute();
        header('Location: pageadmin.php');
    }
    exit();
?>