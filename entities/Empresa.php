<?php

class Empresa
{

    private $idEmpresa;
    private $nombre;
    private $nit;
    private $direccion;
    private $cedulaRepresentante;
    private $NombreRepresentante;
    private $correoEmpresa;
    private $tipoEmpresa;



    /**
     * Get the value of idEmpresa
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set the value of idEmpresa
     *
     * @return  self
     */
    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;

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
     * Get the value of nit
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set the value of nit
     *
     * @return  self
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get the value of cedulaRepresentante
     */
    public function getCedulaRepresentante()
    {
        return $this->cedulaRepresentante;
    }

    /**
     * Set the value of cedulaRepresentante
     *
     * @return  self
     */
    public function setCedulaRepresentante($cedulaRepresentante)
    {
        $this->cedulaRepresentante = $cedulaRepresentante;

        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of NombreRepresentante
     */
    public function getNombreRepresentante()
    {
        return $this->NombreRepresentante;
    }

    /**
     * Set the value of NombreRepresentante
     *
     * @return  self
     */
    public function setNombreRepresentante($NombreRepresentante)
    {
        $this->NombreRepresentante = $NombreRepresentante;

        return $this;
    }

    /**
     * Get the value of correoEmpresa
     */
    public function getCorreoEmpresa()
    {
        return $this->correoEmpresa;
    }

    /**
     * Set the value of correoEmpresa
     *
     * @return  self
     */
    public function setCorreoEmpresa($correoEmpresa)
    {
        $this->correoEmpresa = $correoEmpresa;

        return $this;
    }

    /**
     * Get the value of tipoEmpresa
     */
    public function getTipoEmpresa()
    {
        return $this->tipoEmpresa;
    }

    /**
     * Set the value of tipoEmpresa
     *
     * @return  self
     */
    public function setTipoEmpresa($tipoEmpresa)
    {
        $this->tipoEmpresa = $tipoEmpresa;

        return $this;
    }
}
