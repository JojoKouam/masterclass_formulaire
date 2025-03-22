<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement</title>
    <style>
        /* Style général de la page */
        body {
            font-family: Arial, sans-serif; /* Police de caractères */
            background-color: #f4f4f4; /* Couleur de fond */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Centre le formulaire horizontalement */
            align-items: center; /* Centre le formulaire verticalement */
            height: 100vh; /* Prend toute la hauteur de la fenêtre */
        }

        /* Style du formulaire */
        form {
            background-color: #fff; /* Fond blanc */
            padding: 20px; /* Espace intérieur */
            border-radius: 8px; /* Coins arrondis */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
            width: 400px; /* Largeur du formulaire */
        }

        /* Style des titres */
        h2 {
            text-align: center; /* Centre le titre */
            color: #333; /* Couleur du texte */
            margin-bottom: 25px; /* Espace en dessous */
        }

        /* Style des labels */
        label {
            display: block; /* Met chaque label sur une nouvelle ligne */
            margin-bottom: 5px; /* Espace en dessous */
            color: #555; /* Couleur du texte */
        }

        /* Style des champs de formulaire */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select,
        input[type="file"] {
            width: 90%; /* Prend toute la largeur disponible */
            padding: 8px; /* Espace intérieur */
            margin-bottom: 16px; /* Espace en dessous */
            border: 1px solid #ccc; /* Bordure grise */
            border-radius: 4px; /* Coins arrondis */
            font-size: 14px; /* Taille de la police */
        }

        /* Style du bouton */
        button[type="submit"] {
            width: 95%; /* Prend toute la largeur disponible */
            padding: 12px; /* Espace intérieur */
            margin-top: 10px; /* Espace vers le haut */
            background-color:rgb(37, 39, 122); /* Couleur de fond verte */
            color: #fff; /* Texte blanc */
            border: none; /* Pas de bordure */
            border-radius: 4px; /* Coins arrondis */
            font-size: 16px; /* Taille de la police */
            cursor: pointer; /* Change le curseur en main */
        }

        /* Effet au survol du bouton */
        button[type="submit"]:hover {
            background-color:rgb(78, 74, 156); /* Couleur de fond plus foncée */
        }

        /* Style pour les messages d'erreur (optionnel) */
        .error-message {
            color: red; /* Texte rouge */
            font-size: 12px; /* Taille de la police */
            margin-top: -10px; /* Espace au-dessus */
            margin-bottom: 10px; /* Espace en dessous */
        }
    </style>
</head>
<body>
    <form action="traitement.php" method="POST" enctype="multipart/form-data">
        <h2>Formulaire d'enregistrement</h2>

        <!-- Champ Nom -->
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <!-- Champ Prénom -->
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <!-- Champ Genre -->
        <label for="genre">Genre :</label>
        <select id="genre" name="genre">
            <option value="">Choisissez votre genre</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select>

        <!-- Champ Email -->
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <!-- Champ Photo -->
        <label for="photo">Photo :</label>
        <input type="file" id="photo" name="photo" required>

        <!-- Champ Mot de passe -->
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>

        <!-- Bouton de soumission -->
        <button type="submit">S'enregistrer</button>
    </form>
</body>
</html>