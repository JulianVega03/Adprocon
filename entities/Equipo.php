<?php

class Equipo
{

    private $id;
    private $id_maquina;
    private $id_operario;
    private $id_proyecto;
    private $hora_inicio;
    private $hora_fin;
    private $numero_recibo;
    private $costo;
    private $estado;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id_maquina
     */
    public function getId_maquina()
    {
        return $this->id_maquina;
    }

    /**
     * Set the value of id_maquina
     *
     * @return  self
     */
    public function setId_maquina($id_maquina)
    {
        $this->id_maquina = $id_maquina;

        return $this;
    }

    /**
     * Get the value of id_operario
     */
    public function getId_operario()
    {
        return $this->id_operario;
    }

    /**
     * Set the value of id_operario
     *
     * @return  self
     */
    public function setId_operario($id_operario)
    {
        $this->id_operario = $id_operario;

        return $this;
    }

    /**
     * Get the value of id_proyecto
     */
    public function getId_proyecto()
    {
        return $this->id_proyecto;
    }

    /**
     * Set the value of id_proyecto
     *
     * @return  self
     */
    public function setId_proyecto($id_proyecto)
    {
        $this->id_proyecto = $id_proyecto;

        return $this;
    }

    /**
     * Get the value of hora_inicio
     */
    public function getHora_inicio()
    {
        return $this->hora_inicio;
    }

    /**
     * Set the value of hora_inicio
     *
     * @return  self
     */
    public function setHora_inicio($hora_inicio)
    {
        $this->hora_inicio = $hora_inicio;

        return $this;
    }

    /**
     * Get the value of hora_fin
     */
    public function getHora_fin()
    {
        return $this->hora_fin;
    }

    /**
     * Set the value of hora_fin
     *
     * @return  self
     */
    public function setHora_fin($hora_fin)
    {
        $this->hora_fin = $hora_fin;

        return $this;
    }

    /**
     * Get the value of numero_recibo
     */
    public function getNumero_recibo()
    {
        return $this->numero_recibo;
    }

    /**
     * Set the value of numero_recibo
     *
     * @return  self
     */
    public function setNumero_recibo($numero_recibo)
    {
        $this->numero_recibo = $numero_recibo;

        return $this;
    }

    /**
     * Get the value of costo
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set the value of costo
     *
     * @return  self
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
}
