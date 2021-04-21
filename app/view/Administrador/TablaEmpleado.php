<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarAdministrador.php");
?>
    <div class="col-lg-10 px-5">
        <h1 class="mt-3">Usuarios </h1>
      <table class="table">
            <tr class="text-center">
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>T idenfiticacion</td>
                <td>N idenfiticacion</td>
                <td>Config</td>
            </tr>
    
<?php
    foreach($datos['empleado'] as $usuario){
?>
             <tr>
                <td><?php echo $usuario->Id_empleado ?></td>
                <td><?php echo $usuario->Nombre ?></td>
                <td><?php echo $usuario->Apellido ?></td>
                <td><?php echo $usuario->Direccion ?></td>
                <td><?php echo $usuario->Correo ?></td>
                <td><?php echo $usuario->Telefono ?></td>
                <td><?php echo $usuario->T_identificacion ?></td>
                <td><?php echo $usuario->N_identificacion ?></td>
                <td>
                    <a class="btn btn-success" href="<?php echo RUTA_URL ?>Administrador/ModificarEmpleado/<?php echo $usuario->Id_empleado ?>"><i class="fas fa-pencil-alt"></i></a>
                 
                </td>
            </tr>

<?php
    }
?>
    </table>
    </div>
<?php
    require_once(RUTA_APP."/view/inc/footer.php");

?>