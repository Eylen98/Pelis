<?php
        require_once(RUTA_APP."/view/inc/header.php");
        require_once(RUTA_APP."/view/inc/navbarVendedor.php");
        foreach ($datos as $usuario ) {
                  
?>
<div class="col-lg-10 px-5">
    <form action="<?php echo RUTA_URL ?>vendedor/ModificarUsuario/<?php echo $usuario->Id_usuario?>" method="post" class="form-group px-5">
        <h1 class="mt-3">Modificar datos</h1>
        <hr class="bg-danger">
        <div class="row">
            <div class="col-6">
                <label for="" class="mt-3">Nombre: </label>
                <input type="text" name="Nombre" value="<?php echo $usuario->Nombre ?>" required class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mt-3">Apellido: </label>
                <input type="text" name="Apellido" value="<?php echo $usuario->Apellido ?>" required class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mt-3">Direccion:</label>
                <input type="text" name="Direccion" value="<?php echo $usuario->Direccion ?>" required  class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mt-3">Correo:</label>
                <input type="email" name="Correo" value="<?php echo $usuario->Correo ?>" required  class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mt-3">Telefono:</label>
                <input type="text" name="Telefono" value="<?php echo $usuario->Telefono ?>" required  class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mt-3">T_identificacion:</label>
                <input type="text" name="T_identificacion" value="<?php echo $usuario->T_identificacion ?>" required  class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mt-3">N_identificacion:</label>
                <input type="text" name="N_identificacion" value="<?php echo $usuario->N_identificacion ?>" required  class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mt-3">Fecha de nacimiento:</label>
                <input type="date" name="Fecha_nacimiento" value="<?php echo $usuario->Fecha_nacimiento ?>" required  class="form-control">
            </div>
         
        </div>
            <div class="col-12 tamano">
            <button class="btn btn-danger bg-red">Actualizar datos</button>
            </div>
      
    </form>
    </div>
<?php
}
?>

<?php
    require_once(RUTA_APP."/view/inc/footer.php");
?>