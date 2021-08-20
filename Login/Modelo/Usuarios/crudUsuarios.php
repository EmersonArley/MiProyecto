<?php
class crudUsuario
{
    public function registrarUsuario($usuario)
    {
        $llego = false;
        $db = Db::Conectar();
        $sql = $db->query('SELECT * FROM usuarios WHERE correo = "' . $usuario->getCorreo() . '"');
        if ($sql->rowCount() > 0) {
            return $llego;
        } else {
            $añadir = $db->prepare('INSERT INTO usuarios VALUES(Null, :nombre, :correo, :contrasena)');
            $añadir->bindValue('nombre', $usuario->getNombre());
            $añadir->bindValue('correo', $usuario->getCorreo());
            $añadir->bindValue('contrasena', $usuario->getContrasena());
            try {
                $añadir->execute();
                $llego = true;
            } catch (Exception $ex) {
                echo $ex->getMessage(); 
            }
            return $llego;
        }
    }

    


    // public function obtenerUsuario($idUsuario)
    // {
    //     $db = Db::Conectar();
    //     $listar = $db->query("SELECT * FROM usuario WHERE idUsuario=$idUsuario"); //aqui
    //     $item = $listar->fetch();
    //     $usuario = new Usuarios();
    //     // $cliente->setidCliente($item['id']);
    //     $usuario->setidRol($item['idRol']);
    //     $usuario->setCorreo($item['correo']);
    //     $usuario->setContrasena($item['contrasena']);
    //     return $usuario;
    // }

    public function editarUsuario($usuario)
    {
        $llego = false;
        $db = DB::Conectar();

        $añadir = $db->prepare('UPDATE usuario SET idRol=:idRol, correo=:correo ,contrasena=:contrasena WHERE idUsuario=:idUsuario');
        $añadir->bindValue('idUsuario', $usuario->getidUsuario());
        $añadir->bindValue('idRol', $usuario->getidRol());
        $añadir->bindValue('correo', $usuario->getCorreo());
        $añadir->bindValue('contrasena', $usuario->getContrasena());
        try {
            $añadir->execute();
            $llego = true;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $llego;
    }

 

    
}
