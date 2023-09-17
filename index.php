<?php

require_once("recursos/config/db.php");
require_once("vistas/navbar/navbar.php");

if ((!empty($_GET["page"])) && (isset($_GET["page"]))) {
    $page = $_GET["page"];
}
switch ($page) {
    case "servicios":
        include_once("vistas/users/servicios.php");
        break;
    default:
        include_once("vistas/home/Home.php");
        break;
}

require_once("vistas/footer/footer.php");
