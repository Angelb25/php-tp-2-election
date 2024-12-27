<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "election";

try {
    // Connexion à la base de données avec PDO
    $connexion = new PDO("mysql:host=$serveur;dbname=$base", $utilisateur, $motdepasse);

    // Définir le mode d'erreur de PDO sur Exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie!";
} catch (PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage(); // Affiche le message d'erreur
}
?>
