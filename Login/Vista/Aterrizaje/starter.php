<!DOCTYPE html>
<html lang="en">
<?php
require_once("../templetes/header.php");
?>



</div>
<!-- /.content-header -->
<div class="container">
  <div class="card-text" style="background-color:#BDD5F7;text-align: center;">
    <h2>Hola! <img src="../../estilo/imgs/logoMano.png" alt=""></h2>
    <div class="box" style="margin:auto;width: 520px;">
      <p style="padding-bottom: 20px">Bienvenido</p>
    </div>
  </div>
</div>
<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-body" style="background-color:#D1FADE;">
            <h4 class="title">Monitorea tu catálogo <img src="../../estilo/imgs/logoCatalogoInicio.png" alt=""></h4>
            <p class="card-text">
              Administra tu catálogo.
            </p>
            <a href="../catalogo/catalogoView.php" class="card-link">Ir a catálogo</a>
            <a href="../productos/productosView.php" class="card-link">Listar productos</a>
          </div>
        </div><!-- /.card -->
      </div>
      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-body" style="background-color:#D1FADE;">
            <h4 class="title">Genera Reportes facilmente <img src="../../estilo/imgs/logopdf.png" alt=""></h4>
            <p class="card-text">
              Reportes de tu sistema.
            </p>
            <a download="usuarios.pdf" href="../Usuarios/pdf/reporteUsuarios.php" class="card-link">Usuarios</a>
            <a download="clientes.pdf" href="../clientes/pdf/reporteClientes.php" class="card-link">Clientes</a>
            <a download="Categorias.pdf" href="../categorias/pdf/reporteCategorias.php" class="card-link">Categorías</a>
            <a download="Proveedores.pdf" href="../proveedores/pdf/reporteProveedores.php" class="card-link">Proveedores</a>
            <a download="Porductos.pdf" href="../productos/pdf/reporteProductos.php" class="card-link">Productos</a>
          </div>
        </div><!-- /.card -->
      </div>
      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-body" style="background-color:#D1FADE;">
            <h4 class="title">Gestiona los pedidos <img src="../../estilo/imgs/logoPedidoInicio.png" alt=""></h4>
            <p class="card-text">
              Administra rapidamente los pedidos de tus clientes.
            </p>
            <a href="../pedidos/pedidosView.php" class="card-link">Listar pedidos</a>
            <a href="../pedidos/registrarPedido.php" class="card-link">Agregar un pedido</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-body" style="background-color:#D1FADE;">
            <h4 class="title">Gestiona las compras <img src="../../estilo/imgs/logoCompraInicio.png" alt=""></h4>
            <p class="card-text">
              Administra rapidamente las compras a tus proveedores.
            </p>
            <a href="../compras/comprasView.php" class="card-link">Listar compras</a>
            <a href="../compras/registrarCompra.php" class="card-link">Agregar una compra</a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->

  <?php
  require_once("../templetes/footer.php");
  ?>

</html>