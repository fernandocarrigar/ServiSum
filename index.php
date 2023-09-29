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
    case "EdicionClientes":
        include_once("vistas/users/admin/EdicionClientes.php");
        break;
    case "EdicionEvidencias":
        include_once("vistas/users/admin/EdicionEvidencias.php");
        break;
    case "EvidenciasServicios":
        include_once("vistas/users/admin/Evidencias.php");
        break;
    case "Nosotros":
        include_once("vistas/users/clientes/Nosotros.php");
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
    case "Clientes":
        include_once("vistas/users/admin/Clientes.php");
        break;
    case "ServiciosAdmin":
        include_once("vistas/users/admin/ServiciosAdmin.php");
        break;
    case "Servicios":
        include_once("vistas/users/clientes/Servicios.php");
        break;
    case "Login":
        include_once("vistas/template/login/login.php");
        break;
    default:
        include_once('vistas/home/Home.php');
        break;
}

require_once("vistas/template/footer/footer.php");
