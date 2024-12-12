<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
</head>
<body>

<?php //inclus le Header
include('addon/header.php');
?>

<!--Le Formulaire de contacts-->
<section class="container rounded" style="background-color: #D63542;">
    <h1>Contactez<stlyle style='font-family: Arial;'>-</stlyle>nous</h1> <!--Modification de lapolice pour le tiret " - " -->
        <form method="post" class="row d-flex flex-row">
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
            <input type="submit" class="btn btn-danger">
        </form>
</section>

<?php
?>
</body>
</html>
