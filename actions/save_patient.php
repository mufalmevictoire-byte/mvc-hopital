<?php
// On appelle la connexion à la base de données
require_once('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // On récupère les infos du formulaire
    $code = $_POST['code_patient'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['telephone'];

    try {
        // Préparation de la requête SQL
        $sql = "INSERT INTO Patient (code_patient, nom, postnom, prenom, adresse, sexe, telephone) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$code, $nom, $postnom, $prenom, $adresse, $sexe, $tel]);

        echo "Succès ! Le patient $nom a été enregistré. <a href='../index.php'>Retour</a>";
    } catch (PDOException $e) {
        die("Erreur lors de l'enregistrement : " . $e->getMessage());
    }
}
?>