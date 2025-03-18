<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement</title>
</head>
<body>
    <h2>Formulaire d'enregistrement</h2>
    <form action="traitement.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br><br>

        <label for="genre">Genre :</label>
        <select id="genre" name="genre">
            <option value="">Choisissez votre genre</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="autre">Autre</option>
        </select>
        <br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="photo">Photo :</label>
        <input type="file" id="photo" name="photo" required>
        <br><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        <br><br>

       

        <button type="submit">S'enregistrer</button>
    </form>
</body>
</html>
