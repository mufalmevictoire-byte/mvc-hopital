<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Médicament</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>💊 ENREGISTRER UN MÉDICAMENT</h2>
        <form action="actions/save_med.php" method="POST">
            <input type="text" name="code_med" placeholder="Code Médicament (ex: MED01)" required>
            <input type="text" name="designation" placeholder="Désignation (Nom du produit)" required>
            <textarea name="description" placeholder="Description du médicament"></textarea>
            <input type="number" step="0.01" name="prix_vente" placeholder="Prix de vente" required>

            <button type="submit" class="btn">Enregistrer le Produit</button>
            <a href="index.php" class="back-link">Retour à l'accueil</a>
        </form>
    </div>
</body>
</html>