<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Propos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
</head>
<body>
    <?php include_once('addon/header.php');?>
    
    <!-- Section : Chiffres Clés --  ! pas dans la div "content" car pas de padding pour le fond rouge ! -->
    <section class="container" style="background: red;">
        <div class="row d-flex flex-row justify-content-around">

            <div class="col-4 d-flex flex-column justify-content-center">
                <p class="chiffreCle">7</p>
                <p class="chiffreCle_texte">pays visités</p>
            </div>

            <div class="col-4">
                <p class="chiffreCle">270</p>
                <p class="chiffreCle_texte">Étapes</p>
            </div>

            <div class="col-4">
                <p class="chiffreCle">68 K</p>
                <p class="chiffreCle_texte">enfants accueillis</p>
            </div>

        </div>

    </section>

    <div class="content"><!--padding pour les marges des section suivantes ...-->
        

        <!-- Section : Nos Artistes -->
        <div class="section">
            
        </div>

        <!-- Section : Los Oeuvres -->
        <section class="container">
            <div class="row">

            <div class="col-6">
                <h1>Les oeuvres</h1>
                <p>Chacun des artistes sollicités a réalisé ou choisi une œuvre en direction du MuMo en tenant compte d'un contexte singulier : 
                    penser l'oeuvre dans un espace limité, prendre en compte les contraintes liées à l'itinérance du container, 
                    mais surtout imaginer la confrontation des enfants avec leurs créations.
                </p>
            </div>

            <div class="about-images col-6">

                <div class="image-card">
                    <img src="./images/oeuvre1.png" alt="">
                </div>

                <div class="image-card">
                    <img src="./images/oeuvre2.png" alt="">
                </div>

                <div class="image-card">
                    <img src="./images/oeuvre3.png" alt="">
                </div>
            </div> 

            </div>         
        </section>

    </div>
    <?php include_once('addon/Footer.php');?>
</body>
</html>