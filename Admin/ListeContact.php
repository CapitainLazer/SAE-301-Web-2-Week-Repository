<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete = 'SELECT * FROM contact WHERE statu="Non Traité" ORDER BY dates ASC';
    $resultats = $bdd->query($requete);
    $tabContactsNN = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete = 'SELECT * FROM contact WHERE statu="Traité" ORDER BY dates ASC';
    $resultats = $bdd->query($requete);
    $tabContactstr = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
        <title>Demandes de Contact</title>
    </head>
    <body>
        <h1>Demandes non traités</h1>
        <div class="contact">
                <?php foreach($tabContactsNN as $Contacts): ?>
                    <div class="contact-item">
                        <p><?php echo "Demande de : ".$Contacts["nom"];?></p>
                        <p><?php echo "Datant du : ".$Contacts["dates"];?></p>
                        <p><?php echo "Object : ".$Contacts["object"];?></p>
                        <p><?php echo $Contacts["messages"];?></p>
                        <p><?php echo $Contacts["mail"];?></p>
                        <p><?php echo $Contacts["telephone"];?></p>
                        <form action="statueContact.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $Contacts["id_contact"];?>">
                            <select name="statu">
                                <option value="Non Traité">Non Traité</option>
                                <option value="Traité">Traité</option>
                            </select>
                            <input type="submit" value="Valider">
                        </form>
                        <br>
                    </div>
                <?php endforeach; ?>
        </div>

        <h2 onclick="toggleSection('statu')">Demandes traités</h2>
        <div id="statu" class="parties">
        <?php foreach($tabContactstr as $Traite): ?>
                    <div class="contact-item">
                        <p><?php echo "Demande de : ".$Traite["nom"];?></p>
                        <p><?php echo "Datant du : ".$Traite["dates"];?></p>
                        <p><?php echo "Object : ".$Traite["object"];?></p>
                        <p><?php echo $Traite["messages"];?></p>
                        <p><?php echo $Traite["mail"];?></p>
                        <p><?php echo $Traite["telephone"];?></p>
                        <br>
                    </div>
                <?php endforeach; ?>
        </div>
        <script>
            // Fonction pour afficher/masquer une section
            function toggleSection(sectionId) {
                const section = document.getElementById(sectionId);
                if (section.style.display === 'none' || section.style.display === '') {
                    section.style.display = 'block';
                }
                else {
                    section.style.display = 'none';
                }
            }
        </script>
        <br><br>
        <a href="PageAdmin.php"><button>Retour à la page Admin</button></a>
    </body>
</html>