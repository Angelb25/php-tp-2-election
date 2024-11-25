<?php

namespace entite;

class vote
{
    private $idVote;
    private $numTour;
    private $idUtilisateur;
    private $idElection;

    public function __construct($idVote = null, $numTour = null, $idUtilisateur = null, $idElection = null)
    {
        $this->idVote = $idVote;
        $this->numTour = $numTour;
        $this->idUtilisateur = $idUtilisateur;
        $this->idElection = $idElection;
    }

    public function getIdVote()
    {
        return $this->idVote;
    }

    public function setIdVote($idVote): self
    {
        $this->idVote = $idVote;
        return $this;
    }

    public function getNumTour()
    {
        return $this->numTour;
    }

    public function setNumTour($numTour): self
    {
        $this->numTour = $numTour;
        return $this;
    }

    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;
        return $this;
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
}