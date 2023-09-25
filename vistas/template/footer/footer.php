</main>
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

<script src="recursos/lib/jquery/dist/jquery.js"></script>
<script src="recursos/lib/jquery/dist/jquery.min.js"></script>
<script src="recursos/lib/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="recursos/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>

<script src="recursos/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // AOS.init();
</script>

</body>

</html>