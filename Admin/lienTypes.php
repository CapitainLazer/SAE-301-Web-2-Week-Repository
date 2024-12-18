<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options); 

    $id=$_GET["id_eve"];

    $requete='SELECT * from types';
    $resultats=$bdd->query($requete);
    $tabtypes=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../images/favicon_MuMo.png">
        <title>Choix des types pour l'évènement</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="./JS/bouton.js"></script>
        <link rel="icon" type="image/png" href="../images/favicon_MuMo.png">
    </head>
    <body class="adminpage">
    <?php include_once('../addon/header2.php');?>
    <div class="container">
        <br>
        <h1 class="lienstypes">Choix des types pour l'evenement</h1><br>
        <form action="ajoutLienType.php" method="POST">    
        <input type="hidden" name="id_eve" value="<?php echo $id;?>">      
            <h2 class="lienstypes2">Types :</h2>
                <?php
                    foreach($tabtypes as $types):
                        ?>
                        <input type="checkbox" name="types[]" value="<?php echo $types["id_type"];?>"><?php echo $types["nom"];?><br>
                        <?php
                    endforeach;
                ?>
                <br>
            <input type="submit" class="boutonconect" value="Ajouter"/>
        </form><br>
    </div>
        <?php include_once('../addon/Footer2.php');?>
    </body>
</html>