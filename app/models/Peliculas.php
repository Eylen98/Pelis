<?php
    class Peliculas{
        public $Conexion;
        public function __Construct(){
            $this->Conexion= new Base();

        }
        public function RegistroPeliculas($datos){
            $this->Conexion->query("INSERT INTO `pelicula`(`Id_pelicula`, `Nombre`, `Actor`, `Duracion`, `Estado`, `Id_empleado`, `Id_genero`) VALUES (null, :Nombre, :Actor, :Duracion, :Estado, :Id_empleado, :Id_genero)");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Actor",$datos['Actor']);
            $this->Conexion->bind(":Duracion",$datos['Duracion']);
            $this->Conexion->bind(":Estado",$datos['Estado']);
            $this->Conexion->bind(":Id_empleado",$datos['Id_empleado']);
            $this->Conexion->bind(":Id_genero",$datos['Id_genero']);
            return $this->Conexion->execute();
        }
        public function ModificarPeliculas($datos){
            $this->Conexion->query("UPDATE `pelicula` SET `Nombre`=:Nombre ,`Actor`=:Actor,`Duracion`=:Duracion,`Estado`=:Estado ,`Id_genero`=:Id_genero WHERE `Id_pelicula` = :Id");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Actor",$datos['Actor']);
            $this->Conexion->bind(":Duracion",$datos['Duracion']);
            $this->Conexion->bind(":Estado",$datos['Estado']);            
            $this->Conexion->bind(":Id_genero",$datos['Id_genero']);
            $this->Conexion->bind(":Id",$datos['Id']);
            return $this->Conexion->execute();

        }
        public function EstadoPeliculas($id){
            $this->Conexion->query("UPDATE `pelicula` SET `Estado`=:Estado where Id_pelicula=:Id");
            $this->Conexion->bind(":Estado","Inactivo");
            $this->Conexion->bind(":Id",$id);
            return  $this->Conexion->execute();
            

        }
        public function TablaPeliculas(){
            $this->Conexion->query("SELECT * FROM pelicula inner join genero on pelicula.Id_genero = genero.Id_genero where Estado = 'Activo'");
            return $this->Conexion->registros();
        }
        public function SeleccionarPeliculas($id){
            $this->Conexion->query("SELECT * FROM pelicula WHERE Id_pelicula=:id");
            $this->Conexion->bind(":id",$id);
            return $this->Conexion->registro();
        }
       
    }

?>