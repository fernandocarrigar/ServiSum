<!-- Navbar lateral start-->

<?php
require_once("Modelos/model_archivos.php");
require_once("Modelos/model_publicaciones.php");


?>
<title>SSP - Editar Visión</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Navbar lateral end-->

<div class="container p-5 justify-content-center bg-dark-subtle">

    <?php
    if ((!empty($dtpubwhere)) && (isset($dtpubwhere))) {
    ?>
        <form method="post" action="index.php?page=EdicionVision&actionpub=update&Id=<?php echo $Id ?>" enctype="multipart/form-data">
        <?php
    } else {
        ?>
            <form method="post" action="index.php?page=EdicionVision&actionpub=insert" enctype="multipart/form-data">
                <?php
            }

            if (isset($dtpubwhere)) {
                foreach ($dtpubwhere as $rows) :
                ?>
                    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                        <h3 class="text-center">Publicacion para "Vision"</h3>
                        <div class="form-floating m-3">
                            <input id="Principal" name="Principal" class="form-control" value="<?php echo $rows['Principal'] ?>" type="text" placeholder="Titulo" hidden />
                        </div>
                        <div class="form-floating m-3">
                            <textarea id="Secundario" name="Secundario" class="form-control" value="<?php echo $rows['Secundario'] ?>" rows="4" placeholder="Descripcion" style="height: 300px;"><?php echo $rows['Secundario'] ?></textarea>
                            <label for="Secundario">Parrafo</label>
                        </div>
                        <input id="Seccion" name="Seccion" value="Vision" hidden />
                    </div>
                    <div class="container ms-auto me-auto mt-4">
                        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                    </div>
                <?php
                endforeach;
            } else if (!isset($dtpubwhere)) {
                ?>
                <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-2 bg-white">
                    <h3 class="text-center">Publicacion para "Vision"</h3>
                    <div class="form-floating m-3">
                        <input id="Principal" name="Principal" class="form-control" type="text" placeholder="Titulo" hidden />
                    </div>
                    <div class="form-floating m-3">
                        <textarea id="Secundario" name="Secundario" class="form-control" rows="4" placeholder="Descripcion" style="height: 300px;"></textarea>
                        <label for="Secundario">Parrafo</label>
                    </div>
                    <input id="Seccion" name="Seccion" value="Vision" hidden />
                </div>
                <div class="container ms-auto me-auto mt-4">
                    <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                </div>
            <?php
            }
            ?>
            </form>
</div>