<?php

namespace repository;

use PDO;
use entite\utilisateur;

class utilisateur_repository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Utilisateur $utilisateur): bool
    {
        $sql = "INSERT INTO utilisateur (nom, prenom) VALUES (:nom, :prenom)";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'nom' => $utilisateur->getNom(),
            'prenom' => $utilisateur->getPrenom()
        ]);
    }

    public function findById(int $idUtilisateur): ?Utilisateur
    {
        $sql = "SELECT * FROM utilisateur WHERE idUtilisateur = :idUtilisateur";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['idUtilisateur' => $idUtilisateur]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new Utilisateur($data['idUtilisateur'], $data['nom'], $data['prenom']);
        }

        return null;
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM utilisateur";
        $stmt = $this->pdo->query($sql);
        $utilisateurs = [];

        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $utilisateurs[] = new Utilisateur($data['idUtilisateur'], $data['nom'], $data['prenom']);
        }

        return $utilisateurs;
    }

    public function update(Utilisateur $utilisateur): bool
    {
        $sql = "UPDATE utilisateur SET nom = :nom, prenom = :prenom WHERE idUtilisateur = :idUtilisateur";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'nom' => $utilisateur->getNom(),
            'prenom' => $utilisateur->getPrenom(),
            'idUtilisateur' => $utilisateur->getIdUtilisateur()
        ]);
    }

    public function delete(int $idUtilisateur): bool
    {
        $sql = "DELETE FROM utilisateur WHERE idUtilisateur = :idUtilisateur";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute(['idUtilisateur' => $idUtilisateur]);
    }
}
