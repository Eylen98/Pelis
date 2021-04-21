<?php
    class Empleado{
        public $Conexion;
        public function __Construct(){
            $this->Conexion = new Base();
        }
        public function Login($datos){
            $this->Conexion->query("SELECT * FROM empleado where N_identificacion=:N_identificacion");
            $this->Conexion->bind(":N_identificacion",$datos['N_identificacion']);
            return $this->Conexion->registro();
        }
        public function RegistroEmpleado($datos){
            $this->Conexion->query("INSERT INTO `empleado`(`Id_empleado`, `Nombre`, `Apellido`, `Direccion`, `Correo`, `Telefono`, `T_identificacion`, `N_identificacion`,  `Estado`, `Password`, `Id_rol`) VALUES (NULL, :Nombre, :Apellido, :Direccion, :Correo, :Telefono, :T_identificacion, :N_identificacion,  :Estado, :Password, :Id_rol)");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Apellido",$datos['Apellido']);
            $this->Conexion->bind(":Direccion",$datos['Direccion']);
            $this->Conexion->bind(":Correo",$datos['Correo']);
            $this->Conexion->bind(":Telefono",$datos['Telefono']);
            $this->Conexion->bind(":T_identificacion",$datos['T_identificacion']);
            $this->Conexion->bind(":N_identificacion",$datos['N_identificacion']);
            $this->Conexion->bind(":Estado",$datos['Estado']);
            $this->Conexion->bind(":Password",$datos['Password']);
            $this->Conexion->bind(":Id_rol",$datos['Id_rol']);

       
            return $this->Conexion->execute();
             
        }
        public function TablaEmpleado(){
            $this->Conexion->query("SELECT * FROM empleado inner join rol on empleado.Id_rol = rol.Id_rol");
            return $this->Conexion->registros();
        }
        public function ModificarEmpleado($datos){
            $this->Conexion->query("UPDATE `empleado` SET `Nombre`=:Nombre,`Apellido`=:Apellido,`Direccion`=:Direccion,`Correo`=:Correo,`Telefono`=:Telefono,`T_identificacion`=:T_identificacion,`N_identificacion`=:N_identificacion,`Estado`=:Estado WHERE Id_empleado =:Id");
            $this->Conexion->bind(":Nombre",$datos['Nombre']);
            $this->Conexion->bind(":Apellido",$datos['Apellido']);
            $this->Conexion->bind(":Direccion",$datos['Direccion']);
            $this->Conexion->bind(":Correo",$datos['Correo']);
            $this->Conexion->bind(":Telefono",$datos['Telefono']);
            $this->Conexion->bind(":T_identificacion",$datos['T_identificacion']);
            $this->Conexion->bind(":N_identificacion",$datos['N_identificacion']);
            $this->Conexion->bind(":Estado",$datos['Estado']);
            $this->Conexion->bind(":Id",$datos['Id']);
            return $this->Conexion->execute();
        }
        public function SeleccionarEmpleado($id){
            $this->Conexion->query("SELECT * FROM empleado where Id_empleado=:id");
            $this->Conexion->bind(":id",$id);
            return $this->Conexion->registro();
        }

    }


?>