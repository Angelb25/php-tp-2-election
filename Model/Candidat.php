<?php

namespace Model;
use src\connexion_PDO;

class Candidat
{
    public static function getByGroup($id_group)
    {
        $db = Database::getConnection();
        $query = $db->prepare('SELECT * FROM candidat WHERE id_group = :id_group');
        $query->execute(['id_group' => $id_group]);
        return $query->fetchAll();
    }
}
