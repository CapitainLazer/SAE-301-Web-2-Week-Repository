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

<main>
    <!--Le Formulaire de contacts-->
    <section id="zoneFormulaire" class="container rounded" style="background-color: #D63542;">
        <h1>Contactez<stlyle style='font-family: Arial;'>-</stlyle>nous</h1> <!--Modification de la police pour le tiret " - " -->
            <form method="post" class="row d-flex flex-row p-3">

                <div>
                    <label>Nom</label>
                    <br>
                    <input type="text" name="nom" required placeholder="NOM">
                </div>

                <div>
                    <label>Prenom</label>
                    <br>
                    <input type="text" name="nom" required placeholder="PRENOM">
                </div>

                <div>
                    <label>Email</label>
                    <br>
                    <input type="email" name="email" required>
                </div>

                <div>
                    <label>Téléphone</label>
                    <br>
                    <input type="" name="" required>
                </div>

                <div>
                    <label>Téléphone</label>
                    <br>
                    <input type="" name="" required>
                </div>

                <div>
                    <label>Message</label>
                    <br>
                    <textarea name="message" required></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-danger">
                </div>

            </form>
    </section>

</main>

<?php
include_once('addon/Footer.php');
?>
</body>
</html>
