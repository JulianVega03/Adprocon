<?php

require_once 'entities/Proyecto.php';

class ProyectoModel extends Model
{

    public function insert($proyecto)
    {
        $query = $this->db->connect()->prepare('INSERT INTO proyecto (id_proyecto, nombre, responsable, descripcion) VALUES(:id, :nombre, :responsable, :descripcion)');
        try {
            $query->execute([
                'id' => $proyecto->getId_proyecto(),
                'nombre' => $proyecto->getNombre(),
                'responsable' => $proyecto->getResponsable(),
                'descripcion' => $proyecto->getDescripcion()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function get()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM proyecto");

            while ($row = $query->fetch()) {
                $item = new Proyecto();
                $item->setId_proyecto($row['id_proyecto']);
                $item->setNombre($row['nombre']);
                $item->setResponsable($row['responsable']);
                $item->setDescripcion($row['descripcion']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function getById($id)
    {
        $item = new Proyecto();
        $query = $this->db->connect()->prepare("SELECT * FROM proyecto WHERE id_proyecto = :id");
        try {
            $query->execute($id);

            while ($row = $query->fetch()) {
                $item->setId_proyecto($row['id_proyecto']);
                $item->setNombre($row['nombre']);
                $item->setResponsable($row['responsable']);
                $item->setDescripcion($row['descripcion']);
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($proyecto)
    {
        $query = $this->db->connect()->prepare("UPDATE proyecto SET nombre = :nombre, responsable = :responsable, descripcion = :descripcion WHERE id_proyecto = :id");
        try {
            $query->execute([
                'id' => $proyecto->getId_proyecto(),
                'nombre' => $proyecto->getNombre(),
                'responsable' => $proyecto->getResponsable(),
                'descripcion' => $proyecto->getDescripcion()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

     public function delete($id){
         $query = $this->db->connect()->prepare("DELETE FROM proyecto WHERE id_proyecto = :id");
         try{
             $query->execute($id);
             return true;
         }catch(PDOException $e){
             return false;
         }
     }
}
