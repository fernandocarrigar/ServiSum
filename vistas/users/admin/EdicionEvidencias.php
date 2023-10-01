<!-- Navbar lateral start-->

<?php
require_once("modelos/model_evidencias.php");
require_once("modelos/model_servicios.php");

if ((!empty($_GET["form"])) && (isset($_GET["form"]))) {
    $form = $_GET["form"];
} else {
    $form = null;
}
?>

<!-- Navbar lateral end-->

<div class="container p-5 justify-content-center bg-dark-subtle">

    <!-- Titulo de la vista -->
    <h1 class="text-center">Adjunte evidencias a sus servicios</h1>
    <!-- Titulo de la vista -->


    <?php
    if ((!empty($dteviwhere)) && (isset($dteviwhere))) {
        ?>
        <form method="post" action="index.php?page=EdicionEvidencias&actionevi=update&IdE=<?php echo $IdE ?>"
            enctype="multipart/form-data">
            <?php
    } else {
        ?>
            <form method="post" action="index.php?page=EdicionEvidencias&actionevi=insert" enctype="multipart/form-data">
                <?php
    }

    if (isset($dteviwhere)) {
        foreach ($dteviwhere as $rows):
            ?>
                    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                        <h3 class="text-center">
                            Evidencia del servicio
                        </h3>
                        <div class="form form-group m-3">
                            <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file"
                                placeholder="Inserte una imagen de producto" onchange="myimg()" />
                        </div>
                        <div class="form-floating m-3">
                            <input id="Descripcion" name="Descripcion" class="form-control"
                                value="<?php echo $rows['Descripcion'] ?>" type="text" placeholder="Descripcion del producto"
                                onload="valSel('Descipcion','IdServicio')" required />
                            <label for="Descripcion">Descripcion corta de la evidencia</label>
                        </div>
                        <div class="form-floating m-3">
                            <select id="IdServicio" name="IdServicio" class="form-select"
                                value="<?php echo $rows['IdServicio'] ?>" type="text" placeholder="Servicio al que pertenece"
                                required>
                                <option selected disabled hidden>Seleccione un servicio</option>
                                <?php
                                foreach ($dtservicio as $rowserv):
                                    ?>
                                    <option value="<?php echo $rowserv['IdServicio'] ?>">
                                        <?php echo $rowserv['Servicio'] ?>
                                    </option>
                                    <?php
                                endforeach;
                                ?>
                            </select>
                            <label for="IdServicio">Servicio al que pertenece</label>
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
                            Adjuntar evidencia
                        </button>
                    </div>
                    <?php
        endforeach;

    } else if (!isset($dtprodwhere)) {
        ?>
                    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                        <h3 class="text-center">
                        <?php echo $form ?>
                        </h3>
                        <div class="form form-group m-3">
                            <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file"
                                placeholder="Inserte una imagen de producto" onchange="myimg()" required />
                        </div>
                        <div class="form-floating m-3">
                            <input id="Descripcion" name="Descripcion" class="form-control" type="text"
                                placeholder="Descripcion del producto" required />
                            <label for="Descripcion">Descripcion corta de la evidencia</label>
                        </div>
                        <div class="form-floating m-3">
                            <select id="IdServicio" name="IdServicio" class="form-select" type="text"
                                placeholder="Servicio al que pertenece" required>
                                <option selected disabled hidden>Seleccione un servicio</option>
                                <?php
                                foreach ($dtservicio as $rowserv):
                                    ?>
                                    <option value="<?php echo $rowserv['IdServicio'] ?>">
                                    <?php echo $rowserv['Servicio'] ?>
                                    </option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                            <label for="IdServicio">Servicio al que pertenece</label>
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
                        Adjuntar evidencia
                        </button>
                    </div>
                <?php
    }
    ?>
        </form>
</div>