<?php

namespace entite;

class Election
{
    private $idElection;
    private $idEtat;

    public function __construct($idElection = null, $idEtat = null)
    {
        $this->idElection = $idElection;
        $this->idEtat = $idEtat;
    }

    public function getIdElection()
    {
        return $this->idElection;
    }

    public function setIdElection($idElection): self
    {
        $this->idElection = $idElection;
        return $this;
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
}