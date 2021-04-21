<?php

    require_once(RUTA_APP."/view/inc/header.php");

    //AUTO LOAD
    //require_once("lib/base.php");
    //require_once("lib/Controlador.php");
    //require_once("lib/Core.php");
  
    spl_autoload_register(function($nombreClase){
            require_once("lib/".$nombreClase.".php");
    });
    
   

?>