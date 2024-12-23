<?php
namespace Model;

use src\connexion_PDO;

class Vote
{
    public static function addVote($candidateId)
    {
        $db = Database::getConnection();
        $query = $db->prepare('INSERT INTO vote (candidate_id) VALUES (:candidate_id)');
        $query->execute(['candidate_id' => $candidateId]);
    }
}