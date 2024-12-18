<?php
    session_start();
    include("../config/config.php");
    ob_start();
    try {
        if (!isset($_SESSION['user_id'])) {
            echo json_encode(['error' => 'Utilisateur non connecté.']);
            exit;
        }

        $userId = $_SESSION['user_id'];
        $eventId = $_POST['id_eve'] ?? null;

        if (!$eventId) {
            echo json_encode(['error' => 'ID de l\'événement manquant.']);
            exit;
        }

        $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd, $identifiant, $mot_de_passe, $options);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $bdd->prepare("SELECT COUNT(*) FROM evenements WHERE id_eve = :eventId");
        $stmt->execute(['eventId' => $eventId]);
        if ($stmt->fetchColumn() == 0) {
            echo json_encode(['error' => 'Événement inexistant.']);
            exit;
        }

        $stmt = $bdd->prepare("SELECT COUNT(*) FROM likes WHERE id_compte = :userId AND id_eve = :eventId");
        $stmt->execute(['userId' => $userId, 'eventId' => $eventId]);
        if ($stmt->fetchColumn() > 0) {
            echo json_encode(['error' => 'Vous avez déjà liké cet événement.']);
            exit;
        }

        $stmt = $bdd->prepare("INSERT INTO likes (id_compte, id_eve) VALUES (:userId, :eventId)");
        $stmt->execute(['userId' => $userId, 'eventId' => $eventId]);

        echo json_encode(['success' => true, 'message' => 'Événement liké avec succès.']);
    }
    catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
    finally {
        ob_end_clean();
    }
?>