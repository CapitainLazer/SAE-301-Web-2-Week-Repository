<?php
    include("./config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete = 'SELECT * FROM types';
    $resultats = $bdd->query($requete);
    $tabTypes = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete = 'SELECT DISTINCT ville FROM localisation';
    $resultats = $bdd->query($requete);
    $tabVille = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete = 'SELECT DISTINCT departement FROM localisation';
    $resultats = $bdd->query($requete);
    $tabDepartement = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/style_calendrier.css" rel="stylesheet" type="text/css"/>
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
        <script src="./js/index.global.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./api/calendrier.js" type="text/javascript"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
        <title>Évènements</title>
    </head>
    <body>
        <?php
            include_once('addon/header.php');
        ?>
        <div class="filters">
            <label for="filter-type">Type d'événement :</label>
            <select id="filter-type">
                <option value="">Tous</option>
                <?php
                    foreach ($tabTypes as $Types):
                        ?>
                            <option value="<?php echo $Types["id_type"];?>"><?php echo $Types["nom"];?></option>
                        <?php
                    endforeach;
                ?>
            </select>

            <label for="filter-ville">Ville :</label>
            <select id="filter-ville">
                <option value="">Toutes</option>
                <?php 
                    foreach ($tabVille as $Ville):
                        ?>
                            <option value="<?php echo $Ville["ville"];?>"><?php echo $Ville["ville"];?></option>
                        <?php
                    endforeach;
                ?>
            </select>

            <label for="filter-departement">Département :</label>
            <select id="filter-departement">
                <option value="">Tous</option>
                <?php 
                    foreach ($tabDepartement as $Depart):
                        ?>
                            <option value="<?php echo $Depart["departement"];?>"><?php echo $Depart["departement"];?></option>
                        <?php
                    endforeach;
                ?>
            </select>
            <button id="apply-filters">Appliquer les filtres</button>
        </div>       
        <div id="calendrier"></div>
        <?php
            include_once('addon/Footer.php');
        ?>
    </body>
</html>
