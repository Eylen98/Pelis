<?php
 require_once(RUTA_APP."/view/inc/header.php");
 require_once(RUTA_APP."/view/inc/navbarVendedor.php");

?>
    <div class="col-lg-8 ml-5 pl-5">
        <h1 class="mt-3">Registro usuario</h1>
        <hr class="bg-danger">
        <form action="<?php echo RUTA_URL ?>vendedor/RegistroUsuario" method="post" class="form-group">
        <div class="row">
            <div class="col-lg-6 mt-3">
                <label for="">Nombre: </label>
                <input type="text" name="Nombre" required class="form-control" placeholder="Nombre">
            </div>
            <div class="col-lg-6 mt-3">
                <label for="" >Apellido: </label>
                <input type="text" name="Apellido" required class="form-control" placeholder="Apellido">
            </div>
            <div class="col-lg-6 mt-3">
                <label for="">Direccion:</label>
                <input type="text" name="Direccion" required class="form-control" placeholder="Direccion">  
            </div>
            <div class="col-lg-6 mt-3">
                <label for="">Correo:</label>
                <input type="email" name="Correo" required class="form-control" placeholder="Correo Electronico">
            </div> 
            <div class="col-lg-6 mt-3">
                <label for="">Telefono:</label>
                <input type="text" name="Telefono" required class="form-control" placeholder="Telefono">
            </div> 
            <div class="col-lg-6 mt-3">
                <label for="" >Tipo de identificacion:</label>
                <select name="T_identificacion" required class="form-control" >
                        <option value="">Seleccione ...</option>
                    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
              
                </select>
            </div> 
            <div class="col-lg-6 mt-3">
                <label for="">Numero de identificacion:</label>
                <input type="text" name="N_identificacion" required class="form-control" placeholder="Numero de identificacion"> 
            </div> 
            <div class="col-lg-6 mt-3">
                <label for="">Fecha de nacimiento:</label>
                <input type="date" name="Fecha_nacimiento" required class="form-control">
            </div>
            <div class="col-lg-12">  
                <div class="tamano">
                    <button class="btn btn-danger bg-red">Registrar Usuario</button>
                </div>
            </div>
        </div>
        </form>

</div>
<?php
     require_once(RUTA_APP."/view/inc/footer.php");

?>