<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete = 'SELECT * FROM contact ORDER BY dates ASC';
    $resultats = $bdd->query($requete);
    $tabContacts = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demandes de Contact</title>
    </head>
    <body>
        <h1>Demandes de Contact</h1>
        <div class="contact">
                <?php foreach($tabContacts as $Contacts): ?>
                    <div class="contact-item">
                        <p><?php echo "Demande de : ".$Contacts["nom"];?></p>
                        <p><?php echo "Datant du : ".$Contacts["dates"];?></p>
                        <p><?php echo "Object : ".$Contacts["object"];?></p>
                        <p><?php echo $Contacts["messages"];?></p>
                        <p><?php echo $Contacts["mail"];?></p>
                        <p><?php echo $Contacts["telephone"];?></p>
                        <br>
                    </div>
                <?php endforeach; ?>
        </div>
        <a href="PageAdmin.php"><button>Retour à la page Admin</button></a>
    </body>
</html>