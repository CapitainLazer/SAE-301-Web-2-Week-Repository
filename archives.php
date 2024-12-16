<?php
    include("./config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete = 'SELECT * FROM archive';
    $resultats = $bdd->query($requete);
    $tabArchives = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Archives</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
</head>
<body>
    <?php include_once('addon/header.php');?>   
    <div class="content">
        <div class="section">
            <h2>ARCHIVES</h2>
            <div class="archives">
                <?php foreach($tabArchives as $Archi): ?>
                    <iframe src="<?php echo $Archi["lien"]?>" class="videoarchi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <?php endforeach; ?>
            </div>
        </div>

        
    </div>
    <?php include_once('addon/Footer.php');?>
</body>
</html>