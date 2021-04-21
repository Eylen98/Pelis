<?php
        require_once(RUTA_APP."/view/inc/header.php");
        require_once(RUTA_APP."/view/inc/navbarAdministrador.php");
        foreach ($datos as $usuario ) {
                  
?>
<div class="col-lg-10 px-5">
 <form action="<?php echo RUTA_URL ?>Administrador/ModificarEmpleado/<?php echo $usuario->Id_empleado?>" method="post" class="form-group px-5">
 <h1 class="mt-3">Modificar Usuario</h1>
 <hr class="bg-danger">
    <div class="row">
        <div class="col-lg-6">       
        <label for="" class="mt-3">Nombre: </label>
        <input type="text" name="Nombre" value="<?php echo $usuario->Nombre ?>" required class="form-control">
        </div>
        
        <div class="col-lg-6">
            <label for="" class="mt-3">Apellido: </label>
            <input type="text" name="Apellido" value="<?php echo $usuario->Apellido ?>"  required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Direccion:</label>
            <input type="text" name="Direccion" value="<?php echo $usuario->Direccion ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Correo:</label>
            <input type="email" name="Correo" value="<?php echo $usuario->Correo ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Telefono:</label>
            <input type="text" name="Telefono" value="<?php echo $usuario->Telefono ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Tipo de identificacion:</label>
            <input type="text" name="T_identificacion" value="<?php echo $usuario->T_identificacion ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">N_identificacion:</label>
            <input type="text" name="N_identificacion" value="<?php echo $usuario->N_identificacion ?>" required class="form-control">
        </div>
       
        <div class="col-lg-6">
        <label for="" class="mt-3">Estado:</label>
        <select name="Estado" id="" class="form-control">
            <option>Activo</option>
            <option >Inactivo</option>
        </select>
        </div>
        <div class="col-lg-12 tamano">
                <button class="btn btn-danger bg-red">Modificar Datos</button>
        </div>
      
        </div>  
       
    </form>
    </div>
<?php
}
?>
<?php
        require_once(RUTA_APP."/view/inc/footer.php");
?>