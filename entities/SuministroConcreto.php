<?php

class SuministroConcreto
{
    private $id;
    private $id_actividad;
    private $empresa_concretera;
    private $elemento_vaciado;
    private $fecha;
    private $sello_seguridad;
    private $hora_salida;
    private $hora_llegada;
    private $volumen;

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
     * Get the value of empresa_concretera
     */ 
    public function getEmpresa_concretera()
    {
        return $this->empresa_concretera;
    }

    /**
     * Set the value of empresa_concretera
     *
     * @return  self
     */ 
    public function setEmpresa_concretera($empresa_concretera)
    {
        $this->empresa_concretera = $empresa_concretera;

        return $this;
    }

    /**
     * Get the value of elemento_vaciado
     */ 
    public function getElemento_vaciado()
    {
        return $this->elemento_vaciado;
    }

    /**
     * Set the value of elemento_vaciado
     *
     * @return  self
     */ 
    public function setElemento_vaciado($elemento_vaciado)
    {
        $this->elemento_vaciado = $elemento_vaciado;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of sello_seguridad
     */ 
    public function getSello_seguridad()
    {
        return $this->sello_seguridad;
    }

    /**
     * Set the value of sello_seguridad
     *
     * @return  self
     */ 
    public function setSello_seguridad($sello_seguridad)
    {
        $this->sello_seguridad = $sello_seguridad;

        return $this;
    }

    /**
     * Get the value of hora_salida
     */ 
    public function getHora_salida()
    {
        return $this->hora_salida;
    }

    /**
     * Set the value of hora_salida
     *
     * @return  self
     */ 
    public function setHora_salida($hora_salida)
    {
        $this->hora_salida = $hora_salida;

        return $this;
    }

    /**
     * Get the value of hora_llegada
     */ 
    public function getHora_llegada()
    {
        return $this->hora_llegada;
    }

    /**
     * Set the value of hora_llegada
     *
     * @return  self
     */ 
    public function setHora_llegada($hora_llegada)
    {
        $this->hora_llegada = $hora_llegada;

        return $this;
    }

    /**
     * Get the value of volumen
     */ 
    public function getVolumen()
    {
        return $this->volumen;
    }

    /**
     * Set the value of volumen
     *
     * @return  self
     */ 
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;

        return $this;
    }
}
