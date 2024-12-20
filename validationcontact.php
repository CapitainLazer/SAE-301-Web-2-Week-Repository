<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include './config/config.php';
        include 'poo.php';
        $contact = new Contact($bdd);
        $contact->setData($_POST);
        if ($contact->save()) {
            header('Location: merci.php');
            exit();
        } 
        else {
            echo "Erreur lors de l'enregistrement du message.";
        }
    }
?>
