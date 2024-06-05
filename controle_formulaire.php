<?php
// Déclaration des variables pour les messages d'erreurs
$erreurNom = "";
$erreurMail = "";
$erreurTelephone = "";
$erreurSujet = "";
$erreurMessage = "";
$succesForm = "";
$failForm = "";

if ($_POST) {

    // Contrôle du formulaire
    if (!isset($_POST['nom']) || !preg_match('#^[a-zA-Z -]{3,20}$#', $_POST['nom'])) {
        $erreurNom .= '<div class="alert alert-danger" role="alert">Erreur format nom !</div>';
    }

    if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erreurMail .= '<div class="alert alert-danger" role="alert">Erreur format email !</div>';
    }

    if (!isset($_POST['phone']) || !preg_match('#^[0-9]{10}$#', $_POST['phone'])) {
        $erreurTelephone .= '<div class="alert alert-danger" role="alert">Erreur format téléphone !</div>';
    }

    if (!isset($_POST['subject']) || !preg_match('#^[a-zA-Z- ]{3,20}$#', $_POST['subject'])) {
        $erreurSujet .= '<div class="alert alert-danger" role="alert">Erreur format sujet !</div>';
    }

    if (!isset($_POST['message']) || strlen($_POST['message']) < 3 || strlen($_POST['message']) > 5000) {
        $erreurMessage .= '<div class="alert alert-danger" role="alert">Erreur format mot de passe !</div>';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Adresse e-mail où vous souhaitez recevoir le message
        $destinataire = "eski.sezgin@gmail.com";

        // Construction du corps du message
        $contenu = "Nom: $nom\n";
        $contenu .= "Email: $email\n";
        $contenu .= "Téléphone: $phone\n";
        $contenu .= "Sujet: $subject\n\n";
        $contenu .= "Message:\n$message\n";

        // En-têtes de l'e-mail
        $headers = "From: $nom <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        // // Envoi de l'e-mail
        if (mail($destinataire, $subject, $contenu, $headers)) {
            $succesForm .= '<div class="alert alert-success my-3" role="alert"">Votre message a bien été envoyé </div>';
        } else {
            $failForm .= '<div class="alert alert-danger my-3" role="alert">Une erreur s\'est produite lors de l\'envoi de votre message !</div>';
        }
    }
}