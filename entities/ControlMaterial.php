<?php

class ControlMaterial
{
    private $id_material;
    private $id_actividad;
    private $cant_proyectada;
    private $consumo;
    private $perdida;
    private $costo_hora;

    /**
     * Get the value of id_material
     */
    public function getId_material()
    {
        return $this->id_material;
    }

    /**
     * Set the value of id_material
     *
     * @return  self
     */
    public function setId_material($id_material)
    {
        $this->id_material = $id_material;

        return $this;
    }

    /**
     * Get the value of id_actividad
     */
    public function getId_actividad()
    {
        return $this->id_actividad;
    }

    /**
     * Set the value of id_actividad
     *
     * @return  self
     */
    public function setId_actividad($id_actividad)
    {
        $this->id_actividad = $id_actividad;

        return $this;
    }

    /**
     * Get the value of cant_proyectada
     */
    public function getCant_proyectada()
    {
        return $this->cant_proyectada;
    }

    /**
     * Set the value of cant_proyectada
     *
     * @return  self
     */
    public function setCant_proyectada($cant_proyectada)
    {
        $this->cant_proyectada = $cant_proyectada;

        return $this;
    }

    /**
     * Get the value of consumo
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     *
     * @return  self
     */
    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;

        return $this;
    }

    /**
     * Get the value of perdida
     */
    public function getPerdida()
    {
        return $this->perdida;
    }

    /**
     * Set the value of perdida
     *
     * @return  self
     */
    public function setPerdida($perdida)
    {
        $this->perdida = $perdida;

        return $this;
    }

    /**
     * Get the value of costo_hora
     */
    public function getCosto_hora()
    {
        return $this->costo_hora;
    }

    /**
     * Set the value of costo_hora
     *
     * @return  self
     */
    public function setCosto_hora($costo_hora)
    {
        $this->costo_hora = $costo_hora;

        return $this;
    }
}
