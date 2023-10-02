<?php

require_once("modelos/model_servicios.php");
require_once("modelos/model_evidencias.php");

?>

<title>SSP - Evidencias De Servicios</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    /* Por defecto (dispositivos pequeños), mostrar 1 elemento por fila */
    .evidencias-row-cols>* {
        flex: 0 0 100%;
        max-width: 100%;
    }

    /* En pantallas ≥576px, mostrar 2 elementos por fila */
    @media (min-width: 576px) {
        .evidencias-row-cols>* {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    /* En pantallas ≥768px, mostrar 3 elementos por fila */
    @media (min-width: 768px) {
        .evidencias-row-cols>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }
    }

    /* En pantallas ≥992px, mostrar 4 elementos por fila */
    @media (min-width: 992px) {
        .evidencias-row-cols>* {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    /* En pantallas ≥1200px, mostrar 5 elementos por fila */
    @media (min-width: 1200px) {
        .evidencias-row-cols>* {
            flex: 0 0 20%;
            max-width: 20%;
        }
    }

    /* En pantallas ≥1400px, mostrar 6 elementos por fila */
    @media (min-width: 1400px) {
        .evidencias-row-cols>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }
    }
</style>

<!-- Navbar lateral start-->

<!-- <div class="offcanvas offcanvas-start text-bg-white" id="demo">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Filtros</h1>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <span class="text-muted fs-6 mb-4">De clic en Seccion para ver los filtros</span>
        <form method="post" action="index.php?page=Publicaciones">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="" type="button" data-bs-toggle="collapse" data-bs-target="#seccion" aria-expanded="false" aria-controls="seccion">
                        Seccion
                    </a>
                    <div class="collapse mb-4" id="seccion">
                        <select name="Seccion" class="form-select form-select-sm">
                            <option selected disabled hidden>Seleccione una Seccion</option>
                            <option value="BGLOGO">Background & Logo</option>
                            <option value="ImagenesCarrusel">Imagenes de carrusel</option>
                            <option value="Publicidad">Publicidad</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-sm">Filtrar</button>
                </li>
            </ul>
        </form>
    </div>
</div> -->

<!-- Navbar lateral end-->

<div class="container shadow p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center">Evidencias de los servicios</h1>
    <!-- Titulo de la vista -->
    <!-- Boton del navbar lateral -->
    <!-- <button class="btn btn-primary btn-lg d-relative m-4" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
        Filtrar productos
    </button> -->
    <!-- Boton del navbar lateral -->


    <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:1200px;">
        <?php
        if ((isset($Servicio))) {
        ?>
            <div class="row row-cols-1 row-cols-md-6 g-2">
                <?php
                foreach ($dtevidencias as $rows) :
                    if ($rows['IdServicio'] === $Servicio) {
                ?>
                        <div class="col">
                            <div class="card hv-card">
                                <img src="data:<?php echo $rows['EvidenciaTipoImg'] ?>;base64,<?php echo (base64_encode($rows['EvidenciaImg'])) ?>" alt="" class="card-img-top p-3" />
                                <div class="card-body overflow-auto">
                                    <h5 class="card-title"><?php echo $rows['Servicio'] ?></h5>
                                    <p class="card-text"><?php echo $rows['Descripcion'] ?></p>
                                    <!-- <span class="text-muted fs-6 m-2"><?php // echo $rows['TipoHerramienta']
                                                                            ?></span><br/> -->
                                    <div class="d-inline-flex">
                                        <a href="index.php?page=EdicionCatalogos&Id=<?php echo $rows['IdEvidencia'] ?>&form=Productos" class="btn btn-success btn-sm">
                                            Actualizar
                                        </a>
                                    </div>
                                    <div class="d-inline-flex">
                                        <a href="index.php?page=Productos&Id=<?php echo $rows['IdEvidencia'] ?>&actionprod=delete" class="btn btn-danger btn-sm">
                                            Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                endforeach;
                ?>
            </div>
        <?php
        } else if (!isset($Servicio)) {
        ?>
            <div class="row justify-content-center">
                <!-- <p>En esta seccion, se podran ver los diferentes productos que existen en la pagina. <br />
                De igual manera hay un boton en la parte superior que permite el 
                <a class="underline" tabindex="-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">filtrado</a>
                 de los productos, de esta manera podra diferenciar sin importar cuantas tenga en el sitio web.
            </p> -->
            </div>
            <hr>
            <div class="row row-cols-1 evidencias-row-cols g-2">
                <?php
                foreach ($dtevidencias as $rows) :
                ?>
                    <div class="col">
                        <div class="card hv-card">
                            <img src="data:<?php echo $rows['EvidenciaTipoImg'] ?>;base64,<?php echo (base64_encode($rows['EvidenciaImg'])) ?>" alt="" class="card-img-top p-3" />
                            <div class="card-body overflow-auto">
                                <h5 class="card-title"><?php echo $rows['Servicio'] ?></h5>
                                <p class="card-text"><?php echo $rows['Descripcion'] ?></p>
                                <!-- <span class="text-muted fs-6 m-2"><?php //echo $rows['TipoHerramienta']
                                                                        ?></span><br/> -->
                                <div class="d-inline-flex">
                                    <a href="index.php?page=EdicionEvidencias&IdE=<?php echo $rows['IdEvidencia'] ?>" class="btn btn-success btn-sm">
                                        Actualizar
                                    </a>
                                </div>
                                <div class="d-inline-flex">
                                    <a href="index.php?page=EvidenciasServicios&IdE=<?php echo $rows['IdEvidencia'] ?>&actionevi=delete" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        <?php
        }
        ?>
    </div>


</div>