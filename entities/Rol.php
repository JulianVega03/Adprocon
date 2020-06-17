<?php

class Rol
{
    private $id_cuadrilla;
    private $id_persona;
    private $descripcion;


    /**
     * Get the value of id_cuadrilla
     */
    public function getId_cuadrilla()
    {
        return $this->id_cuadrilla;
    }

    /**
     * Set the value of id_cuadrilla
     *
     * @return  self
     */
    public function setId_cuadrilla($id_cuadrilla)
    {
        $this->id_cuadrilla = $id_cuadrilla;

        return $this;
    }

    /**
     * Get the value of id_persona
     */
    public function getId_persona()
    {
        return $this->id_persona;
    }

    /**
     * Set the value of id_persona
     *
     * @return  self
     */
    public function setId_persona($id_persona)
    {
        $this->id_persona = $id_persona;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}
