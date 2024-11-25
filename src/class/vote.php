<?php

class vote
{
private $id_vote;
private $num_tour;

    /**
     * @param $id_vote
     * @param $num_tour
     */
    public function __construct($id_vote, $num_tour)
    {
        $this->id_vote = $id_vote;
        $this->num_tour = $num_tour;
    }

    /**
     * @return mixed
     */
    public function getIdVote()
    {
        return $this->id_vote;
    }

    /**
     * @param mixed $id_vote
     */
    public function setIdVote($id_vote): void
    {
        $this->id_vote = $id_vote;
    }

    /**
     * @return mixed
     */
    public function getNumTour()
    {
        return $this->num_tour;
    }

    /**
     * @param mixed $num_tour
     */
    public function setNumTour($num_tour): void
    {
        $this->num_tour = $num_tour;
    }

}