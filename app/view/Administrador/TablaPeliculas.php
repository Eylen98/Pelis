<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarAdministrador.php");
?>
<div class="col-lg-10 px-5">
    <h1 class="mt-3">Peliculas</h1>
    <table class="table px-5">
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
                <button class="btn  btn-info"><i class="fas fa-file-alt"></i></button>
                <a class="btn  btn-success bg-green" href="<?php echo RUTA_URL ?>Administrador/ModificarPeliculas/<?php echo $peliculas->Id_pelicula?>"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn  btn-danger bg-red" href="<?php echo RUTA_URL ?>Administrador/EstadoPelicula/<?php echo $peliculas->Id_pelicula?>"><i class="fas fa-times"></i></a>

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