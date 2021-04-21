<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarVendedor.php");
?>
<div class="col-lg-10  px-5">
    <h1 class="mt-2">Usuarios</h1>
      <table class="table">
            <tr class="text-center">
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Edad</td>
                <td>Config</td>
            </tr>
    
<?php
    foreach($datos['usuario'] as $usuario){
?>
             <tr class="text-center">
                <td><?php echo $usuario->Id_usuario ?></td>
                <td><?php echo $usuario->Nombre ?></td>
                <td><?php echo $usuario->Apellido ?></td>
                <td><?php echo $usuario->Direccion ?></td>
                <td><?php echo $usuario->Correo ?></td>
                <td><?php echo $usuario->Telefono ?></td>
                <td><?php echo $usuario->Id_usuario ?></td>
                <td>
                    <a href="<?php echo RUTA_URL ?>Vendedor/ModificarUsuario/<?php echo $usuario->Id_usuario ?>" class="btn bg-green text-white"><i class="fas fa-pencil-alt"></i></a>
                    
                
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
    