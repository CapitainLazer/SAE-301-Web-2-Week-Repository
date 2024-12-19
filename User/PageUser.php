<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../connexion.php');
        exit();
    }
    $userId = $_SESSION['user_id'];
    $userMail = $_SESSION['user_mail'];
    
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete = 'SELECT e.id_eve,e.nom_evenements,
    DATE_FORMAT(dates_debut, "%d/%m/%Y") AS dates_debut, 
    DATE_FORMAT(dates_fin, "%d/%m/%Y") AS dates_fin,
    e.description_evenements,l.lieu,l.ville,l.departement
    FROM likes li
    JOIN evenements e ON li.id_eve = e.id_eve
    JOIN localisation l ON e.id_loc = l.id_loc
    WHERE li.id_compte='.$userId;
    $resultats = $bdd->query($requete);
    $tabLikes = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete = 'SELECT * FROM compte WHERE id_compte='.$userId;
    $resultats = $bdd->query($requete);
    $tabCompte = $resultats->fetch(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mumo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
            <link rel="icon" type="image/png" href="../images/favicon_MuMo.png">
    </head>
    <body>
        <?php include_once('../addon/header2.php');?>
        <br>
        <main class="content marg2">
            <div>
                <h2>Vos informations personnels</h2>
                <?php echo $tabCompte["nom"]." ".$tabCompte["prenom"];?><br>
                <?php echo $tabCompte["mail"];?><br>
                <?php echo $tabCompte["telephone"];?>
                <div class="bouton">
                    <a href="#"><button class="h">Modifier</button></a>
                </div>
            </div>
            <br>
            <div>
                <h2>Les évènements que vous avez liké</h2>
                <div class="contact">
                    <?php foreach ($tabLikes as $likes): ?>
                        <div class="contact-item">
                            <p class="likes">
                                <?php echo $likes["nom_evenements"]; ?><br>
                                <?php echo "Du : ".$likes["dates_debut"]; ?><br>
                                <?php echo "Au : ".$likes["dates_fin"]; ?><br>
                                <?php echo $likes["description_evenements"]; ?><br>
                                <?php echo $likes["lieu"]; ?><br>
                                <?php echo $likes["ville"]; ?><br>
                                <?php echo $likes["departement"]; ?><br>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <a href="../deconnexion.php"><button>Déconnexion</button></a>
        </main>
        <?php include_once('../addon/Footer2.php');?>
    </body>
</html>