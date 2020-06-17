<?php
class Muestra
{

    private $id;
    private $id_proyecto;
    private $id_suministro;

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
     * Get the value of id_suministro
     */
    public function getId_suministro()
    {
        return $this->id_suministro;
    }

    /**
     * Set the value of id_suministro
     *
     * @return  self
     */
    public function setId_suministro($id_suministro)
    {
        $this->id_suministro = $id_suministro;

        return $this;
    }
}
