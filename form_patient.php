<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Patient</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>📝 ENREGISTRER UN NOUVEAU PATIENT</h2>
        <form action="actions/save_patient.php" method="POST">
            <input type="text" name="code_patient" placeholder="Code du Patient (ex: P001)" required>
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="postnom" placeholder="Postnom" required>
            <input type="text" name="prenom" placeholder="Prénom" required>
            <textarea name="adresse" placeholder="Adresse complète"></textarea>
            
            <select name="sexe">
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select>

            <input type="text" name="telephone" placeholder="Téléphone">
            <label>Date de Naissance :</label>
            <input type="date" name="date_naissance">

            <button type="submit" class="btn">Enregistrer le Patient</button>
            <a href="index.php" class="back-link">Retour à l'accueil</a>
        </form>
    </div>
</body>
</html>