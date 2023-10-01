<footer class="custom-footer mt-5">
    <div class="footer-content">
        <div class="footer-section quick-links">
            <h4>Enlaces Rápidos</h4>
            <ul>
                <li><a href="index.php?page=">Inicio</a></li>
                <li><a href="index.php?page=Servicios">Servicios</a></li>
                <li><a href="index.php?page=Nosotros">Nosotros</a></li>
                <li><a href="index.php?page=#clientes">Nuestros Clientes</a></li>
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