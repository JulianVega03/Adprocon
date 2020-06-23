<?php

require_once 'entities/Actividad.php';

class ActividadModel extends Model
{

    public function insertar($actividad)
    {
        $query = $this->db->connect()->prepare('INSERT INTO actividad (id_proyecto, nombre, ubicacion, id_cuadrilla, fecha) VALUES(:id_proyecto, :nombre, :ubicacion, :id_cuadrilla, :fecha)');
        try {
            $query->execute([
                'id_proyecto' => $actividad->getId_proyecto(),
                'nombre' => $actividad->getNombre(),
                'ubicacion' => $actividad->getUbicacion(),
                'id_cuadrilla' => $actividad->getId_cuadrilla(),
                'fecha' => $actividad->getFecha()
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
            $query = $this->db->connect()->query("SELECT * FROM actividad");

            while ($row = $query->fetch()) {
                $item = new Actividad();
                $item->setId($row['id']);
                $item->setId_proyecto($row['id_proyecto']);
                $item->setNombre($row['nombre']);
                $item->setUbicacion($row['ubicacion']);
                $item->setId_cuadrilla($row['id_cuadrilla']);
                $item->setFecha($row['fecha']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function obtenerPorId($id)
    {
        $item = new Actividad();
        $query = $this->db->connect()->prepare("SELECT * FROM actividad WHERE id = :id");
        try {
            $query->execute(['id' => $id]);

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

    public function obtenerPorIdProyecto($id)
    {
        $items = [];
        try {
            $query = $this->db->connect()->prepare("SELECT * FROM actividad WHERE id_proyecto = :id");
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) {
                $item = new Actividad();
                $item->setId($row['id']);
                $item->setId_proyecto($row['id_proyecto']);
                $item->setNombre($row['nombre']);
                $item->setUbicacion($row['ubicacion']);
                $item->setId_cuadrilla($row['id_cuadrilla']);
                $item->setFecha($row['fecha']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function actualizar($actividad)
    {
        $query = $this->db->connect()->prepare("UPDATE actividad SET id_proyecto = :id_proyecto, nombre = :nombre, ubicacion = :ubicacion, id_cuadrilla = :id_cuadrilla, fecha = :fecha WHERE id = :id");
        try {
            $query->execute([
                'id' => $actividad->getId(),
                'id_proyecto' => $actividad->getId_proyecto(),
                'nombre' => $actividad->getNombre(),
                'ubicacion' => $actividad->getUbicacion(),
                'id_cuadrilla' => $actividad->getId_cuadrilla(),
                'fecha' => $actividad->getFecha()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM actividad WHERE id = :id");
        try {
            $query->execute(['id' => $id]);
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
}
