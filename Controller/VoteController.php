<?php

namespace Controller;

use Model\Candidat;
use Model\Vote;

class VoteController
{
    public function firstRound($groupId)
    {
        // Récupérer les candidats du groupe
        $candidates = Candidat::getByGroup($groupId);

        // Gérer la soumission du vote
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $candidateId = $_POST['candidate_id'] ?? null;
            if ($candidateId) {
                Vote::addVote($candidateId);
                header('Location: /vote/first-round/' . $groupId . '?success=1');
                exit;
            }
        }

        // Inclure la vue
        include __DIR__ . '/../View/firstRound.php';
    }
}
