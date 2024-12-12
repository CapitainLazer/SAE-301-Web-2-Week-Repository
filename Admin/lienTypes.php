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
        <title>Choix des types pour l'évènement</title>
        
    </head>
    <body>
        <h1>Choix des types pour l'évènement</h1>
        <form action="ajoutLienType.php" method="POST">    
        <input type="hidden" name="id_eve" value="<?php echo $id;?>">      
            <h2>Types :</h2>
                <?php
                    foreach($tabtypes as $types):
                        ?>
                        <input type="checkbox" name="types[]" value="<?php echo $types["id_type"];?>"><?php echo $types["nom"];?><br>
                        <?php
                    endforeach;
                ?>
            <input type="submit" value="Modifier"/>
        </form><br>
    </body>
</html>