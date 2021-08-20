<?php
session_start();
 if (!isset($_SESSION['Email'])) {
  header("Location: ../usuario/login.php");
 }


?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tooljonhs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../plugins/SourceSansPro.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../starter/starter.php" class="nav-link">Inicio</a>
        </li> 
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Maximizar pantalla -->
        <!-- <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li> -->
        <!-- Menú superior lateral derecho -->
        <li class="nav-item">
        <a href="../Vista/Login/login.php" style="color: black;"  class="nav-link"> Cerrar sesión <img src= ></a>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../starter/starter.php" class="brand-link">
        <i><img src="../../estilo/imgs/logo.png" alt="" style="width: 150px; margin-left: 10px;"></i>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"><img src="../../estilo/imgs/logoUsuario.png" alt=""><?php echo $_SESSION['Email']?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            
          

            <li class="nav-item">
              <a href="../clientes/clientesView.php" class="nav-link">
              <img src="../editarPerfil/editarUsuarios.php" style="width: min-content;" alt="">
                <p>
                 Editar perfil
                </p>
              </a>
            </li>
           
           

            

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">