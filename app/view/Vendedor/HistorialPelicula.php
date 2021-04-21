<?php
        require_once(RUTA_APP."/view/inc/header.php");
        require_once(RUTA_APP."/view/inc/navbarVendedor.php");

?>
      <div class="col-lg-10 px-5">
      <h1 class="mt-3">Historial de Pelicula</h1>
      <table class="table px-5">
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Duracion</td>
                    <td>fecha salida</td>
                    <td>Estado</td>
                    
                </tr>
<?php
        foreach ($datos['peliculas'] as $pelicula) {
                  
?>
          <tr>
              <td><?php echo $pelicula->Id_pelicula ?></td>
             
              <td><?php echo $pelicula->Nombre ?></td>
              <td><?php echo $pelicula->Apellido ?></td>
              <td><?php echo $pelicula->Duracion ?></td>
              <td><?php echo $pelicula->fecha_salida ?></td>
              <td><?php echo $pelicula->Estado ?></td>
          </tr>
        
            







<?php
        }

?>

</div>
</table>

<?php
    require_once(RUTA_APP."/view/inc/footer.php");
?>