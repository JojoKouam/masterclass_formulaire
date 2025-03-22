<?php
$host = "localhost";// le serveur de MySql ici j'utilise phpmyadmin
$dbname = "formulaire_db"; // Nom de ma base de donneé
$username = "root"; // l'utilisateur de phpmyadmin
$password = ""; // le password du phpmyadmin

try {!
    // Création d'une instance PDO pour se connecter à la base de données
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // gère les erreurs SQL
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie!";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();// Si la connexion échoue Php affiche un message d'erreur
}

// Fermeture de la connexion
// $conn = null;
?>
