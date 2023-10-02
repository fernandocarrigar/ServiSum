<?php
require_once("modelos/model_maquinas.php");

if (isset($_GET['ins'])) {
    if ($_GET['ins'] == "Ok") {
        echo '<script>alert("Se inserto correctamente");</script>';
    }
} elseif (isset($_GET['upd'])) {
    if ($_GET['upd'] == "Ok") {
        echo '<script>alert("Se actualizo correctamente");</script>';
    }
} elseif (isset($_GET['del'])) {
    if ($_GET['del'] == "Ok") {
        echo '<script>alert("Se elimino correctamente");</script>';
    }
}


?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    /* Por defecto (dispositivos pequeños), mostrar 1 elemento por fila */
    .maquinas-row-cols>* {
        flex: 0 0 100%;
        max-width: 100%;
    }

    /* En pantallas ≥576px, mostrar 2 elementos por fila */
    @media (min-width: 576px) {
        .maquinas-row-cols>* {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    /* En pantallas ≥768px, mostrar 3 elementos por fila */
    @media (min-width: 768px) {
        .maquinas-row-cols>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }
    }

    /* En pantallas ≥992px, mostrar 4 elementos por fila */
    @media (min-width: 992px) {
        .maquinas-row-cols>* {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    /* En pantallas ≥1200px, mostrar 5 elementos por fila */
    @media (min-width: 1200px) {
        .maquinas-row-cols>* {
            flex: 0 0 20%;
            max-width: 20%;
        }
    }
</style>
<title>SSP - Maquinas</title>
<div class="container shadow p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center">Maquinas que usamos</h1>
    <!-- Titulo de la vista -->

    <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:1200px;">
        <div class="row row-cols-1 maquinas-row-cols g-2">
            <?php
            foreach ($dtmaquinas as $rows) :
            ?>
                <div class="col">
                    <div class="card hv-card">
                        <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top p-3" />
                        <div class="card-body overflow-auto">
                            <h5 class="card-title">
                                <?php echo $rows['Descripcion'] ?>
                            </h5>
                            <!-- <span class="text-muted fs-6 m-2"><?php // echo $rows['TipoHerramienta']
                                                                    ?></span><br/> -->
                            <div class="d-inline-flex">
                                <a href="index.php?page=EdicionMaquinaria&IdQ=<?php echo $rows['IdMaquinaria'] ?>" class="btn btn-success btn-sm">
                                    Actualizar
                                </a>
                            </div>
                            <div class="d-inline-flex">
                                <a href="index.php?page=Maquinas&IdQ=<?php echo $rows['IdMaquinaria'] ?>&actionmaq=delete" class="btn btn-danger btn-sm">
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
    </div>


</div>