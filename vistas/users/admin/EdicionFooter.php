<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Profesional</title>
    <!-- Agrega el enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 600px;
            /* Ancho máximo de 600px */
        }

        .card {
            border: none;
            border-radius: 10px;
            /* Bordes redondeados */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #007BFF;
            color: #ffffff;
            border-radius: 10px 10px 0 0;
            /* Bordes redondeados en la parte superior */
        }

        .card-body {
            background-color: #ffffff;
            padding: 20px;
        }

        .form-label {
            color: #333333;
            font-weight: bold;
            /* Texto en negrita */
        }

        .form-control {
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007BFF;
            border: none;
            border-radius: 10px;
            /* Borde redondeado en el botón */
            width: 100%;
            /* Botón abarca todo el ancho */
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title text-center">Editar Footer</h2>
            </div>
            <div class="card-body rounded">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="state" class="form-label">Estado:</label>
                            <input type="text" class="form-control" id="state" required>
                        </div>
                        <div class="col">
                            <label for="city" class="form-label">Ciudad:</label>
                            <input type="text" class="form-control" id="city" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="zipcode" class="form-label">Código Postal:</label>
                            <input type="text" class="form-control" id="zipcode" required>
                        </div>
                        <div class="col">
                            <label for="phone" class="form-label">Teléfono:</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary rounded">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Agrega los enlaces a las bibliotecas de Bootstrap y jQuery (si es necesario) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>