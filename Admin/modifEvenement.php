<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $id=$_POST["id"];

    $requete='SELECT * FROM evenements WHERE id_eve='.$id;
    $resultats=$bdd->query($requete);
    $tabEve=$resultats->fetch(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete='SELECT * from localisation';
    $resultats=$bdd->query($requete);
    $tablieu=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete='SELECT * from camion';
    $resultats=$bdd->query($requete);
    $tabcamion=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page modification d'un évènement</title>
    </head>
    <body>
        <h1>Page modification d'un évènement</h1>
        <main>
            <form action="modifierProduit.php" method="POST">
                <p><label for="nom">Nom : <?php echo " ".$tabEve["nom"]; ?></label><br/>
                <input type="text" name="nom" required value='<?php echo $tabEve["nom"]; ?>'/></p>

                <p><label for="prix">Prix : <?php echo " ".$tabEve["prix"]; ?></label><br/>
                <input type="number" name="prix" required value='<?php echo $tabEve["prix"]; ?>'/></p>
                
                <p><label for="descriptions">Description : <?php echo " ".$tabEve["descriptions"]; ?></label><br/>
                <input type="text" name="descriptions" required value='<?php echo $tabEve["descriptions"]; ?>'/></p>
                
                <p><label for="Localisation">Lieu : <?php echo " ".$tabEve["categorie"]; ?></label><br/>
                <select name="lieu" required>
                <?php
                    foreach($tablieu as $lieu):
                ?>
                    <option value="<?php echo $lieu["id_loc"];?>"><?php echo $lieu["lieu"]." ".$lieu["ville"]." ".$lieu["departement"];?></option>
                <?php
                    endforeach;
                ?>
                </select></p>

                <input type="hidden" name="id" value="<?php echo $_POST["id"];?>" />

                <input type="submit" value="Modifier"/>
            </form>
        </main>
    </body>
</html>