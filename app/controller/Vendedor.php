<?php
    class Vendedor extends Controlador{
        public $usuario;
        public $alquiler;
        public $peliculas;
        public function __Construct(){
            session_start();
            $this->usuario=$this->modelo("Usuario");
            $this->peliculas= $this->modelo("Peliculas");
            $this->alquiler= $this->modelo("Alquiler");
            if(!isset($_SESSION['Empleado'])){
                header("Location: ".RUTA_URL."/Paginas/index");
            }
            
        }
        public function index(){
            $this->vista("Vendedor/RegistroUsuario");
        }
        public function TableUsuarios(){
            $valor=$this->usuario->TablaUsuario();
            $datos=[
                "usuario"=>$valor
            ];
            $this->vista("Vendedor/TableUsuarios",$datos);
        }
        public function RegistroUsuario(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Apellido"=>rtrim($_POST['Apellido']),
                    "Direccion"=>rtrim($_POST['Direccion']),
                    "Correo"=>rtrim($_POST['Correo']),
                    "Telefono"=>rtrim($_POST['Telefono']),
                    "T_identificacion"=>rtrim($_POST['T_identificacion']),
                    "N_identificacion"=>rtrim($_POST['N_identificacion']),
                    "Fecha_nacimiento"=>rtrim($_POST['Fecha_nacimiento']),
                    "Estado"=>rtrim("Activo")
                   

                ];
                if($this->usuario->RegistroUsuario($datos)){
                    header("Location: ".RUTA_URL."/Vendedor/TableUsuario");
                }
            }else{
                $this->vista("Vendedor/RegistroUsuario");
            }
        }
        public function ModificarUsuario($id){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Nombre"=>rtrim($_POST['Nombre']),
                    "Apellido"=>rtrim($_POST['Apellido']),
                    "Direccion"=>rtrim($_POST['Direccion']),
                    "Correo"=>rtrim($_POST['Correo']),
                    "Telefono"=>rtrim($_POST['Telefono']),
                    "T_identificacion"=>rtrim($_POST['T_identificacion']),
                    "N_identificacion"=>rtrim($_POST['N_identificacion']),
                    "Fecha_nacimiento"=>rtrim($_POST['Fecha_nacimiento']),
                    "Estado"=>rtrim("Activo"),
                    "Id"=>rtrim($id)
                ];
                if($this->usuario->ModificarUsuario($datos)){
                    header("Location: ".RUTA_URL."/Vendedor/TableUsuario");
                }
            }else{
                $usuario = $this->usuario->SeleccionarUsuario($id);
                $datos=[
                    "usuario"=>$usuario
                ];
                $this->vista("Vendedor/ModificarUsuario",$datos);
            }
        }
        public function RegistroAlquiler($id){
            
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "Id_usuario"=>$_POST['N_identificacion'],
                    "Id_pelicula"=>$id,
                    "fecha"=>date("Y-m-d")
                ];
                if($this->alquiler->RegistroAlquiler($datos)){
                    header("Location: ".RUTA_URL."/Vendedor/TablaPeliculas");
                }
            }else{
                $peliculas=$this->peliculas->SeleccionarPeliculas($id);
                $datos=[
                    "peliculas"=>$peliculas
                ];
                $this->vista("Vendedor/RegistroAlquiler",$datos);
            }
           
        }
        public function Devolucion(){
        }
        public function HistorialPelicula($id){
            $peliculas=$this->alquiler->HistorialPelicula($id);
            $datos=[
                "peliculas"=>$peliculas
            ];
            $this->vista("Vendedor/HistorialPelicula",$datos);
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
                    "Id_empleado"=>rtrim(5),
                    "Id_genero"=>rtrim($_POST['Id_genero']),
                ];
                if($this->peliculas->RegistroPeliculas($datos)){
                    header("Location: ".RUTA_URL."/Vendedor/TablaPeliculas");
                }
            }else{
                $this->vista("Vendedor/RegistroPeliculas");
            }
        }
        public function TablaPeliculas(){
            $peliculas =$this->peliculas->TablaPeliculas();
            $datos =[
                "peliculas"=>$peliculas
            ];  
            $this->vista("vendedor/TablaPeliculas",$datos);
        }
      
    }