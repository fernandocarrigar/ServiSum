<?php
require_once('modelos/model_contactos.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="recursos/CSS/nav-bar.css">

    <link rel="stylesheet" href="recursos/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <nav class="custom-navbar">
        <div class="logo">
            <img class="rounded" src="modern-company-logo-design-vector.jpg" alt="Logo de tu sitio web" style="height: 100%; width: auto;">
        </div>

        <ul class="custom-navbar-list">
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="index.php">Inicio</a></li>
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="index.php?page=Servicios">Servicios</a></li>
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="index.php?page=Nosotros">Nosotros</a></li>
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="#">Nuestros Clientes</a></li>
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="#">Contacto</a></li>
            <?php
            if ((!empty($dtcontactos)) && (isset($dtcontactos))) {
                $cc = 0;
                foreach ($dtcontactos as $contac) :
                    if ($cc == 0) {
                        if ((!empty($contac['IdContacto'])) && (isset($contac['IdContacto']))) {
                            echo '<li class="custom-navbar-item"><a class="custom-navbar-link" href="index.php?page=EdicionContacto&IdC=' . $contac["IdContacto"] . '">Editar datos de contacto</a></li>';
                        } else {
                            echo '<li class="custom-navbar-item"><a class="custom-navbar-link" href="index.php?page=EdicionContacto">Editar datos de contacto</a></li>';
                        }
                    }
                    $cc++;
                endforeach;
            }else{
                echo '<li class="custom-navbar-item"><a class="custom-navbar-link" href="index.php?page=EdicionContacto">Editar datos de contacto</a></li>';
            }
            ?>
            <li class="custom-navbar-item dropdown">
                <a class="custom-navbar-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                    Publicaciones
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="index.php?page=ImgCarrusel">Imagenes de Carrusel</a></li>
                    <li><a class="dropdown-item" href="index.php?page=PublicacionesNosotros">Mision, Vision y Valores</a></li>
                </ul>

            </li>
            <li class="custom-navbar-item dropdown">
                <a class="custom-navbar-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                    Administrar servicios
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="index.php?page=ServiciosAdmin">Lista de servicios</a></li>
                    <li><a class="dropdown-item" href="index.php?page=EdicionServicios">Edición Servicios</a></li>
                    <li><a class="dropdown-item" href="index.php?page=EvidenciasServicios">Evidencias</a></li>
                    <li><a class="dropdown-item" href="index.php?page=EdicionEvidencias">Agregar evidencia</a></li>
                </ul>

            </li>

        </ul>
    </nav>

    <!-- Contenido de prueba para activar el scroll -->
    <!-- <div style="height: 1500px;">
        <p>Contenido de prueba</p>
    </div> -->

    <div class="mt-5">
        <main role="main" class="p-0">