<?php

namespace Model\repository;

use Model\entite\groupe;
use PDO;

class group_repository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Groupe $groupe): bool
    {
        $sql = "INSERT INTO groupe (nomEtat) VALUES (:nomEtat)";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'nomEtat' => $groupe->getNomEtat()
        ]);
    }

    public function findById(int $idEtat): ?Groupe
    {
        $sql = "SELECT * FROM groupe WHERE idEtat = :idEtat";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['idEtat' => $idEtat]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new Groupe($data['idEtat'], $data['nomEtat']);
        }

        return null;
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM groupe";
        $stmt = $this->pdo->query($sql);
        $groupes = [];

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $groupes[] = new Groupe($data['idEtat'], $data['nomEtat']);
        }

        return $groupes;
    }

    public function update(Groupe $groupe): bool
    {
        $sql = "UPDATE groupe SET nomEtat = :nomEtat WHERE idEtat = :idEtat";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'nomEtat' => $groupe->getNomEtat(),
            'idEtat' => $groupe->getIdEtat()
        ]);
    }

    public function delete(int $idEtat): bool
    {
        $sql = "DELETE FROM groupe WHERE idEtat = :idEtat";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute(['idEtat' => $idEtat]);
    }
}