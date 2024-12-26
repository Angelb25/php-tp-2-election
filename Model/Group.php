<?php
namespace Models;

use src\connexion_PDO;

class Group
{
public static function getAll()
{
try {
$db = c::getConnection();
$query = $db->query('SELECT * FROM groupe');
return $query->fetchAll();
} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}
}
}
?>