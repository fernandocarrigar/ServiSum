<!-- Navbar lateral start-->

<?php
require_once("modelos/model_maquinas.php");
?>

<!-- Navbar lateral end-->

<div class="container p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center"></h1>
    <!-- Titulo de la vista -->


    <?php
    if ((!empty($dtmaquinawhere)) && (isset($dtmaquinawhere))) {
        ?>
        <form method="post" action="index.php?page=EdicionMaquinaria&actionmaq=update&IdQ=<?php echo $IdQ ?>"
            enctype="multipart/form-data">
            <?php
    } else {
        ?>
            <form method="post" action="index.php?page=EdicionMaquinaria&actionmaq=insert" enctype="multipart/form-data">
                <?php
    }

    if (isset($dtmaquinawhere)) {
        foreach ($dtmaquinawhere as $rows):
            ?>
                    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                        <h3 class="text-center">
                        Maquinaria que utilizamos
                        </h3>
                        <div class="form form-group m-3">
                        <label for="Archivo" class="form-label">Imagen de la maquinaria:</label>
                            <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file"
                                placeholder="Inserte el logo del cliente" onchange="myimg()"/>
                            <span class="text-muted">(Imagen de la maquinaria)</span>
                        </div>
                        <div class="form-floating m-3">
                            <input id="Descripcion" name="Descripcion" class="form-control"
                                value="<?php echo $rows['Descripcion'] ?>" type="text" placeholder="Descripcion del cliente" required />
                            <label for="Descripcion">Nombre de la maquinaria</label>
                        </div>
                    </div>
                    <div class="card border-0 justify-content-center m-5 rounded-1 ms-1 me-4 bg-white">
                        <div class=" img-thumbnail rounded ms-auto me-auto mt-auto mb-auto">
                            <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada"
                                style="max-width:400px;max-height:300px;" />
                        </div>
                    </div>

                    <div class="container ms-auto me-auto mt-4">
                        <button type="submit" class="btn btn-success btn-lg">
                            Guardar maquina
                        </button>
                    </div>
                    <?php
        endforeach;

    } else if (!isset($dtprodwhere)) {
        ?>
                    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                        <h3 class="text-center">
                        Maquinaria que utilizamos
                        </h3>
                        <div class="form form-group m-3">
                            <label for="Archivo" class="form-label">Imagen de la maquinaria:</label>
                            <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file"
                                placeholder="Inserte el logo del cliente" onchange="myimg()" required />
                            <span class="text-muted">(Imagen de la maquinaria)</span>
                        </div>
                        <div class="form-floating m-3">
                            <input id="Descripcion" name="Descripcion" class="form-control" type="text"
                                placeholder="Descripcion del cliente" required />
                            <label for="Descripcion">Nombre de la maquinaria</label>
                        </div>
                    </div>
                    <div class="card border-0 justify-content-center m-5 rounded-1 ms-1 me-4 bg-white">
                        <div class=" img-thumbnail rounded ms-auto me-auto mt-auto mb-auto">
                            <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada"
                                style="max-width:400px;max-height:300px;" />
                        </div>
                    </div>
                    <div class="container ms-auto me-auto mt-4">
                        <button type="submit" class="btn btn-success btn-lg">
                            Guardar maquina
                        </button>
                    </div>
                <?php
    }
    ?>
        </form>
</div>