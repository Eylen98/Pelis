<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarVendedor.php");
?>
<div class="col-lg-10 px-5 ">
   
    <form action="<?php echo RUTA_URL?>vendedor/RegistroPeliculas" method="post" class="form-group px-5">
    <h1 class="mt-3">Registro de peliculas</h1>
    <hr class="bg-danger">
    <div class="row">
        <div class="col-6">
            <label for="">Nombre de la Pelicula :</label>
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre de la pelicula">
        </div>
        <div class="col-6">
            <label for="">Actor: </label>
            <input type="text" name="Actor" class="form-control" placeholder="Nombre del Actor">
        </div>
        <div class="col-6">
        <label for="">Duracion</label>
        <input type="text" name="Duracion" class="form-control" placeholder="Duracion pelicula">
        </div>
        <div class="col-6">
        <label for="">Genero</label>
        <select name="Id_genero" id="" class="form-control">
            <option value="">Seleccione ..</option>
            <option value="1">Accion</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
            
        </div>
    </div>
    <div class="col-12 tamano">
    <button class="btn bg-red btn-danger">Registrar Pelicula</button>   
    </div>
     
    </form>
    </div>
    <?php
        require_once(RUTA_APP."/view/inc/footer.php");
?>