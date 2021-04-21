<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarVendedor.php");
?>
<div class="col-lg-10 px-5">
    <h1 class="mt-3">Peliculas</h1>
    <table class="table">
        <tr class="text-center">
            <td>Id</td>
            <td>Nombre</td>
            <td>Actor</td>
            <td>duracion</td>
            <td>genero</td>
            <td>Config</td>
        </tr>
<?php
    foreach ($datos['peliculas'] as $peliculas) {
?>
        <tr class="text-center">
            <td><?php echo $peliculas->Id_pelicula ?></td>
            <td><?php echo $peliculas->Nombre ?></td>
            <td><?php echo $peliculas->Actor ?></td>
            <td><?php echo $peliculas->Duracion ?></td>
            <td><?php echo $peliculas->Genero ?></td>
            <td>
                <a href="<?php echo RUTA_URL ?>Vendedor/HistorialPelicula/<?php echo $peliculas->Id_pelicula?>" class="btn btn-info "><i class="fas fa-file-alt"></i></a>
                <a href="<?php echo RUTA_URL ?>Vendedor/RegistroAlquiler/<?php echo $peliculas->Id_pelicula?>" class="btn btn-warning text-white"><i class="fas fa-compact-disc"></i></a>
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