<?php
namespace Model;

use src\connexion_PDO;

class Group
{
public static function getAll()
{
    $db = connexion_PDO::getConnection();
    $query = $db->query('SELECT * FROM groupe');
    $result = $query->fetchAll();

    var_dump($result);
    return $result;
}
}
