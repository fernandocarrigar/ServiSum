<?php
    require_once("modelos/model_archivos.php");
    require_once("modelos/model_publicaciones.php");

    if(isset($_GET['ins'])){
        if($_GET['ins'] == "Ok"){
            echo '<script>alert("Se inserto correctamente");</script>';
        }
    }elseif(isset($_GET['upd'])){
        if($_GET['upd'] == "Ok"){
            echo '<script>alert("Se actualizo correctamente");</script>';
        }
    }elseif(isset($_GET['del'])){
        if($_GET['del'] == "Ok"){
            echo '<script>alert("Se elimino correctamente");</script>';
        }
    }
?>



<div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:600px;">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                foreach($dtpub as $rows):
                    if($rows['Seccion'] === "ImagenesCarrusel"){
            ?>
            <div class="col">
                <div class="card h-100">
                    <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo(base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top" />
                    <div class="card-body overflow-auto shadow">
                        <h5 class="card-title"><?php echo $rows['Principal']?></h5>
                        <p class="card-text"><?php echo $rows['Secundario'] ?></p>
                        <div class="d-inline-flex">
                            <a href="index.php?page=EdicionPagina&Id=<?php echo $rows['IdPublic']?>&form=<?php echo $Seccion?>" class="btn btn-success btn-sm">
                                Actualizar
                            </a>
                        </div>
                        <div class="d-inline-flex">
                            <a href="index.php?page=ImgCarrusel&Id=<?php echo $rows['IdPublic']?>&actionpub=delete&Seccion=<?php echo $Seccion?>" class="btn btn-danger btn-sm">
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
