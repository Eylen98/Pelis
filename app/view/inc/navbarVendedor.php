		<nav class="navbar navbar-dark bg-orange">
			<a href="" class="navbar-brand">
				Vendedor
			</a>
			<a href="" class="navbar-brand">
				Foparra
			</a>
			<a class="btn btn-danger" href="<?php echo RUTA_URL?>Paginas/CerrarSesion">Cerrar sesion</a>
		</nav>
		<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-2 menu pt-5">
			<a href="<?php echo RUTA_URL?>vendedor">Home</a>
				<a data-toggle="collapse" href="#usuario">Usuario</a>
				<div class="collapse" id="usuario">
					<a href="<?php echo RUTA_URL?>vendedor/TableUsuarios">Consultar Usuario</a>
					<a href="<?php echo RUTA_URL?>vendedor/RegistroUsuario">Insertar Usuario</a>
				</div>
				<a data-toggle="collapse" href="#pelicula">Pelicula</a>
				<div class="collapse" id="pelicula">
					<a href="<?php echo RUTA_URL?>vendedor/TablaPeliculas">Consultar Peliculas</a>
					<a href="<?php echo RUTA_URL?>vendedor/RegistroPeliculas">Insertar Peliculas</a>
				</div>
				
			</div>