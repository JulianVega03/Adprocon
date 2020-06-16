<?php

class Usuario
{

  private $idUsuario;
  private $cedula;
  private $username;
  private $email;
  private $contrasena;

  public function __construct($idUsuario = null, $cedula = null, $username = null, $email = null, $contrasena = null)
  {
    $this->idUsuario = $idUsuario;
    $this->cedula = $cedula;
    $this->username = $username;
    $this->email = $email;
    $this->contrasena = $contrasena;
  }

  public function getIdUsuario()
  {
    return $this->idUsuario;
  }

  public function setIdUsuario($idUsuario)
  {
    $this->idUsuario = $idUsuario;
  }

  public function getCedula()
  {
    return $this->cedula;
  }

  public function setCedula($cedula)
  {
    $this->cedula = $cedula;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
    return $this->username = $username;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    return $this->email = $email;
  }

  public function getConstrasena()
  {
    return $this->contrasena;
  }

  public function setContrasena($contrasena)
  {
    return $this->contrasena = $contrasena;
  }
}
