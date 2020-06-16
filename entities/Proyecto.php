<?php

class Proyecto
{

    private $id_proyecto;
    private $nombre;
    private $responsable;
    private $descripcion;

    function __construct($id = null, $nombre = null, $responsable = null, $descripcion = null)
    {
        $this->id_proyecto = $id;
        $this->nombre = $nombre;
        $this->responsable = $responsable;
        $this->descripcion = $descripcion;
    }

    public function getId_proyecto()
    {
        return $this->id_proyecto;
    }

    public function setId_proyecto($id_proyecto)
    {
        $this->id_proyecto = $id_proyecto;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getResponsable()
    {
        return $this->responsable;
    }

    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
