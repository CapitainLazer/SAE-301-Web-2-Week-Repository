<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
    <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
</head>
<body>

<?php //inclus le Header
include_once('addon/header.php');
?>

<main style="position: relative;" class="decoImg">
    <!--<img src="images/camion_MuMo.png" style="width: 100vw; filter: brightness(0.4); z-index: -1;"></img>-->

    <!--Le Formulaire de contacts-->
    <section id="zoneFormulaire" class="container rounded">
        <h1>Contactez<stlyle style='font-family: Arial;'>-</stlyle>nous</h1> <!--Modification de la police pour le tiret " - " -->
            <form method="post" class="row d-flex flex-column justify-content-center">

                <div class="col-8 my-3">
                    <label class="nomChampFormulaire">Nom</label>
                    <br>
                    <input class="w-100" type="text" name="userNom" required placeholder="Nom">
                </div>

                <div class="col-8 my-3">
                    <label class="nomChampFormulaire">Prenom</label>
                    <br>
                    <input class="w-100" type="text" name="userPrenom" required placeholder="Prénom">
                </div>

                <div class="col-8 my-3">
                    <label class="nomChampFormulaire">Email</label>
                    <br>
                    <input class="w-100" type="email" name="userEmail" required placeholder="votreemail@mail.com">
                </div>

                <div class="col-8 my-3">
                    <label class="nomChampFormulaire">Téléphone</label>
                    <br>
                    <input class="w-100" type="tel" name="userTelNumber" required placeholder="06 11 11 11 11">
                </div>

                <div class="col-8 my-3">
                    <label class="nomChampFormulaire">Date</label>
                    <br>
                    <input class="w-100" type="date" name="dateMessage" required>
                </div>

                <div class="col-8 my-3">
                    <label class="nomChampFormulaire">Message</label>
                    <br>
                    <textarea class="w-100" name="userMessage" required placeholder="Indiquez-nous votre message ..."></textarea>
                </div>

                <div class="col-8 my-3 d-flex flex-row gap-3">
                    <input type="checkbox" name="message" required></textarea>
                    <p style="color: white; font-size: 12px;">En soumettant ce formulaire, j'accepte que mes données personnelles soient utilisées à des fins commerciales. 
                    Pour en savoir plus sur l'utilisation de vos données, consultez notre <em>RGPD et Politique de confidentialité</em>.</p>
                </div>

                <div class="d-flex flex-xl-row flex-column flex-gap-3">
                    <div class="col-3 my-3">
                        <input type="submit" value="Envoyer" class="boutonForm">
                    </div>

                    <div class="col-3 my-3">
                        <input type="button" value="Vider" class="boutonForm">
                    </div>
                </div>


            </form>
<main>

<?php
include_once('addon/Footer.php');
?>
</body>
</html>
