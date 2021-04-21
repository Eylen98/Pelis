

<nav class="navbar navbar-dark bg-orange">
			<a href="" class="navbar-brand">
				Administrador
			</a>
			<a href="" class="navbar-brand">
				Foparra
			</a>
			<a href="<?php echo RUTA_URL?>Paginas/CerrarSesion" class="btn btn-danger">Cerrar sesion</a>
		</nav>
		<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-2 menu pt-5">
			<a href="<?php echo RUTA_URL?>Administrador">Home</a>
				<a data-toggle="collapse" href="#usuario">Empleado</a>
				<div class="collapse" id="usuario">
					<a href="<?php echo RUTA_URL?>Administrador/TablaEmpleado">Consultar Empleado</a>
                    <a href="<?php echo RUTA_URL?>Administrador/RegistroEmpleado">Insertar Empleado</a>
				</div>
				<a data-toggle="collapse" href="#pelicula">Pelicula</a>
				<div class="collapse" id="pelicula">
					<a href="<?php echo RUTA_URL?>Administrador/TablaPeliculas">Consultar Peliculas</a>
					<a href="<?php echo RUTA_URL?>Administrador/RegistroPeliculas">Insertar Peliculas</a>
				</div>
				
			</div>