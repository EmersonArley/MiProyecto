<?php
class Usuarios{
private $idUsuario;
private $nombre;
private $correo;
private $contrasena;


public function getidUsuario()
{
    return $this->idUsuario;
}

public function setidUsuario($idUsuario)
{
    $this->idUsuario= $idUsuario;
}

public function getNombre()
{
    return $this->nombre;
}

public function setNombre($nombre)
{
    $this->nombre= $nombre;
}




  public function getCorreo()
{
    return $this->correo;
}

public function setCorreo($correo)
{
    $this->correo= $correo;
}

public function getContrasena()
{
    return $this->contrasena;
}

public function setContrasena($contrasena)
{
    $this->contrasena= $contrasena;
}


  }