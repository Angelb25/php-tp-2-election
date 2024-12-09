<?php

namespace Model\repository;

use PDO;
use repository\EtatElection;

class etat_election_repository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(EtatElection $etatElection): bool
    {
        $sql = "INSERT INTO etats_election (nomEtat) VALUES (:nomEtat)";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'nomEtat' => $etatElection->getNomEtat()
        ]);
    }

    public function findById(int $idEtat): ?EtatElection
    {
        $sql = "SELECT * FROM etat_election WHERE idEtat = :idEtat";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['idEtat' => $idEtat]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new EtatElection($data['idEtat'], $data['nomEtat']);
        }

        return null;
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM etat_election";
        $stmt = $this->pdo->query($sql);
        $etats = [];

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $etats[] = new EtatElection($data['idEtat'], $data['nomEtat']);
        }

        return $etats;
    }

    public function update(EtatElection $etatElection): bool
    {
        $sql = "UPDATE etat_election SET nomEtat = :nomEtat WHERE idEtat = :idEtat";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'nomEtat' => $etatElection->getNomEtat(),
            'idEtat' => $etatElection->getIdEtat()
        ]);
    }

    public function delete(int $idEtat): bool
    {
        $sql = "DELETE FROM etat_election WHERE idEtat = :idEtat";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute(['idEtat' => $idEtat]);
    }
}