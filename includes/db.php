<?php
$host = 'localhost';
$dbname = 'hopital01';
$user = 'root';
$pass = '';

try {
    // On crée la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // On demande à PHP d'afficher les erreurs s'il y en a
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si la connexion échoue, on arrête tout et on affiche l'erreur
    die("Désolé Vicky, la connexion a échoué : " . $e->getMessage());
}
?>