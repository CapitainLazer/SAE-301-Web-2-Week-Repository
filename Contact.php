<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nous Contacter</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="./JS/bouton.js"></script>
        <meta name="description" content="Une page consacrée Pour contacter Mumo" />
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
</head>
<body>
    <?php include_once('addon/header.php');?>
    <main class="decoImg">
        <!--Le Formulaire de contacts-->
        <section id="zoneFormulaire" class="container rounded">
            <h1>Contactez<stlyle style='font-family: Arial;'>-</stlyle>nous</h1> <!--Modification de la police pour le tiret " - " -->
                <form action="validationcontact.php" method="POST" class="row d-flex flex-column justify-content-center">

                    <div class="col-10 my-3">
                        <label class="nomChampFormulaire">Nom & Prénom</label>
                        <br>
                        <input class="w-100" type="text" name="userNom" required placeholder="Nom & Prénom">
                    </div>

                    <div class="col-10 my-3">
                        <label class="nomChampFormulaire">Objet</label>
                        <br>
                        <input class="w-100" type="text" name="objetMessage" required placeholder="Objet de votre message">
                    </div>

                    <div class="col-10 my-3">
                        <label class="nomChampFormulaire">Email</label>
                        <br>
                        <input class="w-100" type="email" name="userEmail" required placeholder="votreemail@mail.com">
                    </div>

                    <div class="col-10 my-3">
                        <label class="nomChampFormulaire">Téléphone</label>
                        <br>
                        <input class="w-100" type="tel" name="userTelNumber" required placeholder="06 11 11 11 11">
                    </div>

                    <div class="col-10 my-3">
                        <label class="nomChampFormulaire">Date</label>
                        <br>
                        <input class="w-100" type="date" name="dateMessage" required value="">
                    </div>

                    <div class="col-10 my-3">
                        <label class="nomChampFormulaire">Message</label>
                        <br>
                        <textarea class="w-100" name="userMessage" required placeholder="Indiquez-nous votre message ..."></textarea>
                    </div>

                    <div class="col-10 my-3 d-flex flex-row gap-3">
                        <input type="checkbox" name="message" required></textarea>
                        <p style="color: white; font-size: 12px;">En soumettant ce formulaire, j'accepte que mes données personnelles soient utilisées à des fins commerciales. 
                        Pour en savoir plus sur l'utilisation de vos données, consultez notre <em><a href="rgpd.php" style="color: white;">RGPD</a> et nos <a href="mentions_legales.php" style="color: white;">Mentions Légales</a></em>.</p>
                    </div>

                    <div class="d-flex flex-xl-row flex-column flex-gap-3">
                        <div class="col-3 my-3">
                            <input type="submit" value="Envoyer" class="boutonForm">
                        </div>

                        <div class="col-3 my-3">
                            <input type="reset" value="Vider" class="boutonForm">
                        </div>
                    </div>
                </form>
        </section>
    </main>
    <?php include_once('addon/Footer.php');?>
</body>
</html>
