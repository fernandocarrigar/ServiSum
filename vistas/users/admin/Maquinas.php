<?php
require_once("modelos/model_maquinas.php");

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


<div class="container shadow p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center">Maquinas que usamos</h1>
    <!-- Titulo de la vista -->

    <div class="container mt-3 p-3 bg-white overflow-auto table-scroll rounded" style="max-height:1200px;">
        <div class="row row-cols-1 row-cols-md-6 g-2">
            <?php
            foreach ($dtmaquinas as $rows):
                    ?>
                    <div class="col">
                        <div class="card hv-card">
                            <img src="data:<?php echo $rows['MimeType'] ?>;base64,<?php echo (base64_encode($rows['Archivo'])) ?>" alt="" class="card-img-top p-3" />
                            <div class="card-body overflow-auto">
                                <h5 class="card-title">
                                    <?php echo $rows['Descripcion'] ?>
                                </h5>
                                <!-- <span class="text-muted fs-6 m-2"><?php // echo $rows['TipoHerramienta']?></span><br/> -->
                                <div class="d-inline-flex">
                                    <a href="index.php?page=EdicionMaquinaria&IdQ=<?php echo $rows['IdMaquinaria'] ?>"
                                        class="btn btn-success btn-sm">
                                        Actualizar
                                    </a>
                                </div>
                                <div class="d-inline-flex">
                                    <a href="index.php?page=Maquinas&IdQ=<?php echo $rows['IdMaquinaria'] ?>&actionmaq=delete"
                                        class="btn btn-danger btn-sm">
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