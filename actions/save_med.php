<?php
require_once('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = $_POST['code_med'];
    $desig = $_POST['designation'];
    $desc = $_POST['description'];
    $prix = $_POST['prix_vente'];

    try {
        $sql = "INSERT INTO Medicament (code_med, designation, description, prix_vente) 
                VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$code, $desig, $desc, $prix]);

        echo "Succès ! Le médicament $desig a été ajouté. <a href='../index.php'>Retour</a>";
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
?>