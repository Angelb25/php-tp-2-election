<?php

class etat_election
{
private $id_etat;

    /**
     * @param $id_etat
     * @param $nom_etat
     */
    public function __construct($id_etat, $nom_etat)
    {
        $this->id_etat = $id_etat;
        $this->nom_etat = $nom_etat;
    }

    /**
     * @return mixed
     */
    public function getIdEtat()
    {
        return $this->id_etat;
    }

    /**
     * @param mixed $id_etat
     */
    public function setIdEtat($id_etat): void
    {
        $this->id_etat = $id_etat;
    }

    /**
     * @return mixed
     */
    public function getNomEtat()
    {
        return $this->nom_etat;
    }

    /**
     * @param mixed $nom_etat
     */
    public function setNomEtat($nom_etat): void
    {
        $this->nom_etat = $nom_etat;
    }
private $nom_etat;

}