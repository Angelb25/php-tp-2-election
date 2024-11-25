<?php

class groupe
{
private $id_groupe;

    /**
     * @param $id_groupe
     */
    public function __construct($id_groupe)
    {
        $this->id_groupe = $id_groupe;
    }

    /**
     * @return mixed
     */
    public function getIdGroupe()
    {
        return $this->id_groupe;
    }

    /**
     * @param mixed $id_groupe
     */
    public function setIdGroupe($id_groupe): void
    {
        $this->id_groupe = $id_groupe;
    }

    /**
     * @return mixed
     */
    public function getNomGroupe()
    {
        return $this->nom_groupe;
    }

    /**
     * @param mixed $nom_groupe
     */
    public function setNomGroupe($nom_groupe): void
    {
        $this->nom_groupe = $nom_groupe;
    }

private $nom_groupe;

}