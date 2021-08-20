<?php
// session_start();
// if (isset($_SESSION['Email'])) {
//     header("Location: ../starter/starter.php");
// }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tooljohns</title>
    <link rel="stylesheet" href="../../estilos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.css">
    <link rel="stylesheet" href="../../estilos/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../estilos/css/login.css">
    <link rel="stylesheet" href="../../estilos/style.css">

</head>

<body>
    <nav id="principal" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse text-capitalize" id="nav-links">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"s >
                        <a class="nav-link log" href="../usuarios/registrarUsuario.php" style="color:black" >Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>

            <div id="fondo" class="col-md-8 col-lg-12" style="background-color: white ">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 id="bienvenido" style="text-align: center;" class="login-heading mb-4"><b>Iniciar sesion</b></h3>
                                <h3 id="ingreseAhora" class="login-heading mb-4"><b>Ingresa ahora</b></h3>
                                <form style="text-align: -webkit-center" action="../../Controlador/controladorLogin.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" id="Email" name="Email" class="form-control" placeholder="Email" required>
                                        <label>Usuario</label>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="Contrasena" name="Contrasena" class="form-control" placeholder="Password" required>
                                        <label>Contraseña</label>
                                    </div>
                                    <button type="submit" id="iniciarSession" name="iniciarSession" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Ingresar</button>
                                    <div class="text-center">
                                        
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function() {

            'use strict';

            var winH = $(window).height();

            $('header, .slide').height(winH);

            $('.navbar a.search-link').on('click', function() {
                $(this).siblings('form').fadeToggle();
            });

        });
    </script>

</body>

</html>