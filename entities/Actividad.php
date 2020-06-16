<?php

class Actividad
{

    private $id;
    private $id_proyecto;
    private $nombre;
    private $ubicacion;
    private $id_cuadrilla;
    private $fecha;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }

    public function getId_cuadrilla()
    {
        return $this->id_cuadrilla;
    }

    public function setId_cuadrilla($id_cuadrilla)
    {
        $this->id_cuadrilla = $id_cuadrilla;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
}
