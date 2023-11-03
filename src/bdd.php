<?php
if(isset($_POST['formsend'])){
    $serveur = "db";
    $utilisateur = getenv('MYSQL_USER');
    $mot_de_passe = getenv('MYSQL_PASSWORD');
    $base_de_donnees = getenv('MYSQL_DATABASE');

    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        

        if (isset($_POST["FirstName"]) AND isset($_POST["LastName"]) AND isset($_POST["email"]) AND isset($_POST["agency"]) AND isset($_POST["msg"])) {

            $prenom = $_POST["FirstName"];
            $nom = $_POST["LastName"];
            $email = $_POST["email"];
            $agence = $_POST["agency"];
            $message = $_POST["msg"];

            $sql= $connexion->prepare("INSERT INTO Envoi(prenom, nom, email, agence, message) VALUES(:prenom, :nom, :email, :agence, :message)");
            $sql->bindParam(':prenom', $prenom);
            $sql->bindParam(':nom', $nom);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':agence', $agence);
            $sql->bindParam(':message', $message);
            $sql->execute();
            $message1 = "<p>Votre message a été envoyé avec succès.</p>";
        }
        else{
            $message1 = "<p>les informations sont fausses ou imcomplètes</p>";
        }

    }
    catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    $connexion = null;

}
?>
