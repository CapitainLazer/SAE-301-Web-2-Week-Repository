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

    $requete='SELECT * from localisation WHERE id_loc='.$tabEve['id_loc'];
    $resultats=$bdd->query($requete);
    $theLieu=$resultats->fetch(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete='SELECT * from camion WHERE id_camion='.$tabEve['id_camion'];
    $resultats=$bdd->query($requete);
    $theCamion=$resultats->fetch(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" type="image/png" href="../images/favicon_MuMo.png">
        <title>Modification d'un évènement</title>
    </head>
    <body>
        <div class="center-container">
            <h1 class="form-title">Modification d'un evenement</h1>
            <main>
                <form action="AjoutModif.php" class="event-form" method="POST">
                    <p class="form-group"><label for="nom" class="form-label">Nom : <?php echo " ".$tabEve["nom_evenements"]; ?></label><br/>
                    <input type="text" name="nom" required value='<?php echo $tabEve["nom_evenements"]; ?>'/></p>

                    <p class="form-group"><label for="dates_debut" class="form-label">Date début : <?php echo " ".$tabEve["dates_debut"]; ?></label><br/>
                    <input type="date" name="dates_debut" required value='<?php echo $tabEve["dates_debut"]; ?>'/></p>
                    
                    <p class="form-group"><label for="dates_fin" class="form-label">Date fin : <?php echo " ".$tabEve["dates_fin"]; ?></label><br/>
                    <input type="date" name="dates_fin" required value='<?php echo $tabEve["dates_fin"]; ?>'/></p>

                    <p class="form-group"><label for="descriptions" class="form-label">Description : <?php echo " ".$tabEve["description_evenements"]; ?></label><br/>
                    <input type="text" name="descriptions" required value='<?php echo $tabEve["description_evenements"]; ?>'/></p>
                    
                    <p class="form-group"><label for="Localisation" class="form-label">Lieu : <?php echo " ".$theLieu["lieu"].", ".$theLieu["ville"]." _ ".$theLieu["departement"];?></label><br/>
                    <select name="lieu" class="form-select" required>
                    <?php
                        foreach($tablieu as $lieu):
                    ?>
                        <option value="<?php echo $lieu["id_loc"];?>"><?php echo $lieu["lieu"]." ".$lieu["ville"]." ".$lieu["departement"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select></p>

                    <p class="form-group"><label for="Camion" class="form-label">Camion : <?php echo " ".$theCamion["nom_camion"];?></label><br/>
                    <select name="camion" class="form-select" required>
                    <?php
                        foreach($tabcamion as $camion):
                    ?>
                        <option value="<?php echo $camion["id_camion"];?>"><?php echo $camion["nom_camion"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select></p>

                    <input type="hidden" name="id" value="<?php echo $_POST["id"];?>" />

                    <input type="submit" value="Modifier" class="form-submit-btn"/>
                </form>
            </main>
        </div>
    </body>
</html>