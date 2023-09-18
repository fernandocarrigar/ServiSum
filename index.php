<?php
// include_once("modelos/model_archivos.php");

require_once("recursos/config/db.php");
require_once("vistas/navbar/navbar.php");

if ((!empty($_GET['page']))  ||  (isset($_GET['page']))) {
    $page = $_GET['page'];
} else {
    $page = "";
}

switch ($page) {
    case "servicios":
        include_once("vistas/users/servicios.php");
        break;
    default:
    if ((!empty($_SERVER['REQUEST_URI'])) && (isset($_SERVER['REQUEST_URI']))) {
        $ruta = $_SERVER['REQUEST_URI'];
        if(str_contains($ruta,'/ServiSum/index.php?Login')){
            // echo('<script>location.replace("Vistas/Template/login/login.php")</script>');
            include_once("vistas/login/login.php");
        }elseif(str_contains($ruta,'/ServiSum/index.php?Login&error=')){
            $error = $_GET['error'];
            echo '<script>alert("'. $ruta .'");</script>';
            include_once("vistas/login/login.php");
        }else{
            include_once('vistas/home/Home.php');
        }
    }
    break;
}

require_once("vistas/footer/footer.php");
