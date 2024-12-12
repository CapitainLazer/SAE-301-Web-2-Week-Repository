<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    // on doit lister l'ensemble des évènements par date décroissante pour la suppression
    $requete='SELECT * FROM `evenements` ORDER BY date_debut DESC';
    $resultats=$bdd->query($requete);
    $tabEvenement=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    // on doit lister les catégories existante
    $requete='SELECT * from localisation';
    $resultats=$bdd->query($requete);
    $tablieu=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor()
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page d'administration</title>
    </head>
    <body>
        <?php include("../headerplus.php"); ?>

        <h1>Page d'administration</h1>
        <h2>Suppression d'un évènement</h2>
        <form action="supprimerEvenement.php" method="POST">
            <select name="id" size=12>
            <?php
                foreach($tabEvenement as $Evenement):
            ?>
                <option value="<?php echo $Evenement["id_eve"];?>"><?php echo $Evenement["nom_evenements"];?></option>
            <?php
                endforeach;
            ?>
            </select><br/><br/>
            <input type="submit" value="Supprimer l'évènement"/>
        </form>   

        <br>

        <h2>Ajout d'un évènement</h2>
        <form action="ajouterEvenement.php" method="POST">
            Nom : <input type="text" name="nom" required /><br>
            Date de début : <input type="date" name="dtdebut" required/><br>
            Date de fin : <input type="date" name="dtfin" required/><br>
            Description : <input type="text" name="descriptions" required /><br>
            Lieu : <select name="lieu" required>
            <?php
                foreach($tablieu as $lieu):
            ?>
                <option value="<?php echo $lieu["id_loc"];?>"><?php echo $lieu["lieu"]." ".$lieu["ville"]." ".$lieu["département"];?></option>
            <?php
                endforeach;
            ?>
            </select><br/><br/>
            <input type="submit" value="Ajouter le produit"/>
        </form>

        <br>

        <h2>Modification d'un évènement</h2>
        <form action="adminModificationProduit.php" method="POST">
            <select name="id" size=12>
            <?php
                foreach($tabEvenement as $Evenement):
            ?>
                <option value="<?php echo $Evenement["id_eve"];?>"><?php echo $Evenement["nom_evenements"];?></option>
            <?php
                endforeach;
            ?>
            </select><br/><br/>
            <input type="submit" value="Modifier le produit"/>
        </form>
        <br>   
        <?php include("../footerplus.php"); ?>
    </body>
</html>