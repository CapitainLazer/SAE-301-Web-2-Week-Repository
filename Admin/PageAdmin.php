<?php
    include("../config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete = 'SELECT * FROM evenements';
    $resultats = $bdd->query($requete);
    $tabEvenement = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete = 'SELECT * FROM localisation';
    $resultats = $bdd->query($requete);
    $tablieu = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete = 'SELECT * FROM types';
    $resultats = $bdd->query($requete);
    $tabtypes = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    $requete = 'SELECT * FROM camion';
    $resultats = $bdd->query($requete);
    $tabcamion = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page d'administration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="./JS/bouton.js"></script>
        <link rel="icon" type="image/png" href="../images/favicon_MuMo.png">
    </head>
    <body class="adminpage">
        <?php include_once('../addon/header2.php');?>
        <div class="container">
            <h1>Page d'administration</h1>
<br>
            <!-- Section Évènements -->
            <h2 class="button-container foot-link2" onclick="toggleSection('evenements')">Évènements</h2>
            <div id="evenements" class="parties">
                <h3>Suppression d'un évènement</h3>
                <form class="formadmin" action="supprimer.php" method="POST">
                    <select name="id" size=12>
                    <?php foreach($tabEvenement as $Evenement): ?>
                        <option value="<?php echo $Evenement["id_eve"]; ?>">
                            <?php echo $Evenement["nom_evenements"] . " / " . $Evenement["dates_debut"]; ?>
                        </option>
                    <?php endforeach; ?>
                    </select><br/><br/>
                    <input type="hidden" name="choix" value="eve">
                    <input class="input" type="submit" value="Supprimer l'évènement"/>
                </form> 
                
                <h3>Ajout d'un évènement</h3>
                <form class="formadmin" action="ajouter.php" method="POST">
                    Nom : <input type="text" name="nom" required /><br>
                    Date de début : <input type="date" name="date_debut" required/><br>
                    Date de fin : <input type="date" name="date_fin" required/><br>
                    Description : <input type="text" name="descriptions" required /><br>
                    Camion : <select name="camion" required>
                    <?php
                        foreach($tabcamion as $camion):
                    ?>
                        <option value="<?php echo $camion["id_camion"];?>"><?php echo $camion["nom_camion"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select><br/>
                    Lieu : <select name="lieu" required>
                    <?php
                        foreach($tablieu as $lieu):
                    ?>
                        <option value="<?php echo $lieu["id_loc"];?>"><?php echo $lieu["lieu"]." ".$lieu["ville"]." ".$lieu["departement"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select><br/><br/>
                    <input type="hidden" name=choix value="eve">
                    <input class="input"type="submit" value="Ajouter l'évènement"/>
                </form>

                <h3>Modification d'un évènement</h3>
                <form class="formadmin" action="modifEvenement.php" method="POST">
                    <select name="id" size=12>
                    <?php
                        foreach($tabEvenement as $Evenement):
                    ?>
                        <option value="<?php echo $Evenement["id_eve"];?>"><?php echo $Evenement["nom_evenements"]." / ".$Evenement["dates_debut"];?></option>
                    <?php
                        endforeach;
                    ?>
                    </select><br/><br/>
                    <input class="input" type="submit" value="Modifier l'évènement"/>
                </form>
            </div>

            <!-- Section Types -->
            <h2 class="button-container foot-link2" onclick="toggleSection('types')">Types</h2>
            <div id="types" class="parties">
                <h3>Suppression d'un type d'évènement</h3>
                <form class="formadmin" action="supprimer.php" method="POST">
                    <select name="id" size=12>
                    <?php foreach($tabtypes as $Types): ?>
                        <option value="<?php echo $Types["id_type"]; ?>">
                            <?php echo $Types["nom"]; ?>
                        </option>
                    <?php endforeach; ?>
                    </select><br/><br/>
                    <input type="hidden" name="choix" value="types">
                    <input class="input" type="submit" value="Supprimer le type d'évènement"/>
                </form>

                <h3>Ajout d'un type d'évènement</h3>
                <form class="formadmin" action="ajouter.php" method="POST">
                    Nom : <input type="text" name="nom" required /><br>
                    <input type="hidden" name=choix value="types">
                    <input class="input" type="submit" value="Ajouter le type d'évènement"/>
                </form>
            </div>

            <!-- Section Localisation -->
            <h2 class="button-container foot-link2" onclick="toggleSection('localisation')">Localisation</h2>
            <div id="localisation" class="parties">
                <h3>Suppression d'un lieu</h3>
                <form class="formadmin"action="supprimer.php" method="POST">
                    <select name="id" size=12>
                    <?php foreach($tablieu as $lieu): ?>
                        <option value="<?php echo $lieu["id_loc"]; ?>">
                            <?php echo $lieu["lieu"] . " " . $lieu["ville"] . " " . $lieu["departement"]; ?>
                        </option>
                    <?php endforeach; ?>
                    </select><br/><br/>
                    <input type="hidden" name="choix" value="lieu">
                    <input class="input" type="submit" value="Supprimer le lieu"/>
                </form> 
                
                <h3>Ajout d'un lieu</h3>
                <form class="formadmin" action="ajouter.php" method="POST">
                    Lieu : <input type="text" name="lieu" required /><br>
                    Ville : <input type="text" name="ville" required /><br>
                    Département : <input type="text" name="departement" required /><br>
                    <input type="hidden" name=choix value="lieu">
                    <input class="input" type="submit" value="Ajouter le lieu"/>
                </form>
            </div>

            <!-- Section Camions -->
            <h2 class="button-container foot-link2" onclick="toggleSection('camions')">Camions</h2>
            <div id="camions" class="parties">
                <h3>Suppression d'un camion</h3>
                <form class="formadmin" action="supprimer.php" method="POST">
                    <select name="id" size=12>
                    <?php foreach($tabcamion as $camion): ?>
                        <option value="<?php echo $camion["id_camion"]; ?>">
                            <?php echo $camion["nom_camion"]; ?>
                        </option>
                    <?php endforeach; ?>
                    </select><br/><br/>
                    <input type="hidden" name="choix" value="camion">
                    <input class="input" type="submit" value="Supprimer le camion"/>
                </form>

                <h3>Ajout d'un camion</h3>
                <form class="formadmin" action="ajouter.php" method="POST">
                    Nom du camion : <input type="text" name="nom" required /><br>
                    <input type="hidden" name=choix value="camion">
                    <input class="input" type="submit" value="Ajouter le camion"/>
                </form>
            </div>

            <!-- Section Archives -->
            <h2 class="button-container foot-link2" onclick="toggleSection('archives')">Archives</h2>
            <div id="archives" class="parties">
                <h3>Ajout dans les archives</h3>
                <form class="formadmin" action="ajouter.php" method="POST">
                    Lien de le l'image ou de la vidéo : <input type="text" name="lien" required /><br>
                    Description : <input type="text" name="description"/><br>
                    <input type="hidden" name=choix value="archives">
                    <input class="input" type="submit" value="Ajouter dans les archives"/>
                </form>
            </div>

            <!-- Section Sponsors -->
            <h2 class="button-container foot-link2" onclick="toggleSection('sponsors')">Partenaires</h2>
            <div id="sponsors" class="parties">
                <h3>Ajout d'un partenaire</h3>
                <form class="formadmin" action="ajouter.php" method="POST">
                    Nom du partenaire : <input type="text" name="nom" required /><br>
                    Lien du logo : <input type="text" name="lien" required /><br>
                    Description : <input type="text" name="description" required /><br>
                    <fieldset>
                        <legend>Selectioner la catégorie :</legend>
                        <div>
                            <input type="radio" id="Mécènes" name="categorie" value="Mécènes"/>
                            <label class="label" for="Mécènes">Mécènes</label>
                        </div>
                        <div>
                            <input type="radio" id="Partenaires" name="categorie" value="Partenaires" checked/>
                            <label class="label" for="Partenaires">Partenaires</label>
                        </div>
                    </fieldset>
                    <input type="hidden" name=choix value="sponsors">
                    <input class="input" type="submit" value="Ajouter un partenaire"/>
                </form>
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
            <a href="ListeContact.php"><button class="button-link">Voir les demandes de contact</button></a>
        </div>
        <?php include_once('../addon/Footer2.php');?>
    </body>
</html>