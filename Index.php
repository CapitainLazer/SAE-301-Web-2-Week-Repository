<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mumo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
</head>
<body>
    <?php include_once('addon/header.php');?>
    <iframe src="https://www.youtube.com/embed/Us72CpwwGAk?si=qZzTa3i6zCPyoksm" class="video"title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    
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
                <div class="calendar-item">
                    <h3>Limoges (87)</h3>
                    <p>Au quartier Vigenal - En partenariat avec le Centre Social Vital - du 19 au 24 décembre</p>
                    <p>Devant la salle municipale du Vigenal - 5 Rue Georges Jacquet</p>
                    <p>Portes ouvertes le samedi 21 décembre de 10h30 à 12h00 - 14h00 à 17h30</p>
                    <button>Voir plus</button>
                </div>
                <div class="calendar-item">
                    <h3>Limoges (87)</h3>
                    <p>Au quartier Val de L'Aurence - En partenariat avec le Centre Social Alchimies - les 26 et 27 décembre</p>
                    <p>Devant la BFM du Val de L’Aurence</p>
                    <p>Portes ouvertes le jeudi 26 et le vendredi 27 décembre de 10h à 12h et de 14h à 17h00</p>
                    <button>Voir plus</button>
                </div>
                <div class="calendar-item">
                    <h3>Agen (47)</h3>
                    <p>Communauté d'Agglomération d’Agen</p>
                    <p>Quai du Gravier</p>
                    <p>Portes ouvertes le lundi 30 décembre de 16h00 à 18h00</p>
                    <button>Voir plus</button>
                </div>
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
                    <div class="bouton">
                        <button class="h">Voir plus</button>
                    </div>
            </div>
        </div>

        <!-- Section 4 : À propos -->
        <section class="section">
            <div>
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
            <div class="bouton">
                <button class="h">Voir plus</button>
            </div>
        </section>
    </div>
    <?php include_once('addon/Footer.php');?>
</body>
</html>