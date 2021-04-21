<?php
    Class Administrador extends Controlador{
        public $empleado;
        public $usuario;
        public $alquiler;
        public $peliculas;
        public function __Construct(){
            session_start();
            $this->empleado =$this->modelo("Empleado");
            $this->peliculas= $this->modelo("Peliculas");
       
        }
        public function index(){
            $this->vista("Administrador/RegistroEmpleado");
        }
        public function RegistroEmpleado(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Apellido"=>rtrim($_POST['Apellido']),
                    "Direccion"=>rtrim($_POST['Direccion']),
                    "Correo"=>rtrim($_POST['Correo']),
                    "Telefono"=>rtrim($_POST['Telefono']),
                    "T_identificacion"=>rtrim($_POST['T_identificacion']),
                    "N_identificacion"=>rtrim($_POST['N_identificacion']),
                 
                    "Estado"=>rtrim("Activo"),
                    "Password"=>rtrim(password_hash($_POST['Password'],PASSWORD_DEFAULT)),
                    "Id_rol"=>rtrim(2)
                   

                ];
                if($this->empleado->RegistroEmpleado($datos)){
                    header("Location: ".RUTA_URL."/Administrador/TablaEmpleado");
                }
            }else{
                $this->vista("Administrador/RegistroEmpleado");
            }
        }
        public function TablaEmpleado(){
            $empleado= $this->empleado->TablaEmpleado();
            $datos=[
                "empleado"=>$empleado
            ];
            $this->vista("Administrador/TablaEmpleado",$datos);
            
        }
        public function ModificarEmpleado($id){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Apellido"=>rtrim($_POST['Apellido']),
                    "Direccion"=>rtrim($_POST['Direccion']),
                    "Correo"=>rtrim($_POST['Correo']),
                    "Telefono"=>rtrim($_POST['Telefono']),
                    "T_identificacion"=>rtrim($_POST['T_identificacion']),
                    "N_identificacion"=>rtrim($_POST['N_identificacion']),
                    "Estado"=>rtrim($_POST['Estado']),
                    "Id"=>rtrim($id)
                ];
                if($this->empleado->ModificarEmpleado($datos)){
                    header("Location: ".RUTA_URL."/Administrador/TablaEmpleado");
                }
            }else{
                $usuario = $this->empleado->SeleccionarEmpleado($id);
                $datos=[
                    "empleado"=>$usuario
                ];
                $this->vista("Administrador/ModificarEmpleado",$datos);
            }
        }
        public function HistorialPeliculas(){
        }
        public function HistorialUsuario(){
        }
        public function HistorialAlquiler(){
        }
        public function RegistroPeliculas(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Actor"=>rtrim($_POST['Actor']),
                    "Duracion"=>rtrim($_POST['Duracion']),
                    "Estado"=>rtrim("Activo"),
                    "Id_empleado"=>rtrim(4),
                    "Id_genero"=>rtrim($_POST['Id_genero']),
                ];
                if($this->peliculas->RegistroPeliculas($datos)){
                    header("Location: ".RUTA_URL."/Administrador/TablaPeliculas");
                }
            }else{
                $this->vista("Administrador/RegistroPeliculas");
            }
        }
        public function TablaPeliculas(){
            $peliculas =$this->peliculas->TablaPeliculas();
            $datos =[
                "peliculas"=>$peliculas
            ];  
            $this->vista("Administrador/TablaPeliculas",$datos);
        }
        public function ModificarPeliculas($id){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Actor"=>rtrim($_POST['Actor']),
                    "Duracion"=>rtrim($_POST['Duracion']),
                    "Estado"=>rtrim($_POST['Estado']),
                    "Id_genero"=>rtrim($_POST['Id_genero']),
                    "Id"=>rtrim($id)
                ];
                if($this->peliculas->ModificarPeliculas($datos)){
                    header("Location: ".RUTA_URL."/Administrador/TablaPeliculas");
                }
            }else{
                $pelicula = $this->peliculas->SeleccionarPeliculas($id);
                $datos=[
                    "pelicula"=>$pelicula
                ];
                $this->vista("Administrador/ModificarPeliculas",$datos);
            }

        }
        public function EstadoPelicula($id){
            if($this->peliculas->EstadoPeliculas($id)){
                die("echo");
            }else{

            }
        }
        
    }

?>