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
    case "EdicionEvidencias":
        include_once("vistas/users/admin/EdicionEvidencias.php");
        break;
    case "EvidenciasServicios":
        include_once("vistas/users/admin/Evidencias.php");
        break;
    case "EdicionContacto":
        include_once("vistas/users/admin/EdicionFooter.php");
        break;
    case "EdicionImgCarrusel":
        include_once("vistas/users/admin/EdicionImgCarrusel.php");
        break;
    case "EdicionMision":
        include_once("vistas/users/admin/EdicionMision.php");
        break;
    case "EdicionVision":
        include_once("vistas/users/admin/EdicionVision.php");
        break;
    case "EdicionValores":
        include_once("vistas/users/admin/EdicionValores.php");
        break;
    case "PublicacionesNosotros":
        include_once("vistas/users/admin/PublicacionesNosotros.php");
        break;
    case "ImgCarrusel":
        include_once("vistas/users/admin/ImgCarrusel.php");
        break;
    case "EdicionServicios":
        include_once("vistas/users/admin/EdicionServicios.php");
        break;
    case "ServiciosAdmin":
        include_once("vistas/users/admin/ServiciosAdmin.php");
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
