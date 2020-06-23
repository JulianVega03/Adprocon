<?php

require_once 'entities/Usuario.php';

class UsuarioModel extends Model
{

    public function existeUsuario($username, $pass)
    {
        $item = new Usuario();
        $query = $this->db->connect()->prepare("SELECT * FROM usuario WHERE username = :user and contrasena = :pass");
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

}
