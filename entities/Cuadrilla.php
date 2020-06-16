<?php

class Cuadrilla
{
    private $id;
    private $metrajeRealizado;
    private $rendimiento;
    private $consumo;
    private $observacion;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMetrajeRealizado()
    {
        return $this->metrajeRealizado;
    }

    public function setMetrajeRealizado($metrajeRealizado)
    {
        $this->metrajeRealizado = $metrajeRealizado;
    }

    public function getRendimiento()
    {
        return $this->rendimiento;
    }

    public function setRendimiento($rendimiento)
    {
        $this->rendimiento = $rendimiento;
    }

    public function getConsumo()
    {
        return $this->consumo;
    }

    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;
    }

    public function getObservacion()
    {
        return $this->observacion;
    }

    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    }
}
