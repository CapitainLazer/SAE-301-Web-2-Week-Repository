<?php
    session_start();

    include("./config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    $requete = 'SELECT nom_evenements, 
        DATE_FORMAT(dates_debut, "%d/%m/%Y") AS dates_debut, 
        DATE_FORMAT(dates_fin, "%d/%m/%Y") AS dates_fin, 
        description_evenements
        FROM evenements ORDER BY dates_debut DESC LIMIT 3';
    $resultats = $bdd->query($requete);
    $tabEvenement = $resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Le MuMo (Musée Mobile) est un musée itinérant dédié à l’art contemporain, conçu pour amener l’art directement aux enfants et aux populations éloignées des institutions culturelles traditionnelles. Installé dans un camion transformé, il parcourt les territoires pour offrir des expositions interactives et gratuites." />
        <title>Mumo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="./JS/popup_erreur.js" type="text/javascript"></script>
        <script src="./JS/bouton.js"></script>
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
</head>
<button id="backToTopBtn" class="back-to-top">↑</button>
<body>
    <?php include_once('addon/header.php');?>
    <iframe src="https://www.youtube.com/embed/Us72CpwwGAk?si=qZzTa3i6zCPyoksm" class="video marg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    
    <div class="content">
        <!-- Section 1 : Image et Texte du Camion -->
        <section class="content">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-6 col-md-6 d-flex flex-colomn align-items-center">
                    <div class="camion">
                        <img src="images/camion.webp" class="img-fluid rounded" style="height:470px; object-fit: cover;" alt="Image des collections permanentes au musée" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 col-md-6 ">
                    <div class="texte ">
                        <p class="">
                            Le MuMo (Musée Mobile) est un musée itinérant créé pour rendre l'art contemporain accessible à tous, notamment aux populations éloignées des institutions culturelles traditionnelles. Conçu à l'origine par Ingrid Brochard en 2011, le MuMo s'installe dans des camions transformés en espaces d'exposition. Il se déplace dans des écoles, des quartiers ruraux ou urbains, et offre une expérience artistique immersive.
                            Les œuvres présentées, souvent réalisées par des artistes contemporains renommés, couvrent divers médiums comme la peinture, la sculpture, la photographie ou l'installation. L'objectif est de démocratiser l'art, stimuler la curiosité et éveiller la sensibilité artistique, en particulier chez les enfants. Grâce à son format nomade, le MuMo transcende les frontières géographiques et sociales pour promouvoir l'art comme un bien commun.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2 : En ce moment -->
        <div class="section">
            <div class="hr-with-text">
                <hr class="custom-hr">
                <h2>Calendrier</h2>
            </div>
            <p>Nos prochains événements</p>
            <div class="calendar">
                <?php foreach($tabEvenement as $Evenement): ?>
                    <div class="calendar-item">
                        <h3><?php echo $Evenement["nom_evenements"]?></h3>
                        <p><?php echo "Du ".$Evenement["dates_debut"]." au ".$Evenement["dates_fin"]; ?></p>
                        <p><?php echo $Evenement["description_evenements"]?> </p>
                        <a href="calendrier.php"><button>Voir plus</button></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Section 3 : MuMo/Pompidou -->
        <div class="section pompidou">
            <div class="text">
                <div class="hr-with-text">
                    <hr class="custom-hr">
                    <h2>MuMo/Pompidou</h2>
                </div>
                <p>Plus qu’un partenariat...</p>
                <section class="content">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6  col-md-12 col-sm-12 d-flex flex-colomn align-items-center">
                            <div class="texte mr-30">
                                <p>
                                    Le MuMo et le Centre Pompidou collaborent pour rendre l'art moderne et contemporain accessible au plus grand nombre. Cette association permet au MuMo de présenter des œuvres emblématiques issues des collections du Centre Pompidou dans ses espaces itinérants.
                                    L’objectif principal est de toucher des publics éloignés des grandes institutions culturelles, notamment en zones rurales ou dans des quartiers moins desservis. Grâce à cette collaboration, des œuvres d'art majeures voyagent directement auprès des communautés, accompagnées d'ateliers pédagogiques et d'animations pour approfondir l'expérience artistique. Ce partenariat incarne une démarche innovante de démocratisation culturelle, combinant la mobilité du MuMo et le prestige du Centre Pompidou.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6  col-md-12 col-sm-12">
                            <div class="collection-info">
                                <img src="images/mumo.webp" class="img-fluid rounded" alt="Image des collections permanentes au musée" />
                            </div>
                        </div>
                    </div>
                
                </section>
                    <a href="pompidou.php"class="bouton"><button class="h">Voir plus</button></a>
            </div>
        </div>

        <!-- Section 4 : À propos -->
        <section class="section">
            <div class="hr-with-text">
                <hr class="custom-hr">
                <h2>A propos</h2>
            </div>
            <p>Quelques-unes de nos œuvres.</p>
            <div class="about-images">
                <div class="image-card">
                    <img src="./images/oeuvres/oeuvre1.png" alt="">
                    <p>Immagine (2011)<br><span>Maurizio Cattelan</span></p>
                </div>
                <div class="image-card">
                    <img src="./images/oeuvres/oeuvre2.png" alt="">
                    <p>MapaMapa (2013)<br><span>Sébastien Cordoléani</span></p>
                </div>
                <div class="image-card">
                    <img src="./images/oeuvres/oeuvre3.png" alt="">
                    <p>Six Dogs Jumping (2012)<br><span>John Baldessari</span></p>
                </div>
            </div>
            <a href="A_Propos.php" class="bouton"><button class="h">Voir plus</button></a>
        </section>
    </div>
    <?php include_once('addon/Footer.php');?>
</body>
</html>