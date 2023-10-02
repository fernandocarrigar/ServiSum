<?php
require_once("modelos/model_clientes.php");

if (isset($_GET['ins']) && $_GET['ins'] == "Ok") {
    echo '<script>alert("Se inserto correctamente");</script>';
} elseif (isset($_GET['upd']) && $_GET['upd'] == "Ok") {
    echo '<script>alert("Se actualizo correctamente");</script>';
} elseif (isset($_GET['del']) && $_GET['del'] == "Ok") {
    echo '<script>alert("Se elimino correctamente");</script>';
}
?>

<title>SSP - Clientes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    /* Por defecto (dispositivos pequeños), mostrar 1 elemento por fila */
    .clientes-row-cols>* {
        flex: 0 0 100%;
        max-width: 100%;
    }

    /* En pantallas ≥576px, mostrar 2 elementos por fila */
    @media (min-width: 576px) {
        .clientes-row-cols>* {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    /* En pantallas ≥768px, mostrar 3 elementos por fila */
    @media (min-width: 768px) {
        .clientes-row-cols>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }
    }

    /* En pantallas ≥992px, mostrar 4 elementos por fila */
    @media (min-width: 992px) {
        .clientes-row-cols>* {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    /* En pantallas ≥1200px, mostrar 5 elementos por fila */
    @media (min-width: 1200px) {
        .clientes-row-cols>* {
            flex: 0 0 20%;
            max-width: 20%;
        }
    }
</style>

<div class="container shadow-lg p-5 bg-dark-subtle rounded">

    <!-- Titulo de la vista -->
    <h1 class="text-center mb-5">Clientes para mostrar</h1>

    <div class="container p-4 bg-white rounded table-scroll" style="max-height: 1200px; overflow-y: auto;">
        <div class="row row-cols-1 clientes-row-cols g-4">
            <?php
            foreach ($dtclientes as $rows) :
            ?>
                <div class="col">
                    <div class="card h-100 shadow-sm rounded">
                        <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top p-3 rounded-top" />
                        <div class="card-body">
                            <h5 class="card-title mb-3"><?php echo $rows['Descripcion'] ?></h5>
                            <?php if (!empty($rows['UrlCliente']) && isset($rows['UrlCliente'])) : ?>
                                <p class="card-text mb-4"><?php echo $rows['UrlCliente']; ?></p>
                            <?php endif; ?>
                            <a href="index.php?page=EdicionClientes&IdC=<?php echo $rows['IdCliente'] ?>" class="btn btn-outline-success btn-sm me-2">Actualizar</a>
                            <a href="index.php?page=Clientes&IdC=<?php echo $rows['IdCliente'] ?>&actionclie=delete" class="btn btn-outline-danger btn-sm">Eliminar</a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>