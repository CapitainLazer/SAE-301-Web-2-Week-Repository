<?php
    session_start();

    include("./config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete = 'SELECT DISTINCT categorie FROM sponsors';
    $resultats = $bdd->query($requete);
    $tabCatego = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Partenaires</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="./JS/bouton.js"></script>
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
</head>
<body>
    <?php include_once('addon/header.php');?>   
    <div class="content">
        <div class="section">
            <h1>Partenaires</h1>
            <div class="Partenaires">
                <?php foreach($tabCatego as $Catego): ?>
                    <div>
                        <h3><?php echo $Catego["categorie"]?></h3>
                        <?php
                            $requete = 'SELECT nom, lien, descriptions FROM sponsors WHERE categorie=\'' . $Catego["categorie"] . '\'';
                            $resultats = $bdd->query($requete);
                            $tabSponso = $resultats->fetchAll(PDO::FETCH_ASSOC);
                            $resultats->closeCursor();
                            foreach ($tabSponso as $Sponso): 
                            ?>
                                <img src="<?php echo $Sponso["lien"] ?>" class="sponsor">
                            <?php
                            endforeach;
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>        
    </div>
    <?php include_once('addon/Footer.php');?>
</body>
</html>