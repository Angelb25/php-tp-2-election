<?php

namespace entite;

class etat_election
{
    private $idEtat;
    private $nomEtat;

    public function __construct($idEtat = null, $nomEtat = null)
    {
        $this->idEtat = $idEtat;
        $this->nomEtat = $nomEtat;
    }

    public function getIdEtat()
    {
        return $this->idEtat;
    }

    public function setIdEtat($idEtat): self
    {
        $this->idEtat = $idEtat;
        return $this;
    }

    public function getNomEtat()
    {
        return $this->nomEtat;
    }

    public function setNomEtat($nomEtat): self
    {
        $this->nomEtat = $nomEtat;
        return $this;
    }
}