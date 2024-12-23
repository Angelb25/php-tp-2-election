<?php

namespace Model\repository;
use Model\entite\Candidat;
use repository\PDO;
class candidat_repository
{
    public static function getByGroup($groupId)
    {
        $db = Database::getConnection();
        $query = $db->prepare('SELECT * FROM candidat WHERE group_id = :group_id');
        $query->execute(['group_id' => $groupId]);
        return $query->fetchAll() ?: []; // Retourne un tableau vide si aucun résultat
    }
}