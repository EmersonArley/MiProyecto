<?php
class veficarLogin
{
    public function verificar($email, $contrasena)
    {
        $llego = false;
        $db = DB::Conectar();
        $verificar = $db->query("SELECT * FROM usuarios WHERE correo='$email' AND contrasena='$contrasena'");
        $existe = $verificar->rowCount();
        if ($existe == 0) {
            return $llego = false;
        } else {
            $item = $verificar->fetch();
            $login = new Login();
            $login->setEmail($item['correo']);
          
            return $login;
        }
    }
}
