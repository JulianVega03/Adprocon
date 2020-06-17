<?php

class Material
{

    private $idMaterial;
    private $nombre;
    private $unidadDeMedida;


    /**
     * Get the value of idMaterial
     */
    public function getIdMaterial()
    {
        return $this->idMaterial;
    }

    /**
     * Set the value of idMaterial
     *
     * @return  self
     */
    public function setIdMaterial($idMaterial)
    {
        $this->idMaterial = $idMaterial;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of unidadDeMedida
     */
    public function getUnidadDeMedida()
    {
        return $this->unidadDeMedida;
    }

    /**
     * Set the value of unidadDeMedida
     *
     * @return  self
     */
    public function setUnidadDeMedida($unidadDeMedida)
    {
        $this->unidadDeMedida = $unidadDeMedida;

        return $this;
    }
}
