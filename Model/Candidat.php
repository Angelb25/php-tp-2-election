<?php

namespace Model;
use src\connexion_PDO;

class Candidat
{
    public static function getByGroup($groupId)
    {
        $db = Database::getConnection();
        $query = $db->prepare('SELECT * FROM candidat WHERE group_id = :group_id');
        $query->execute(['group_id' => $groupId]);
        return $query->fetchAll();
    }
}
