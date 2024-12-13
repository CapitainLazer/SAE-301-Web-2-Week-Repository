<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./CSS/style_calendrier.css" rel="stylesheet" type="text/css"/>
        <script src="./JS/index.global.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./API/calendrier.js" type="text/javascript"></script>
        <title>Évènements</title>
    </head>
    <body>
        <?php
            include_once('addon/header.php');
        ?>       
        <div id="calendar"></div>
        <?php
            include_once('addon/Footer.php');
        ?>
    </body>
</html>
