<?php
require_once('modelos/model_contactos.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="recursos/CSS/nav-bar.css">
    <link rel="stylesheet" type="text/css" href="recursos/CSS/home.css">
    <link rel="stylesheet" type="text/css" href="recursos/CSS/servicios.css">

    <link rel="stylesheet" href="recursos/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<style>

</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="rounded" src="modern-company-logo-design-vector.jpg" alt="Logo de tu sitio web" style="height: 80px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=Nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuestros Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <?php
                    if ((!empty($dtcontactos)) && (isset($dtcontactos))) {
                        $cc = 0;
                        foreach ($dtcontactos as $contac) :
                            if ($cc == 0) {
                                if ((!empty($contac['IdContacto'])) && (isset($contac['IdContacto']))) {
                                    echo '<li class="nav-item"><a class="nav-link" href="index.php?page=EdicionContacto&IdC=' . $contac["IdContacto"] . '">Editar datos de contacto</a></li>';
                                } else {
                                    echo '<li class="nav-item"><a class="nav-link" href="index.php?page=EdicionContacto">Editar datos de contacto</a></li>';
                                }
                            }
                            $cc++;
                        endforeach;
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="index.php?page=EdicionContacto">Editar datos de contacto</a></li>';
                    }
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="publicacionesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Publicaciones
                        </a>
                        <div class="dropdown-menu" aria-labelledby="publicacionesDropdown">
                            <a class="dropdown-item" href="index.php?page=ImgCarrusel">Imagenes de Carrusel</a>
                            <a class="dropdown-item" href="index.php?page=PublicacionesNosotros">Mision, Vision y Valores</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="administrarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrar servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="administrarDropdown">
                            <a class="dropdown-item" href="index.php?page=ServiciosAdmin">Lista de servicios</a>
                            <a class="dropdown-item" href="index.php?page=EdicionServicios">Edición Servicios</a>
                            <a class="dropdown-item" href="index.php?page=EvidenciasServicios">Evidencias</a>
                            <a class="dropdown-item" href="index.php?page=EdicionEvidencias">Agregar evidencia</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contenido de prueba para activar el scroll -->
    <!-- <div style="height: 1500px;">
        <p>Contenido de prueba</p>
    </div> -->

    <div class="mt-5">
        <main role="main" class="p-0">