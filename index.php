<?php
// include_once("modelos/model_archivos.php");

require_once("recursos/config/db.php");
require_once("vistas/template/navbar/navbar.php");

if ((!empty($_GET['page']))  ||  (isset($_GET['page']))) {
    $page = $_GET['page'];
} else {
    $page = "";
}

switch ($page) {
    case "EdicionPagina":
        include_once("vistas/users/admin/Edicion.php");
        break;
    case "EdicionNosotros":
        include_once("vistas/users/admin/EdicionNosotros.php");
        break;
    case "PublicaiconesNosotros":
        include_once("vistas/users/admin/PublicacionesNosotros.php");
        break;
    case "Publicaciones":
        include_once("vistas/users/admin/Publicaciones.php");
        break;
    case "Servicios":
        include_once("vistas/users/clientes/Servicios.php");
        break;
    default:
    if ((!empty($_SERVER['REQUEST_URI'])) && (isset($_SERVER['REQUEST_URI']))) {
        $ruta = $_SERVER['REQUEST_URI'];
        if(str_contains($ruta,'/ServiSum/index.php?Login')){
            // echo('<script>location.replace("Vistas/Template/login/login.php")</script>');
            include_once("vistas/template/login/login.php");
        }elseif(str_contains($ruta,'/ServiSum/index.php?Login&error=')){
            $error = $_GET['error'];
            echo '<script>alert("'. $ruta .'");</script>';
            include_once("vistas/template/login/login.php");
        }else{
            include_once('vistas/home/Home.php');
        }
    }
    break;
}

require_once("vistas/template/footer/footer.php");
