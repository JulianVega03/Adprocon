<?php

require_once 'entities/Usuario.php';

class UsuarioModel extends Model
{


    public function existeUsuario($username, $pass)
    {
        $item = new Usuario();
        $query = $this->db->connect()->prepare("SELECT * FROM Usuario WHERE username = :user and contrasena = :pass");
        try {
            $query->execute([
                'user' => $username,
                'pass' => $pass
            ]);

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    // public function insert($datos){
    //     // insertar
    //     $query = $this->db->connect()->prepare('INSERT INTO ALUMNOS (MATRICULA, NOMBRE, APELLIDO) VALUES(:matricula, :nombre, :apellido)');
    //     try{
    //         $query->execute([
    //             'matricula' => $datos['matricula'],
    //             'nombre' => $datos['nombre'],
    //             'apellido' => $datos['apellido']
    //         ]);
    //         return true;
    //     }catch(PDOException $e){
    //         return false;
    //     }
    // }

    // public function get(){
    //     $items = [];
    //     try{
    //      $query = $this->db->connect()->query("SELECT * FROM ALUMNOS");

    //      while($row = $query->fetch()){
    //          $item = new Alumno();
    //          $item->matricula = $row['matricula'];
    //          $item->nombre = $row['nombre'];
    //          $item->apellido = $row['apellido'];
    //          array_push($items, $item);
    //      }
    //      return $items;
    //  }catch(PDOException $e){
    //      return [];
    //     }
    //  }

    //  public function getById($id){
    //      $item = new Alumno();
    //      $query = $this->db->connect()->prepare("SELECT * FROM alumnos WHERE matricula = :matricula");
    //      try{
    //          $query->execute(['matricula' => $id]);

    //          while($row = $query->fetch()){
    //              $item->matricula = $row['matricula'];
    //              $item->nombre = $row['nombre'];
    //              $item->apellido = $row['apellido'];
    //          }
    //          return $item;
    //      }catch(PDOException $e){
    //          return null;
    //      }
    //  }

    //  public function update($item){
    //      $query = $this->db->connect()->prepare("UPDATE alumnos SET nombre = :nombre,apellido = :apellido WHERE matricula = :matricula");
    //      try{
    //          $query->execute([
    //              'matricula' => $item['matricula'],
    //              'nombre' => $item['nombre'],
    //              'apellido'=> $item['apellido']
    //          ]);
    //          return true;
    //      }catch(PDOException $e){
    //          return false;
    //      }
    //  }

    //  public function delete($id){
    //      $query = $this->db->connect()->prepare("DELETE FROM alumnos WHERE matricula = :id");
    //      try{
    //          $query->execute([
    //              'id' => $id
    //          ]);
    //          return true;
    //      }catch(PDOException $e){
    //          return false;
    //      }
    //  }
}
