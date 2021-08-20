<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../../estilos/css/bootstrap.min.css">
<link rel="stylesheet" href="../dist/css/adminlte.css">
<link rel="stylesheet" href="../../estilos/css/fontawesome.min.css">
<link rel="stylesheet" href="../../estilos/css/login.css">
<link rel="stylesheet" href="../../estilos/style.css">

<div class="container-fluid col-5 bg-white p-4">
  <h3 class="text-center">Registrar usuario</h3>
  <hr>

  <form action="../../Controlador/usuariosController.php" Method="POST" name="registroUsuario" id="registroUsuario">
    <div class="form-group">
      <label class="">Nombre</label>
      <input type="text" class="form-control " id="nombreUsuario" name="nombreUsuario" placeholder="correo">

    </div>

    <div class="form-group">
      <label class="">Correo</label>
      <input type="text" class="form-control " id="correoUsuario" name="correoUsuario" placeholder="correo">

    </div>

    <div class="form-group">
      <label class="">Contraseña</label>
      <input type="text" class="form-control " id="contrasenaUsuario" name="contrasenaUsuario" placeholder="Usuario">
    </div>


    <div class="container">
      <div class="row justify-content-end">
        <a href="../Login/login.php" class="btn btn-light">Cancelar</a>&nbsp; &nbsp;
        <button type="submit" id="registrarUsuario" name="registrarUsuario" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </form>
</div>


<script src="../assets/js/users.js"></script>
<script src="../assets/js/usuarios.js"></script>

</html>