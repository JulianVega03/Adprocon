<?php

require_once 'entities/ControlMaterial.php';

class ControlMaterialModel extends Model
{

    public function insertar($ControlMaterial)
    {
        $query = $this->db->connect()->prepare('INSERT INTO control_material (id_material, id_actividad, cant_proyectada, consumo,perdida,costo_hora) VALUES(:id_material, :id_actividad, :cant_proyectada, :consumo,:perdida ,:costo_hora)');
        try {
            $query->execute([
                'id_material' => $ControlMaterial->getId_material(),
                'id_actividad' => $ControlMaterial->getId_actividad(),
                'cant_proyectada' => $ControlMaterial->getCant_proyectada(),
                'consumo' => $ControlMaterial->getConsumo(),
                'perdida' => $ControlMaterial->getPerdida(),
                'costo_hora' => $ControlMaterial->getCosto_hora()
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
            $query = $this->db->connect()->query("SELECT * FROM control_material");

            while ($row = $query->fetch()) {
                $item = new ControlMaterial();
                $item->setId_material($row['id_material']);
                $item->setId_actividad($row['id_actividad']);
                $item->setCant_proyectada($row['cant_proyectada']);
                $item->setConsumo($row['consumo']);
                $item->setPerdida($row['perdida']);
                $item->setCosto_hora($row['costo_hora']);
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
        $query = $this->db->connect()->prepare("SELECT * FROM control_material WHERE id_actividad = :id");
        try {
          while ($row = $query->fetch()) {
                $item = new ControlMaterial();
                $item->setId_material($row['id_material']);
                $item->setId_actividad($row['id_actividad']);
                $item->setCant_proyectada($row['cant_proyectada']);
                $item->setConsumo($row['consumo']);
                $item->setPerdida($row['perdida']);
                $item->setCosto_hora($row['costo_hora']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function actualizar($ControlMaterial)
    {
        $query = $this->db->connect()->prepare("UPDATE control_material SET cant_proyectada = :cant_proyectada , consumo = :consumo, perdida = :perdida WHERE id_material = :id_m and id_actividad = :id_a");
        try {
            $query->execute([
                'id_m' => $ControlMaterial->getId_material(),
                'id_a' => $ControlMaterial->getId_actividad(),
                'cant_proyectada' => $ControlMaterial->getCant_proyectada(),
                'consumo' => $ControlMaterial->getConsumo(),
                'perdida' => $ControlMaterial->getPerdida(),
                'costo_hora' => $ControlMaterial->getCosto_hora()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($id_m,$id_a)
    {
        $query = $this->db->connect()->prepare("DELETE FROM actividad WHERE id_material = :id_m and id_actividad = :id_a");
        try {
            $query->execute([
                'id_m' => $id_m,
                'id_a' => $id_a
                
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
