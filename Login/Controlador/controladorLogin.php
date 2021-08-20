<html>

<head>
    <title>En proceso</title>
    <link rel="stylesheet" href="../views/dist/css/adminlte.min.css">
</head>
<!-- jQuery -->|
<script src="../Vista/plugins/jquery/jquery.min.js"></script>
<!-- SweetAlert 2 -->
<script src="../Vista/plugins/sweetalert2/sweetalert2.all.js"></script>
<!-- Bootstrap 4 -->
<script src="../Vista/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../estilos/imgs/"></script>

</html>
<style>
    body {
        background-image: url(../estilo/imgs/ss.jpg);
        background-size: cover;
        background-position: center;
    }
</style>
<?php
require_once("../Modelo/login/login.php");
require_once("../Modelo/login/verificarLogin.php");
require_once("../Modelo/conexion.php");
$verificar = new veficarLogin();
$login = new Login();
if (isset($_POST['iniciarSession'])) {
    $llego = false;
    $email = $_POST['Email'];
    $contrasena = ($_POST['Contrasena']);
    $llego = $verificar->verificar($email, $contrasena);

    if ($llego == false) {
?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error al iniciar sesión',
                text: 'Correo electrónico y/o contraseña incorrectas',
                timer: 2200,
                timerProgressBar: true,
            }).then((result) => {
                window.location.href = "../Vista/Login/login.php";
            });
        </script>
    <?php
    } else {
        session_start();
        $_SESSION['Email'] = $llego->getEmail();
        $_SESSION['idUsuario']= $llego->getidUsuario();

    ?>
        <script>
            let timerInterval
            Swal.fire({
                icon: 'success',
                title: 'Iniciando sesión...',
                timer: 750,
                timerProgressBar: true,
            }).then((result) => {
                window.location.href = "../Vista/prueba.php";
            });
        </script>
<?php
    }
}
