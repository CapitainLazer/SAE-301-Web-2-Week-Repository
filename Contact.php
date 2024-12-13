<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
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
                    <label>Nom</label>
                    <br>
                    <input class="w-100" type="text" name="nom" required placeholder="Nom">
                </div>

                <div class="col-8 my-3">
                    <label>Prenom</label>
                    <br>
                    <input class="w-100" type="text" name="nom" required placeholder="Prénom">
                </div>

                <div class="col-8 my-3">
                    <label>Email</label>
                    <br>
                    <input class="w-100" type="email" name="email" required placeholder="votreemail@mail.com">
                </div>

                <div class="col-8 my-3">
                    <label>Téléphone</label>
                    <br>
                    <input class="w-100" type="" name="" required>
                </div>

                <div class="col-8 my-3">
                    <label>Date</label>
                    <br>
                    <input class="w-100" type="date" name="" required>
                </div>

                <div class="col-8 my-3">
                    <label>Message</label>
                    <br>
                    <textarea class="w-100" name="message" required></textarea>
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

    <!--Le Formulaire de contacts-->
    <section class="container rounded" style="background-color: #D63542;">
        <h1>Contactez<stlyle style='font-family: Arial;'>-</stlyle>nous</h1> <!--Modification de lapolice pour le tiret " - " -->
        <div class="row d-flex flex-row">
            <form method="post" class="col-8">
                    <label>Nom</label>
                    <input type="text" name="nom" required placeholder="NOM">
                    <label>Prenom</label>
                    <input type="text" name="nom" required placeholder="PRENOM">
                    <label>Email</label>
                    <input type="email" name="email" required>
                    <label>Téléphone</label>
                    <input type="" name="" required>
                    <label>Message</label>
                    <textarea name="message" required></textarea>
                    <input type="submit" class="btn btn-primary">
            </form>
        </div>
            
    </section>

</main>

<?php
include_once('addon/Footer.php');
?>
</body>
</html>
