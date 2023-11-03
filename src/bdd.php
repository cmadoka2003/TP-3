<?php
$serveur = "db";
$utilisateur = "admin";
$mot_de_passe = "admin";
$base_de_donnees = "contact";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if(isset($_POST["Firstname"]) AND isset($_POST["Lastname"]) AND isset($_POST["email"]) AND isset($_POST["agency"]) AND isset($_POST["msg"])){
    $prenom = $_POST["Firstname"];
    $nom = $_POST["Lastname"];
    $email = $_POST["email"];
    $agence = $_POST["agency"];
    $message = $_POST["msg"];

    if(strlen($prenom) <= 0 OR strlen($prenom) > 20) {
        $message = "<p>Votre prenom doit contenir entre 1 et 20 caractères.</p>";
    }

    else if(strlen($nom) <= 0 OR strlen($nom) > 20) {
        $message = "<p>Votre nom doit contenir entre 1 et 20 caractères.</p>";
    }

    else if(strlen($email) <= 0 OR strlen($email) > 30) {
        $message = "<p>Votre email doit contenir entre 1 et 30 caractères.</p>";
    }

    else if(strlen($agence) <= 0 OR strlen($agence) > 20) {
        $message = "<p>Votre agence doit contenir entre 1 et 20 caractères.</p>";
    }

    else if(strlen($message) <= 0 OR strlen($message) > 400) {
        $message = "<p>Votre prenon doit contenir entre 1 et 400 caractères.</p>";
    }

    else {
        $sql= $connexion->prepare("INSERT INTO contact(prenom, nom, email, agence, message) VALUES(:prenom, :nom, :email, :agence, :message");
        $sql->bindParam(':prenom', $prenom);
        $sql->bindParam(':nom', $nom);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':agence', $agence);
        $sql->bindParam(':message', $message);
        $sql->execute();
        $message = "<p>Votre message a été envoyé avec succès";
    }
}
?>
