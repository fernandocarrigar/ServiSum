<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/recursos/CSS/nav-bar.css">
</head>

<body>
    <nav class="custom-navbar">
        <div class="logo">
            <img src="tu-logo.png" alt="Logo de tu sitio web">
        </div>
        <div class="mobile-menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
        <ul class="custom-navbar-list">
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="#">Inicio</a></li>
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="#">Servicios</a></li>
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="#">Nosotros</a></li>
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="#">Nuestros Clientes</a></li>
            <li class="custom-navbar-item"><a class="custom-navbar-link" href="#">Contacto</a></li>
        </ul>
    </nav>

    <!-- Contenido de prueba para activar el scroll -->
    <div style="height: 1500px;">
        <p>Contenido de prueba</p>
    </div>

    <script>
        const navLinks = document.querySelectorAll('.custom-navbar-link');

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                // Remueve la clase "active" de todos los enlaces
                navLinks.forEach(otherLink => {
                    otherLink.classList.remove('active');
                });
                // Agrega la clase "active" al enlace seleccionado
                link.classList.add('active');
            });
        });
    </script>
</body>

</html>