<?php

namespace repository;

use PDO;
use entite\vote;

class vote_repository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Vote $vote): bool
    {
        $sql = "INSERT INTO vote (numTour, idUtilisateur, idElection) VALUES (:numTour, :idUtilisateur, :idElection)";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'numTour' => $vote->getNumTour(),
            'idUtilisateur' => $vote->getIdUtilisateur(),
            'idElection' => $vote->getIdElection()
        ]);
    }

    public function findById(int $idVote): ?Vote
    {
        $sql = "SELECT * FROM vote WHERE idVote = :idVote";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['idVote' => $idVote]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new Vote($data['idVote'], $data['numTour'], $data['idUtilisateur'], $data['idElection']);
        }

        return null;
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM vote";
        $stmt = $this->pdo->query($sql);
        $votes = [];

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $votes[] = new Vote($data['idVote'], $data['numTour'], $data['idUtilisateur'], $data['idElection']);
        }

        return $votes;
    }

    public function update(Vote $vote): bool
    {
        $sql = "UPDATE vote SET numTour = :numTour, idUtilisateur = :idUtilisateur, idElection = :idElection WHERE idVote = :idVote";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'numTour' => $vote->getNumTour(),
            'idUtilisateur' => $vote->getIdUtilisateur(),
            'idElection' => $vote->getIdElection(),
            'idVote' => $vote->getIdVote()
        ]);
    }

    public function delete(int $idVote): bool
    {
        $sql = "DELETE FROM vote WHERE idVote = :idVote";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute(['idVote' => $idVote]);
    }
}