<style>
    /* Variables */
    :root {
        --primary-color: #ff6600;
        --secondary-color: #00345E;
        --background-color: #f7f9fc;
        --accent-color: #026b60;
        --highlight-color: #f0db4f;
        --shadow-light: 0 4px 15px rgba(0, 0, 0, 0.1);
        --shadow-dark: 0 4px 20px rgba(0, 0, 0, 0.25);
        --container-background: #00345E;
    }

    /* Estilos generales del footer */
    .custom-footer {
        background-color: var(--container-background);
        padding: 20px 0;
        color: var(--background-color);
    }

    .footer-content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-section {
        flex-basis: calc(100% / 3);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 15px;
    }

    .footer-section h4 {
        text-align: center;
        margin-bottom: 15px;
        width: 100%;
        font-weight: bold;
    }

    .footer-section ul {
        list-style-type: none;
        padding: 0;
        text-align: center;
    }

    .footer-section ul li {
        margin-bottom: 8px;
    }

    .footer-bottom {
        text-align: center;
        padding-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        margin-top: 30px;
    }

    /* Estilos específicos para detalles de contacto */
    .contact-details ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .contact-details li {
        margin: 8px 0;
    }

    /* Estilos específicos para redes sociales */
    .footer-section.social {
        display: flex;
        flex-direction: column;
    }

    .footer-section.social h4 {
        margin-bottom: 15px;
    }

    .footer-section.social>div {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .social a {
        margin: 0 10px;
        font-size: 24px;
        color: var(--background-color);
        transition: color 0.3s;
    }

    .social a:hover {
        color: var(--primary-color);
    }

    /* Estilos para enlaces */
    .footer-section ul li a {
        text-decoration: none;
        color: white;
        transition: 0.3s;
    }

    .footer-section ul li a:hover {
        opacity: 0.8;
        color: var(--primary-color);
    }

    /* Estilos responsivos */
    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
        }

        .footer-section {
            margin-bottom: 20px;
        }
    }
</style>

<footer class="custom-footer mt-5">
    <div class="footer-content">
        <div class="footer-section quick-links">
            <h4>Enlaces Rápidos</h4>
            <ul>
                <li><a href="index.php?page=">Inicio</a></li>
                <li><a href="index.php?page=Servicios">Servicios</a></li>
                <li><a href="index.php?page=Nosotros">Nosotros</a></li>
                <li><a href="#clientes">Nuestros Clientes</a></li>
            </ul>
        </div>
        <div class="footer-section company-details">
            <h4>Servicios y Suministros Peninsulares</h4>
            <p>Dirección: 1234 Calle Principal, Ciudad, País</p>
            <p>Teléfono: +00 123 456 7890</p>
            <p>Email: contacto@compania.com</p>
        </div>

        <div class="footer-section social">
            <h4>Síguenos</h4>
            <div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 SSP. Todos los derechos reservados.</p>
    </div>
</footer>

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

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<script src="recursos/lib/jquery/dist/jquery.js"></script>
<script src="recursos/lib/jquery/dist/jquery.min.js"></script>
<script src="recursos/lib/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="recursos/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>

<script src="recursos/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="recursos/JS/site.js"></script>
<script src="recursos/JS/servicios.js"></script>

<script>
    // AOS.init();
</script>