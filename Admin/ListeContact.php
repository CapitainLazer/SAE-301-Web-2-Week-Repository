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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="./JS/bouton.js"></script>
        <link rel="icon" type="image/png" href="../images/favicon_MuMo.png">
        <title>Demandes de Contact</title>
    </head>
    <body>
        <?php include_once('../addon/header2.php');?>
        <div class="container">
            <h2>Demandes non traités</h2>
            <div class="contact">
                    <?php foreach($tabContactsNN as $Contacts): ?>
                        <div class="contact-item">
                            <p>
                                <?php echo "<b>Demande de : </b>".$Contacts["nom"];?><br>
                                <?php echo "<b>Datant du : </b>".$Contacts["dates"];?><br>
                                <?php echo "<b>Object : </b>".$Contacts["object"];?><br>
                                <?php echo "<b>Message : </b><br>".$Contacts["messages"];?><br>
                                <?php echo "<b>Mail : </b>".$Contacts["mail"];?><br>
                                <?php echo "<b>Téléphone : </b>".$Contacts["telephone"];?>
                            </p>
                            <form action="statueContact.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $Contacts["id_contact"];?>">
                                <select name="statu">
                                    <option value="Non Traité">Non Traité</option>
                                    <option value="Traité">Traité</option>
                                </select>
                                <input type="submit" value="Valider" id="btn">
                            </form>
                        </div>
                    <?php endforeach; ?>
            </div>

            <h2 onclick="toggleSection('statu')">Demandes traités</h2>
            <div id="statu" class="parties">
                <div class="contact">
                <?php foreach($tabContactstr as $Traite): ?>
                        <div class="contact-item">
                            <p>
                                <?php echo "<b>Demande de : </b>".$Contacts["nom"];?><br>
                                <?php echo "<b>Datant du : </b>".$Contacts["dates"];?><br>
                                <?php echo "<b>Object : </b>".$Contacts["object"];?><br>
                                <?php echo "<b>Message : </b><br>".$Contacts["messages"];?><br>
                                <?php echo "<b>Mail : </b>".$Contacts["mail"];?><br>
                                <?php echo "<b>Téléphone : </b>".$Contacts["telephone"];?>
                            </p>
                        </div>
                <?php endforeach; ?>
                </div>
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
            <a href="PageAdmin.php"><button class="button-link">Retour à la page Admin</button></a>
        </div>
        <?php include_once('../addon/Footer2.php');?>
    </body>
</html>