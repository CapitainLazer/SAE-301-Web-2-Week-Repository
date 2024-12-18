<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A Propos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="./JS/bouton.js"></script>
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
        <script src="JS/popUp.js"></script>
</head>
<body>
    <?php include_once('addon/header.php');?>

    <div class="content marg2">
        <!-- Section : L'équipe du Musée -->
            <p class="container card shadow ">
                Né de la conviction que l'art est un outil d'ouverture, de partage et d'éveil au monde, MuMo est un musée mobile destiné 
                à aller à la rencontre des enfants, en particulier ceux qui se trouvent éloignés de l'accès à la culture,
                en se rendant directement sur leur lieu de vie : cour d'école, centre de loisirs, parking d'un quartier...<br>
                Le Musée Mobile prend la forme d'un container qui peut aisément voyager par bateau, avant d'être chargé sur un camion. 
                Parvenu à destination, il se transforme en un musée, ouvrant sur quatre espaces distincts, 
                chacun plongeant les enfants dans un univers différent : peinture, sculpture, installation, vidéo, design, etc.<br>
                Lancé sur les routes entre 2011 et 2016, ce musée itinérant a parcouru 7 pays d'Europe et d'Afrique 
                pour proposer aux enfants de 6 à 12 ans une expérience inédite de l'art contemporain, à travers la découverte 
                d'oeuvres créées spécialement par une vingtaine d'artistes de la scène internationale, qui explorent 
                la thématique sociale du «Vivre ensemble».<br>
                Une enquête a été menée suite au passage du MuMo en France entre 2011 et 2013. Après 2 ans de tournée, 
                MuMo a offert à 56% des enfants accueillis leur première visite d'un musée, à travers une expérience marquante, 
                qui renouvelle l'intérêt pour l'art. Pour voir les résultats complets de l'enquête, cliquer ici.<br><br>
                Après cette première version aménagée par l'architecte Adam Kalkin dans un conteneur en 2011, 
                un nouveau musée itinérant voit le jour avec la designer matali crasset en 2017, 
                pour diffuser les oeuvres des collections du Cnap et des Frac. Un troisième camion-musée, le MuMo x Centre Pompidou, 
                est imaginé en 2022 par Hérault Arnod Architectures et l'artiste Krijn de Koning pour faire circuler les oeuvres du Centre.
            </p>

        <section class="container">
            <h1>L'equipe du MuMo</h1>
            <br>
            <div class="row d-flex flex-row">
                <div class="card" style="width: 18rem;"><!--div pour un membre de l'équipe-->
                    <img src="./images/equipeMusee/ingrid_brochard.png" class="card-img-top" alt="photo de Ingrid Brochard, fondatrice du MuMo.">
                    <div class="card-body">
                        <p class="card-text">Ingrid BROCHARD | Fondatrice du MuMo</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;"><!--div pour un membre de l'équipe-->
                    <img src="./images/equipeMusee/rudy_boublil.png" class="card-img-top" alt="photo de Rudy Boublil, président du MuMo.">
                    <div class="card-body">
                        <p class="card-text">Rudy BOUBLIL | Président</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;"><!--div pour un membre de l'équipe-->
                    <img src="./images/equipeMusee/jonathan_gervoson.png" class="card-img-top" alt="photo de Jonathan Gervoson, secrétaire au sein de l'équipe du MuMo">
                    <div class="card-body">
                        <p class="card-text">Jonathan GERVOSON | Secrétaire</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;"><!--div pour un membre de l'équipe-->
                    <img src="./images/equipeMusee/lucie_avril.png" class="card-img-top" alt="photo de Lucie Avril, directrice opérationnelle pour le MuMo.">
                    <div class="card-body">
                        <p class="card-text">Lucie AVRIL | Directrice opérationnelle</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;"><!--div pour un membre de l'équipe-->
                    <img src="./images/equipeMusee/pp_parDefaut.jpg" class="card-img-top" alt="photo de substitution en l'absence d'une photo officielle de Arno Deva, directeur artisitique du MuMo.">
                    <div class="card-body">
                        <p class="card-text">Arno DEVO | Directeur artistique</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;"><!--div pour un membre de l'équipe-->
                    <img src="./images/equipeMusee/louise_harrewyn.png" class="card-img-top" alt="photo de Louise Harrewyn, reponsable opérationnelle pour le MuMo.">
                    <div class="card-body">
                        <p class="card-text">Louise HARREWYN | Responsable opérationnelle & Contact MuMo x Centre Pompidou</p>
                    </div>
                </div>

                <div class="card" style="width: 18rem;"><!--div pour un membre de l'équipe-->
                    <img src="./images/equipeMusee/clemence_renaud.png" class="card-img-top" alt="Clémence Renaud, coordinatrice du MuMo avec les partenaires.">
                    <div class="card-body">
                        <p class="card-text">Clémence RENAUD | Coordinatrice du MuMo dédié aux Frac</p>
                    </div>
                </div>

            </div>
            
        </section>
    </div>

    
    
    <!-- Section : Chiffres Clés --  ! pas dans la div "content" car pas de padding pour le fond rouge ! -->
    <section class="container-fluid shadow" style="background: #d63542; margin: 0 0; padding: 6rem 10rem; max-width: 1920px;">
        <div class="row d-flex flex-md-row flex-column justify-content-around">

            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <p class="chiffreCle">7</p>
                <p class="chiffreCle_texte">pays visités</p>
            </div>

            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <p class="chiffreCle">270</p>
                <p class="chiffreCle_texte">Étapes</p>
            </div>

            <div class="col-6 col-md-4 d-flex flex-column align-items-center">
                <p class="chiffreCle">68 K</p>
                <p class="chiffreCle_texte">enfants accueillis</p>
            </div>

        </div>

    </section>

    <div class="content"><!--padding pour les marges des section suivantes ...-->
        
        <!-- Section : Nos Artistes -->
        <section class="container">
            <h1>Les Artistes</h1>
            <p>Depuis sa création, le MuMo (le Musée Mobile) a donné à voir et à découvrir les projets spécifiques de 21 artistes, 
                qui sont autant d'acteurs majeurs de la scène contemporaine internationale. </p>
            <br>
            <div class="row d-flex flex-row"><!--rangement en lignes "rows" -->

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/ghada_amer.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Ghada AMER</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/john_baldessari.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">John BALDESSARI</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/daniel_buren.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Daniel BUREN</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/maurizio_cattelan.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Maurizio CATTELAN</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/florence_doleac.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Florence DOLÉAC</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/pierre_huyghe.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Pierre HUYGHE</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/paul_mccarthy.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Paul McCARTHY</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/roman_signer.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Roman SIGNER</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/james_turrell.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">James TURRELL</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/tursic_ mille.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Ida Tursic & Wilfried Mille</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/nari_ward.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Nari WARD</p>
                    </div>
                </div>

                <div class="card py-4" style="width: 18rem;"><!--div pour un artiste-->
                    <img src="./images/artistes/lawrence_weiner.webp" class="card-img-top" alt="...">
                    <div class="card-body rounded shadow mt-4">
                        <p class="card-text">Lawrence WEINER</p>
                    </div>
                </div>

            </div>
            
        </section>

        <!-- Section : Les publications -->
        <section class="container">
            <h1>Les Publications</h1>
            <br>
            <div class="row d-flex flex-row justify-content-center gap-5 card-group"><!--rangement en lignes "rows" -->

                <div class="card livreMuMo" style="width: 22rem;"><!--div Volume 1-->
                    <a href="https://www.lespressesdureel.com/ouvrage.php?id=2698&menu=0" style="text-decoration: none;">
                        <img src="./images/volume1.webp" class="card-img-top" alt="couverture du magazine MuMo numéro 1">
                        <div class="card-body">
                            <h4 class="card-title">MuMo - le Musée Mobile - Volume 1</h4>
                            <p class="card-text">Ouvrage dirigé par Ingrid Brochard </p>
                        </div>
                    </a>
                </div>

                <div class="card livreMuMo" style="width: 22rem;"><!--div Volume 2-->
                    <a href="https://www.lespressesdureel.com/ouvrage.php?id=3011" style="text-decoration: none;">
                        <img src="./images/volume2.webp" class="card-img-top" alt="couverture du magazine MuMo numéro 2">
                        <div class="card-body">
                            <h4 class="card-title">MuMo - le Musée Mobile - Volume 2</h4>
                            <p class="card-text">Ouvrage dirigé par Ingrid Brochard </p>
                        </div>
                    </a>
                </div>

                <div class="card livreMuMo" style="width: 22rem;"><!--div Volume 3-->
                    <a href="https://www.lespressesdureel.com/ouvrage.php?id=3863 " style="text-decoration: none;">
                        <img src="./images/volume3.webp" class="card-img-top" alt="couverture du magazine MuMo numéro 3">
                        <div class="card-body">
                            <h4 class="card-title">MuMo - le Musée Mobile - Volume 3</h4>
                            <p class="card-text">Ouvrage dirigé par Ingrid Brochard </p>
                        </div>
                    </a>
                </div>
            </div>
            
        </section>

    </div>

        <!-- Section : Le Film -->
        <section class="container-fluid shadow" style="max-width: 1920px;">
            <div class="row d-flex flex-md-row flex-column" style="background: #d63542; color: white;">
                <div class="col-md-7 col-12 texteFilm">
                    <h1>Le film</h1>
                    <h4>Les aventures de MuMo, le Musée Mobile</h4>
                    <p>Trois documentaires de 26 minutes chacun ont été produits par a.p.r.e.s Production et réalisés par Gilles Coudert.
                    Un film pour le cinéma a ensuite été monté à partir de ces documentaires, et distribué dans le réseau des salles et 
                    les festivals. Edité en DVD, il est à la disposition des bibliothèques, médiathèques, centres d'archives, etc.<br><br>
                    <em>Achetez le DVD en ligne</em></p>
                </div>

                <!--<img src="images/MuMo_film.jpg" class="col-5 p-0 img-fluid">-->

                <div class="decoFilm col-md-5 col-12"></div>
            </div>
        </section>

    <div class="content"><!--padding pour les marges des section suivantes ...-->

        <!-- Section : Los Oeuvres -->
        <section class="container" style="padding: 4rem 20px 0px 20px">
            <div class="row d-flex flex-row">

                <div class="col-12">
                    <h1>Les oeuvres</h1>
                    <p>Chacun des artistes sollicités a réalisé ou choisi une œuvre en direction du MuMo en tenant compte d'un contexte singulier : 
                        penser l'oeuvre dans un espace limité, prendre en compte les contraintes liées à l'itinérance du container, 
                        mais surtout imaginer la confrontation des enfants avec leurs créations.
                    </p>
                </div>

                <div class="d-flex flex-wrap about-images py-5">

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre1.png" class="card-img-top" alt="Immagine (2011) | Maurizio Cattelan">
                    </div>

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre2.png" class="card-img-top" alt="MapaMapa (2013) | Sébastien Cordoléani">
                    </div>

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre3.png" class="card-img-top" alt="Six Dogs Jumping (with Children Watching) (2012) | John Baldessari">
                    </div>

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre4.png" class="card-img-top" alt="Baisers #1 (2011) | Ghada Amer">
                    </div>

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre5.png" class="card-img-top" alt="Lace Lift (2011) | Nari Ward">
                    </div>

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre6.png" class="card-img-top" alt="Red Rabbit (2011) | Paul McCarthy">
                    </div>

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre7.webp" class="card-img-top" alt="Nous irons jusqu'au bout (2012) | Claude Lévêque">
                    </div>

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre8.png" class="card-img-top" alt="Carnaval des rêves (2011) | Sam Samore">
                    </div>

                    <div class="image-card">
                        <img src="./images/oeuvres/oeuvre9.webp" class="card-img-top" alt="Zobop (2012), The Strokes (2012) & Zobop Gold (2013) | Jim Lambie">
                    </div>

                </div> 

            </div>         
        </section>

    </div>
    <?php include_once('addon/Footer.php');?>
</body>
</html>