<?php
    class Paginas extends Controlador{
        public $empleado;
        public function __Construct(){
           $this->empleado=$this->modelo("Empleado");
            
            
        }
        public function index(){

            if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "N_identificacion"=>rtrim($_POST['N_identificacion']),
                    "Password"=>rtrim($_POST['Password'])
                ];
            
                if($empleado=$this->empleado->Login($datos)){
                    if(password_verify($_POST['Password'],$empleado->Password)){
                        if($empleado->Id_rol==1){
                            session_start();
                        $_SESSION['Administrador'] = $empleado->Id_empleado;
                        echo json_encode(array("error"=>$empleado->Id_rol));
                        }else if($empleado->Id_rol==2){
                            session_start();
                            $_SESSION['Empleado'] = $empleado->Id_empleado;
                            echo json_encode(array("error"=>$empleado->Id_rol));
                        }else{
                            echo "error";
                        }
                        
                    }

                }
            }else{
                $this->vista("Paginas/home");
            }
            

        }
        public function CerrarSesion(){
            session_start();
            session_destroy();
            header("Location: ".RUTA_URL."/Paginas/index");
        }

        
      
    }

?>