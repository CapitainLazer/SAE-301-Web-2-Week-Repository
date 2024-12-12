<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete='SELECT * FROM `evenements`';
    $resultats=$bdd->query($requete);
    $tabEvenement=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete='SELECT * from localisation';
    $resultats=$bdd->query($requete);
    $tablieu=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete='SELECT * from types';
    $resultats=$bdd->query($requete);
    $tabtypes=$resultats->fetchAll(PDO::FETCH_ASSOC);
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
        <title>Page d'administration</title>
    </head>
    <body>
        <h1>Page d'administration</h1>
        <div>
            <h2>Évènements</h2>
            <div>
                <h3>Suppression d'un évènement</h3>
                <form action="supprimer.php" method="POST">
                    <select name="id" size=12>
                    <?php
                        foreach($tabEvenement as $Evenement):
                    ?>
                        <option value="<?php echo $Evenement["id_eve"];?>"><?php echo $Evenement["nom_evenements"];?></option>
                    <?php
                        endforeach;
                    ?>
                    <input type="hidden" name=choix value="eve">
                    </select><br/><br/>
                    <input type="submit" value="Supprimer l'évènement"/>
                </form>   
            </div>
            
            <div>
                <h3>Ajout d'un évènement</h3>
                <form action="ajouterEvenement.php" method="POST">
                    Nom : <input type="text" name="nom" required /><br>
                    Date de début : <input type="date" name="dtdebut" required/><br>
                    Date de fin : <input type="date" name="dtfin" required/><br>
                    Description : <input type="text" name="descriptions" required /><br>
                    Lieu : <select name="lieu" required>
                    <?php
                        foreach($tablieu as $lieu):
                    ?>
                        <option value="<?php echo $lieu["id_loc"];?>"><?php echo $lieu["lieu"]." ".$lieu["ville"]." ".$lieu["departement"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select><br/><br/>
                    <input type="submit" value="Ajouter l'évènement"/>
                </form>
            </div>

            <div>
                <h3>Modification d'un évènement</h3>
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
                    <input type="submit" value="Modifier l'évènement"/>
                </form>
            </div>
        </div>

        <div>
            <h2>Types</h2>
            <div>
                <h3>Suppression d'un type d'évènement</h3>
                <form action="supprimer.php" method="POST">
                    <select name="id" size=12>
                    <?php
                        foreach($tabtypes as $Types):
                    ?>
                        <option value="<?php echo $Types["id_type"];?>"><?php echo $Types["nom"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select><br/><br/>
                    <input type="hidden" name=choix value="types">
                    <input type="submit" value="Supprimer le type d'évènement"/>
                </form>   
            </div>
            
            <div>
                <h3>Ajout d'un type d'évènement</h3>
                <form action="ajouterTypes.php" method="POST">
                    Nom : <input type="text" name="nom" required /><br>
                    <input type="submit" value="Ajouter le type d'évènement"/>
                </form>
            </div>
        </div>

        <div>
            <h2>Localisation</h2>
            <div>
                <h3>Suppression d'un lieu</h3>
                <form action="supprimer.php" method="POST">
                    <select name="id" size=12>
                    <?php
                        foreach($tablieu as $lieu):
                    ?>
                        <option value="<?php echo $lieu["id_loc"];?>"><?php echo $lieu["lieu"]." ".$lieu["ville"]." ".$lieu["departement"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select><br/><br/>
                    <input type="hidden" name=choix value="lieu">
                    <input type="submit" value="Supprimer le lieu"/>
                </form>   
            </div>
            
            <div>
                <h3>Ajout d'un lieu</h3>
                <form action="ajouterLieu.php" method="POST">
                    Lieu : <input type="text" name="lieu" required /><br>
                    Ville : <input type="text" name="ville" required /><br>
                    Département : <input type="text" name="departement" required /><br>
                    <input type="submit" value="Ajouter le lieu"/>
                </form>
            </div>

            <div>
            <h2>Camions</h2>
            <div>
                <h3>Suppression d'un camion</h3>
                <form action="supprimer.php" method="POST">
                    <select name="id" size=12>
                    <?php
                        foreach($tabcamion as $camion):
                    ?>
                        <option value="<?php echo $camion["id_camion"];?>"><?php echo $camion["nom_camion"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select><br/><br/>
                    <input type="hidden" name=choix value="camion">
                    <input type="submit" value="Supprimer le camion"/>
                </form>   
            </div>
            
            <div>
                <h3>Ajout d'un camion</h3>
                <form action="ajouterCamion.php" method="POST">
                    Nom du camion : <input type="text" name="lieu" required /><br>
                    <input type="submit" value="Ajouter le camion"/>
                </form>
            </div>
        </div>
    </body>
</html>