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
<script src="recursos/js/site.js" asp-append-version="true"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script type="module" src="recursos/js/maps.js"></script>
<script src="recursos/js/maps.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</body>

</html>