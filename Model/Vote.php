<?php
namespace Model;

use src\connexion_PDO;

class Vote
{
    public static function addVote($id_candidat, $id_election)
    {
        $db = Database::getConnection();
        $query = $db->prepare('INSERT INTO vote (id_candidat) VALUES (:id_candidat)');
        $query->execute(['id_candidat' => $id_candidat]);
    }
}