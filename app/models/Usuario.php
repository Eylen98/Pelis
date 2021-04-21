<?php
    class Usuario{
        public $Conexion;
        public function __Construct(){
            $this->Conexion = new Base;
        }
        public function RegistroUsuario($datos){
            $this->Conexion->query("INSERT INTO `usuario`(`Id_usuario`, `Nombre`, `Apellido`, `Direccion`, `Correo`, `Telefono`, `T_identificacion`, `N_identificacion`, `Fecha_nacimiento`, `Estado`) VALUES (NULL, :Nombre, :Apellido, :Direccion, :Correo, :Telefono, :T_identificacion, :N_identificacion, :Fecha_nacimiento, :Estado)");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Apellido",$datos['Apellido']);
            $this->Conexion->bind(":Direccion",$datos['Direccion']);
            $this->Conexion->bind(":Correo",$datos['Correo']);
            $this->Conexion->bind(":Telefono",$datos['Telefono']);
            $this->Conexion->bind(":T_identificacion",$datos['T_identificacion']);
            $this->Conexion->bind(":N_identificacion",$datos['N_identificacion']);
            $this->Conexion->bind(":Fecha_nacimiento",$datos['Fecha_nacimiento']);
            $this->Conexion->bind(":Estado",$datos['Estado']);
       
            return $this->Conexion->execute();
             
        
        }
        public function ModificarUsuario($datos){
            $this->Conexion->query("UPDATE `usuario` SET `Nombre`=:Nombre,`Apellido`=:Apellido,`Direccion`=:Direccion,`Correo`=:Correo,`Telefono`=:Telefono,`T_identificacion`=:T_identificacion,`N_identificacion`=:N_identificacion,`Fecha_nacimiento`=:Fecha_nacimiento,`Estado`=:Estado WHERE Id_usuario =:Id");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Apellido",$datos['Apellido']);
            $this->Conexion->bind(":Direccion",$datos['Direccion']);
            $this->Conexion->bind(":Correo",$datos['Correo']);
            $this->Conexion->bind(":Telefono",$datos['Telefono']);
            $this->Conexion->bind(":T_identificacion",$datos['T_identificacion']);
            $this->Conexion->bind(":N_identificacion",$datos['N_identificacion']);
            $this->Conexion->bind(":Fecha_nacimiento",$datos['Fecha_nacimiento']);
            $this->Conexion->bind(":Estado",$datos['Estado']);
            $this->Conexion->bind(":Id",$datos['Id']);
            return $this->Conexion->execute();

        }
        public function TablaUsuario(){
            $this->Conexion->query("SELECT * FROM usuario where  Estado='Activo'");
            return $this->Conexion->registros();
        }
        public function SeleccionarUsuario($id){
            $this->Conexion->query("SELECT * FROM usuario where Id_usuario = :id");
            $this->Conexion->bind(":id",$id);
            return $this->Conexion->registro();

        }
    }
   


?>  