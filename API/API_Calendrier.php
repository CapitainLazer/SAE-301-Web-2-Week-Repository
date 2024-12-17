<?php
    include("../config/config.php");

    try {
        $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd, $identifiant, $mot_de_passe, $options);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparation de la requête avec des filtres
        $query = "SELECT DISTINCT e.nom_evenements, e.dates_debut, e.dates_fin, e.description_evenements, l.ville, l.lieu 
                FROM evenements e
                JOIN localisation l ON e.id_loc = l.id_loc
                LEFT JOIN type_evenement te ON e.id_eve = te.id_eve
                LEFT JOIN types t ON te.id_type = t.id_type
                WHERE 1=1";

        $params = [];

        // Ajout des filtres dynamiquement
        if (!empty($_GET['type'])) {
            $query .= " AND t.id_type = :type";
            $params['type'] = $_GET['type'];
        }
        if (!empty($_GET['ville'])) {
            $query .= " AND l.ville = :ville";
            $params['ville'] = $_GET['ville'];
        }
        if (!empty($_GET['departement'])) {
            $query .= " AND l.departement = :departement";
            $params['departement'] = $_GET['departement'];
        }

        $stmt = $bdd->prepare($query);
        $stmt->execute($params);

        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($events);
    } 
    catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
?>
