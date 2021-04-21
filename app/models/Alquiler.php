<?php
    class Alquiler{
        public $Conexion;
        public function __Construct(){
            $this->Conexion = new Base();
         

        }
        public function RegistroAlquiler($datos){
            $this->Conexion->query("SELECT Id_usuario FROM usuario where N_identificacion = :N_identificacion");
            $this->Conexion->bind("N_identificacion",$datos['Id_usuario']);
            $valor=$this->Conexion->registro();
            $this->Conexion->query("INSERT INTO `alquiler`(`Id_alquiler`, `Id_usuario`) VALUES (null, :Id_usuario)");
            $this->Conexion->bind(":Id_usuario",$valor->Id_usuario);
            $this->Conexion->execute();
            $id=$this->Conexion->lastId();
            $this->Conexion->query("INSERT INTO `detalle_alquiler`(`Id_detalle_alquiler`, `Id_alquiler`, `Id_pelicula`, `fecha_salida`) VALUES (null, :Id_alquiler, :Id_pelicula, :fecha_salida)");
            $this->Conexion->bind(":Id_alquiler",$id);
            $this->Conexion->bind(":Id_pelicula",$datos['Id_pelicula']);
            $this->Conexion->bind(":fecha_salida",$datos['fecha']);
            return $this->Conexion->execute();
          
        }
        public function HistorialPelicula($id){
            $this->Conexion->query("SELECT * FROM detalle_alquiler LEft join pelicula ON detalle_alquiler.Id_pelicula = pelicula.Id_pelicula left join alquiler on detalle_alquiler.Id_alquiler = alquiler.Id_alquiler left join usuario on alquiler.Id_usuario = usuario.Id_usuario where detalle_alquiler.Id_pelicula= :id");
            $this->Conexion->bind(":id",$id);
            return $this->Conexion->registros();
        
        }
    }


?>