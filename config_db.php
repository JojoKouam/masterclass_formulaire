<?php
$host = "localhost";// le serveur de MySql ici j'utilise phpmyadmin
$dbname = "formulaire_db"; // Nom de ma base de donneé
$username = "root"; // l'utilisateur de phpmyadmin
$password = "Password123!"; // le password du phpmyadmin

try {!
    // Création d'une instance PDO pour se connecter à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // gère les erreurs SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());// Si la connexion échoue Php affiche un message d'erreur
}
?>
