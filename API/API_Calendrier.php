<?php
    include("../config/config.php");
    try {
        $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $bdd->query("SELECT e.nom_evenements, e.dates_debut, e.dates_fin, e.description_evenements, l.ville, l.lieu 
                            FROM evenements e 
                            JOIN localisation l ON e.id_loc = l.id_loc");
        $events = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($events);
    } 
    catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
?>