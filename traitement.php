<?php
require_once "config_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Vérification des champs
        if (!isset($_POST["nom"], $_POST["prenom"], $_POST["genre"], $_POST["email"], $_POST["mot_de_passe"])) {
            die("Tous les champs doivent être remplis.");
        }

        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $genre = htmlspecialchars($_POST["genre"]);
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT);

        if (!$email) {
            die("L'adresse e-mail n'est pas valide.");
        }

        // Fonction pour la Gestion de l'upload de la photo
        function uploadFile($file, $upload_dir = "uploads/") {
            // Vérifier si un fichier a été upload et s'il n'y a pas d'erreur
            if (isset($file) && $file["error"] == 0) {
                // Récupération du nom du fichier original
                $filename = basename($file["name"]);
                // Définit le chemin complet du fichier sur le  serveur
                $upload_file = $upload_dir . $filename;
                //Déplace le fichier uploadé vers le dossier de destination
                if (move_uploaded_file($file["tmp_name"], $upload_file)) {
                    return $filename; // Retourne le nom du fichier si l'upload réussit
                } else {
                    // Lance une exception si le déplacement du fichier échoue
                    throw new Exception("Erreur lors du téléchargement de l'image.");
                }
            }
            return null; // Aucun fichier uploadé
        }
        
        // Utilisation de la fonction
        try {
            $photo = uploadFile($_FILES["photo"]);
        } catch (Exception $e) {
            die($e->getMessage());
        }

        // Insertion dans la base de données
        $requete = "INSERT INTO utilisateur (nom, prenom, genre, email, photo, date_inscription, address_ip, mot_de_passe) 
                    VALUES (:nom, :prenom, :genre, :email, :photo,:date_inscription, :address_ip, :mot_de_passe)";
        
        $stmt = $conn->prepare($requete);
        // bindParam est utilisé pour lier des paramètres SQL à des variables PHP dont la valeur peut changer
        $stmt->bindParam(':nom', $nom);// :nom prendra la valeur de $nom au moment de l'exécution
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':photo', $photo);
        // Lie des valeurs fixes aux paramètres SQL
        $stmt->bindValue(':date_inscription', date("Y-m-d H:i:s"));// :date_inscription prendra la date et l'heure actuelles
        $stmt->bindValue(':address_ip', $_SERVER["REMOTE_ADDR"]); // :address_ip prendra l'adresse IP de l'utilisateur
        $stmt->bindParam(':mot_de_passe', $mot_de_passe);
        
        if ($stmt->execute()) {
            echo "Utilisateur enregistré avec succès!";
        } else {
            echo "Échec de l'enregistrement.";
        }
    } catch (PDOException $e) {
        echo "Erreur SQL : " . $e->getMessage();
    }
}
?>
