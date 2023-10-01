<!-- Navbar lateral inclusion -->
<?php require_once("modelos/model_clientes.php"); ?>

<title>SSP - Edición de Clientes</title>

<div class="container p-5 justify-content-center bg-dark-subtle">

    <!-- Title Section -->
    <h1 class="text-center mb-5">Edición de Clientes</h1>

    <!-- Determine the Form Action -->
    <?php
    if (isset($dtclientewhere)) {
        echo '<form method="post" enctype="multipart/form-data" action="index.php?page=EdicionClientes&actionclie=update&IdC=' . $IdC . '">';
    } else {
        echo '<form method="post" enctype="multipart/form-data" action="index.php?page=EdicionClientes&actionclie=insert">';
    }
    ?>

    <!-- Client Details -->
    <div class="container-sm justify-content-center rounded-1 ms-auto me-auto p-4 bg-white">
        <h3 class="text-center mb-4">Cliente con el que trabajamos.</h3>

        <div class="form-group m-3">
            <label for="Archivo" class="form-label">Logo del cliente:</label>
            <input id="Archivo" name="Archivo" class="form-control form-control-lg" type="file" placeholder="Inserte el logo del cliente" onchange="myimg()" <?php echo !isset($dtclientewhere) ? 'required' : ''; ?> />
            <small class="text-muted">(El logo para que se identifique mejor al cliente)</small>
        </div>

        <?php
        if (isset($dtclientewhere)) {
            foreach ($dtclientewhere as $rows) :
        ?>

                <div class="form-floating m-3">
                    <input id="Descripcion" name="Descripcion" class="form-control" value="<?php echo $rows['Descripcion']; ?>" type="text" placeholder="Descripcion del cliente" required />
                    <label for="Descripcion">Nombre o descripción del cliente</label>
                </div>

                <div class="form-floating m-3">
                    <input id="UrlCliente" name="UrlCliente" class="form-control" value="<?php echo $rows['UrlCliente']; ?>" type="text" placeholder="URL o Link de la pagina/sitio web del cliente" />
                    <label for="UrlCliente">URL o Link de la pagina/sitio web del cliente</label>
                    <small class="text-muted fs-6">(Opcional)</small>
                </div>

            <?php
            endforeach;
        } else {
            ?>

            <div class="form-floating m-3">
                <input id="Descripcion" name="Descripcion" class="form-control" type="text" placeholder="Descripcion del cliente" required />
                <label for="Descripcion">Nombre o descripción del cliente</label>
            </div>

            <div class="form-floating m-3">
                <input id="UrlCliente" name="UrlCliente" class="form-control" type="text" placeholder="URL o Link de la pagina/sitio web del cliente" />
                <label for="UrlCliente">URL o Link de la pagina/sitio web del cliente</label>
                <small class="text-muted fs-6">(Opcional)</small>
            </div>

        <?php } ?>

    </div>

    <!-- Image Preview -->
    <div class="card border-0 justify-content-center m-5 rounded-1 ms-1 me-4 bg-white">
        <div class="img-thumbnail rounded ms-auto me-auto mt-auto mb-auto">
            <img id="muestra" src="" alt="Aqui se muestra la imagen seleccionada" style="max-width:400px;max-height:300px;" />
        </div>
    </div>

    <!-- Submit Button -->
    <div class="container ms-auto me-auto mt-4">
        <button type="submit" class="btn btn-success btn-lg">Guardar cliente</button>
    </div>
    </form>
</div>