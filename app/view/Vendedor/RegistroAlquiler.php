<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarVendedor.php");
?>


    <div class="col-lg-10">
        <form action="<?php echo RUTA_URL ?>Vendedor/RegistroAlquiler/16" class="form-group" method="post">
            <input type="text" name="N_identificacion" require class="form-control">
            <button class="btn btn-danger bg-red">Alquilar</button>
        </form>
    </div>

<?php
    require_once(RUTA_APP."/view/inc/footer.php");

?>