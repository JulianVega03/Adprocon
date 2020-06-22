<?php

require_once 'entities/ElementoVaciado.php';

class ElementoVaciadoModel extends Model
{

    public function insertar($Elemento_Vaciado)
    {
        $query = $this->db->connect()->prepare('INSERT INTO elemento_vaciado (id, nombre) VALUES(:id,:nombre)');
        try {
            $query->execute([
                'id' => $Elemento_Vaciado->getId(),
                'nombre' => $Elemento_Vaciado->getNombre()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function obtener()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM elemento_vaciado");

            while ($row = $query->fetch()) {
                $item = new Elemento_Vaciado();
                $item->setId($row['id']);
                $item->setNombre($row['nombre']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

/* no se que tan necesario sea
    public function obtenerPorId($id)
    {
        $item = new Elemento_Vaciado();
        $query = $this->db->connect()->prepare("SELECT * FROM elemento_vaciado WHERE id = :id");
        try {
            $query->execute($id);

            while ($row = $query->fetch()) {
                $item->setId($row['id']);
                $item->setId_proyecto($row['id_proyecto']);
                $item->setNombre($row['nombre']);
                $item->setUbicacion($row['ubicacion']);
                $item->setId_cuadrilla($row['id_cuadrilla']);
                $item->setFecha($row['fecha']);
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }
*/
    public function actualizar($Elemento_Vaciado)
    {
        $query = $this->db->connect()->prepare("UPDATE elemento_vaciado SET id = :id_proyecto, nombre = :nombre");
        try {
            $query->execute([
                'id' => $Elemento_Vaciado->getId(),
                'nombre' => $Elemento_Vaciado->getNombre()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM elemento_vaciado WHERE id = :id");
        try {
            $query->execute($id);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
      public function eliminar($nombre)
    {
        $query = $this->db->connect()->prepare("DELETE FROM elemento_vaciado WHERE nombre = :nombre");
        try {
            $query->execute($nombre);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
