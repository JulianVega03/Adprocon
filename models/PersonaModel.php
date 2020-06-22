<?php

require_once 'entities/Persona.php';

class PersonaModel extends Model
{

    // public function insertar($cuadrilla)
    // {
    //     $query = $this->db->connect()->prepare('INSERT INTO cuadrilla (metrajeRealizado, rendimiento, consumo, observacion) VALUES(:metrajeRealizado, :rendimiento, :consumo, :observacion)');
    //     try {
    //         $query->execute([
    //             'metrajeRealizado' => $cuadrilla->getMetrajeRealizado(),
    //             'rendimiento' => $cuadrilla->getRendimiento(),
    //             'consumo' => $cuadrilla->getConsumo(),
    //             'observacion' => $cuadrilla->getObservacion()
    //         ]);
    //         return true;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }

    public function obtener()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM persona");

            while ($row = $query->fetch()) {
                $item = new Persona();
                $item->setCedula($row['Cedula']);
                $item->setNombre($row['Nombre']);
                $item->setApellido($row['Apellido']);
                $item->setFecha_nacimiento($row['Fecha_Nacimiento']);
                $item->setTelefono($row['Telefono']);
                $item->setCorreo($row['Correo']);
                $item->setDireccion($row['Direccion']);
                $item->setTipo_sangre($row['Tipo_Sangre']);
                $item->setId_usuario($row['Id_Usuario']);
                $item->setId_tipo($row['Id_Tipo']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    // public function obtenerPorId($id)
    // {
    //     $item = new Cuadrilla();
    //     $query = $this->db->connect()->prepare("SELECT * FROM cuadrilla WHERE id = :id");
    //     try {
    //         $query->execute($id);

    //         while ($row = $query->fetch()) {
    //             $item->setId($row['id']);
    //             $item->setMetrajeRealizado($row['metrajeRealizado']);
    //             $item->setRendimiento($row['rendimiento']);
    //             $item->setConsumo($row['consumo']);
    //             $item->setObservacion($row['observacion']);
    //         }
    //         return $item;
    //     } catch (PDOException $e) {
    //         return null;
    //     }
    // }

    // public function actualizar($cuadrilla)
    // {
    //     $query = $this->db->connect()->prepare("UPDATE cuadrilla SET metrajeRealizado = :metrajeRealizado, rendimiento = :rendimiento, consumo = :consumo, observacion = :observacion WHERE id = :id");
    //     try {
    //         $query->execute([
    //             'id' => $cuadrilla->getId(),
    //             'metrajeRealizado' => $cuadrilla->getMetrajeRealizado(),
    //             'rendimiento' => $cuadrilla->getRendimiento(),
    //             'consumo' => $cuadrilla->getConsumo(),
    //             'observacion' => $cuadrilla->getObservacion()
    //         ]);
    //         return true;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }

    // public function eliminar($id)
    // {
    //     $query = $this->db->connect()->prepare("DELETE FROM cuadrilla WHERE id = :id");
    //     try {
    //         $query->execute($id);
    //         return true;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }
}
