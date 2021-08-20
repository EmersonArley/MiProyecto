<html>

<head>
    <title>En proceso</title>
</head>
<!-- jQuery -->
<script src="../Vista/plugins/jquery/jquery.min.js"></script>
<!-- SweetAlert 2 -->
<script src="../Vista/plugins/sweetalert2/sweetalert2.all.js"></script>
<!-- Bootstrap 4 -->
<script src="../Vista/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../estilos/imgs/"></script>

</html>
<style>
    body {
        background-image: url(../../estilo/imgs/ss.jpg);
        background-size: cover;
        background-position: center;
    }
</style>
<?php
require_once("../Modelo/conexion.php");
require_once("../Modelo/Usuarios/Users.php");
require_once("../Modelo/Usuarios/crudUsuarios.php");

$crudUsuario = new crudUsuario();
$usuario = new Usuarios();
if (isset($_POST['registrarUsuario'])) {
    $llego = false;
    $usuario->setNombre($_POST['nombreUsuario']);
    $usuario->setCorreo($_POST['correoUsuario']);
    $usuario->setContrasena($_POST['contrasenaUsuario']);
    $llego = $crudUsuario->registrarUsuario($usuario);
?>
    <?php
    if ($llego == true) {
    ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Usuario registrado exitosamente ',
                timer: 2000,
                timerProgressBar: true,
            }).then((result) => {
                window.location.href = "../Vista/Login/login.php";
            });
        </script>
    <?php
    } else {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Email ya registrado',
                text: 'Por favor intenta con otro',
                timer: 2000,
                timerProgressBar: true,
            }).then((result) => {
                window.location.href = "../Vista/usuarios/registrarUsuario.php";
            });
        </script>
    <?php
    }
} else if (isset($_POST['editarUsuario'])) {
    $llego = false;
    $usuario->setidUsuario($_POST['idUsuario']);
    $usuario->setCorreo($_POST['correoUsuario']);
    $usuario->setContrasena($_POST['contrasenaUsuario']);

    $llego = $crudUsuario->editarUsuario($usuario); //Funcion
    if ($llego == true) {
    ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Usuario editado exitosamente ',
                timer: 2000,
                timerProgressBar: true,
            }).then((result) => {
                window.location.href = "../../views/Usuarios/usuariosView.php";
            });
        </script>
    <?php

    } else {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error al editar',
                timer: 2000,
                timerProgressBar: true,
            }).then((result) => {
                window.location.href = "../../views/Usuarios/editarUsuarios.php";
            });
        </script>
<?php
    }
}
