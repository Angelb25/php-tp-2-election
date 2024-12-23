<?php
namespace Models;

use src\connexion_PDO; // Assurez-vous que cette classe gère la connexion PDO.

class Group
{
public static function getAll()
{
try {
$db = c::getConnection();
// Correction : Utiliser le nom correct de la table `groupe`
$query = $db->query('SELECT * FROM groupe');
return $query->fetchAll();
} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}
}
}
?>