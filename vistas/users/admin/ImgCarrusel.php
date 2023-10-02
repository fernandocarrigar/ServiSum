<?php
require_once("modelos/model_archivos.php");
require_once("modelos/model_publicaciones.php");

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
<title>SSP - Agregar Imágenes De Carrusel</title>

<div class="container shadow p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center">Imagenes del Carrusel</h1>
    <!-- Titulo de la vista -->
    <!-- Boton del navbar lateral -->
    <a class="btn btn-primary btn-lg d-relative m-4" href="index.php?page=EdicionImgCarrusel">
        Agregar publicacion
    </a>
    <!-- Boton del navbar lateral -->

    <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:600px;">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach ($dtpub as $rows) :
                if ($rows['Seccion'] === "ImagenesCarrusel") {
            ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top" />
                            <div class="card-body overflow-auto shadow">
                                <h5 class="card-title"><?php echo $rows['Principal'] ?></h5>
                                <p class="card-text"><?php echo $rows['Secundario'] ?></p>
                                <div class="d-inline-flex">
                                    <a href="index.php?page=EdicionImgCarrusel&Id=<?php echo $rows['IdPublic'] ?>" class="btn btn-success btn-sm">
                                        Actualizar
                                    </a>
                                </div>
                                <div class="d-inline-flex">
                                    <a href="index.php?page=ImgCarrusel&Id=<?php echo $rows['IdPublic'] ?>&actionpub=delete&Seccion=<?php echo $Seccion ?>" class="btn btn-danger btn-sm">
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
    </div>
</div>