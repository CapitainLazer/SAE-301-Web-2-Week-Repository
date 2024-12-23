<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="screen">
    <meta name="description" content="Une page consacrée à des activités pédagogiques, comme des jeux, pour le MuMo." />
    <script src="./js/bouton.js"></script>
    <link rel="icon" type="image/png" href="images/favicon_MuMo.png">
    <title>Pédagogie</title>
</head>
<body>
    <?php include_once('./addon/header.php');?>
    <div class="container">
        <section class="content">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="collection-info">
                        <img src="images/pedagogie1.webp" class="img-fluid" alt="Image d'un enfant sur une tablette."/>
                    </div>
                </div>
                <div class="col">
                    <div class="collection-text">  
                        <h2>Crée ton Expo, un outil de médiation numérique autour du musée</h2>
                        <p>
                            <p>Crée ton expo est un dispositif de médiation créé à l’initiative du MuMo et du Frac des Pays de la Loire avec le soutien de la Drac des Pays de la Loire et de la Région des Pays de la Loire. Développé avec l’agence Opixido, il propose de réaliser virtuellement une exposition à partir d’une sélection d’œuvres puisées à l’origine dans la collection du Frac des Pays de la Loire et parmi une sélection de trois lieux : le Frac, le MuMo et le MAT à Ancenis.</p>
                            <p>Ce jeu destiné aux petits comme aux plus grands permet de comprendre les métiers du musée et de se familiariser avec l’art contemporain.</p>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                
                <div class="col">
                    <div class="collection-text">  
                        <h2>Crée ton Expo, un outil de médiation numérique autour du musée</h2>
                        <p>
                            <p>Exposer ? Oui, mais où et quoi ? Cet outil de médiation numérique permet d'accéder à une sélection d'espaces d'exposition et d'oeuvres d'art du Centre Pompidou et du Musée Mobile pour créer ton exposition et découvrir les métiers des musées.</p>
                            <p>Crée ton Expo a été développé avec le Frac des Pays de la Loire et Opixido.</p>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="collection-info">
                        <img src="images/pedagogie1.webp" class="img-fluid" alt="Image d'un enfant sur une tablette."/>
                    </div>
                </div>
            </div><br><br>
            <div class="card mx-auto my-4 w-100 w-md-75 w-lg-50" id="carte">
                <div class="card-header">
                    En Cours
                </div>
                <img src="images/pedagogie2.webp" class="card-img-top" alt="Image d'une oeuvre d'art.">
                <div class="card-body">
                    <h4 class="card-title">Dans les règles de l'art</h4>
                    <p class="card-text"><span>Du 27 mai au 5 octobre 2024</span><br>Une exposition imaginée par le Centre Pompidou avec les œuvres de Roland Flexner, Herbert W. Franke, Wade Guyton, Simon Hantaï, Jean-Claude Marquette, Raphael Montañez Ortiz, François Morellet, Aurélie Nemours, A. Michael Noll, Ladislav Novak, Jean-Luc Parant et Pierrick Sorin issues de la collection du Musée national d’art moderne – Centre Pompidou.</p>
                    <div class="bouton">
                        <a href="https://padlet.com/mumo2projet/dans-les-r-gles-de-l-art-exposition-du-mumo-x-centre-pompido-brdopnl5bvkheseb"><button class="h">VOIR LES RESSOURCES PÉDAGOGIQUES</button></a>
                        <br>
                        <a href="https://www.dropbox.com/scl/fo/fg44t0agyy6ryofdx72fm/ANA1uDwDoz06NMbZKhmoPaw?rlkey=806283kr0phqqqpq5hqnlclb9&e=1&st=pe0i2lk0&dl=0"><button class="h">TÉLÉCHARGER UNE SÉLECTION DE VISUELS</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
        include_once('./addon/footer.php');
    ?>
</body>
</html>