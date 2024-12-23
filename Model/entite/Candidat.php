<?php

namespace Model\entite;

class Candidat
{
    private $id_candidat;
    private $nom;
    private $prenom;

    /**
     * @return mixed
     */
    public function getIdCandidat()
    {
        return $this->id_candidat;
    }

    /**
     * @param mixed $id_candidat
     */
    public function setIdCandidat($id_candidat): void
    {
        $this->id_candidat = $id_candidat;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @param $id_candidat
     * @param $nom
     * @param $prenom
     */
    public function __construct($id_candidat, $nom, $prenom)
    {
        $this->id_candidat = $id_candidat;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }


}