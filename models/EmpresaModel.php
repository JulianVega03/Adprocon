<?php

require_once 'entities/Empresa.php';

class EmpresaModel extends Model
{

    public function insertar($empresa)
    {
        $query = $this->db->connect()->prepare('INSERT INTO empresa (idEmpresa, nombre, nit, direccion, cedulaRepresentante,nombreRepresentante ,correoEmpresa,tipoEmpresa) VALUES(:idEmpresa, :nombre, :nit, :direccion, :cedulaRepresentante,:nombreRepresentante,:correoEmpresa,:tipoEmpresa)');
        try {
            $query->execute([
                'idEmpresa' => $empresa->getIdEmpresa(),
                'nombre' => $empresa->getNombre(),
                'nit' => $empresa->getNit(),
                'direccion' => $empresa->getDireccion(),
                'cedulaRepresentante' => $empresa->getCedulaRepresentante(),
                'nombreRepresentante' => $empresa->getNombreRepresentante(),
                'correoEmpresa' => $empresa->getCorreoEmpresa(),
                'tipoEmpresa' => $empresa->getTipoEmpresa()
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
            $query = $this->db->connect()->query("SELECT * FROM empresa");

            while ($row = $query->fetch()) {
                $item = new Empresa();
                $item->setIdEmpresa($row['idEmpresa']);
                $item->setNombre($row['nombre']);
                $item->setNit($row['nit']);
                $item->setDireccion($row['direccion']);
                $item->setCedulaRepresentante($row['cedulaRepresentante']);
                $item->setNombreRepresentante($row['nombreRepresentante']);
                $item->setCorreoEmpresa($row['correoEmpresa']);
                $item->setTipoEmpresa($row['tipoEmpresa'])
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

    public function actualizar($empresa)
    {
        $query = $this->db->connect()->prepare("UPDATE empresa SET idEmpresa = :idEmpresa, nombre = :nombre, nit = :nit, direccion = :direccion,cedulaRepresentante = :cedulaRepresentante,nombreRepresentante = :nombreRepresentante , correoEmpresa = :correoEmpresa,tipoEmpresa = :tipoEmpresa WHERE idEmpresa = :idEmpresa");
        try {
            $query->execute([
                'idEmpresa' => $empresa->getIdEmpresa(),
                'nombre' => $empresa->getNombre(),
                'nit' => $empresa->getNit(),
                'direccion' => $empresa->getDireccion(),
                'cedulaRepresentante' => $empresa->getCedulaRepresentante(),
                'nombreRepresentante' => $empresa->getNombreRepresentante(),
                'correoEmpresa' => $empresa->getCorreoEmpresa(),
                'tipoEmpresa' => $empresa->getTipoEmpresa(),
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function eliminar($idEmpresa)
    {
        $query = $this->db->connect()->prepare("DELETE FROM empresa WHERE idEmpresa = :idEmpresa");
        try {
            $query->execute($id);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
