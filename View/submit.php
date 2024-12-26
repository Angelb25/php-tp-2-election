<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Model\Vote;
use Model\Candidate;

// Vérifier que les données POST sont présentes
if (isset($_POST['group_id'], $_POST['candidate_id'])) {
    $groupId = (int) $_POST['group_id'];
    $candidateId = (int) $_POST['candidate_id'];

    try {
        // Vérifier que le candidat appartient bien au groupe
        $candidate = Candidate::getById($candidateId);
        if (!$candidate || $candidate['group_id'] !== $groupId) {
            throw new Exception("Candidat invalide pour ce groupe.");
        }

        // Enregistrer le vote
        Vote::add($groupId, $candidateId);

        // Rediriger vers la page de résultats
        header("Location: /results.php?group_id=$groupId");
        exit;
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Données manquantes. Veuillez recommencer.";
}
