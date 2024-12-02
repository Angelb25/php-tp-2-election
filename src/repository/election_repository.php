<?php

namespace repository;
use entite\election;

class election_repository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Récupérer une élection par son identifiant
    public function findById($idElection)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM election WHERE idElection = :idElection');
        $stmt->execute(['idElection' => $idElection]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Election($row['idElection'], $row['idEtat']);
        }

        return null;
    }

    // Ajouter une nouvelle élection
    public function add(Election $election)
    {
        $stmt = $this->pdo->prepare('INSERT INTO election (idElection, idEtat) VALUES (:idElection, :idEtat)');
        $stmt->execute([
            'idElection' => $election->getIdElection(),
            'idEtat' => $election->getIdEtat()
        ]);
    }

    // Mettre à jour une élection existante
    public function update(Election $election)
    {
        $stmt = $this->pdo->prepare('UPDATE election SET idEtat = :idEtat WHERE idElection = :idElection');
        $stmt->execute([
            'idElection' => $election->getIdElection(),
            'idEtat' => $election->getIdEtat()
        ]);
    }

    // Supprimer une élection par son identifiant
    public function delete($idElection)
    {
        $stmt = $this->pdo->prepare('DELETE FROM election WHERE idElection = :idElection');
        $stmt->execute(['idElection' => $idElection]);
    }

    // Récupérer toutes les élections
    public function findAll()
    {
        $stmt = $this->pdo->query('SELECT * FROM election');
        $elections = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $elections[] = new Election($row['idElection'], $row['idEtat']);
        }
        return $elections;
    }
}