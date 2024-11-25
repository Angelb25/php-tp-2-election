<?php

class election
{
private $id_election;

    /**
     * @param $id_election
     */
    public function __construct($id_election)
    {
        $this->id_election = $id_election;
    }

    /**
     * @return mixed
     */
    public function getIdElection()
    {
        return $this->id_election;
    }

    /**
     * @param mixed $id_election
     */
    public function setIdElection($id_election): void
    {
        $this->id_election = $id_election;
    }
}