const carouselContainer = document.querySelector(".carousel-container");
const imageCarousel = document.querySelector(".image-carousel");
const images = document.querySelectorAll(".image");
const numImagesPerSlide = 5; // Ajusta el número de imágenes por slide
let currentIndex = 0;
const maxIndex = images.length - 1;

function updateCarousel() {
    const translateX = -currentIndex * (100 / numImagesPerSlide);
    imageCarousel.style.transform = `translateX(${translateX}%)`;
}

function nextSlide() {
    currentIndex = currentIndex + numImagesPerSlide > maxIndex ? 0 : currentIndex + numImagesPerSlide;
    updateCarousel();
}

function prevSlide() {
    currentIndex = currentIndex - numImagesPerSlide < 0 ? maxIndex : currentIndex - numImagesPerSlide;
    updateCarousel();
}

// Agregar eventos para las flechas de navegación
document.getElementById("prevButton").addEventListener("click", prevSlide);
document.getElementById("nextButton").addEventListener("click", nextSlide);

// Cambia automáticamente de slide cada 5 segundos
let interval = setInterval(nextSlide, 5000);

// Detener el carrusel cuando el cursor está sobre él
carouselContainer.addEventListener("mouseenter", () => {
    clearInterval(interval);
});

// Reanudar el carrusel cuando el cursor sale de él
carouselContainer.addEventListener("mouseleave", () => {
    interval = setInterval(nextSlide, 5000);
});

// Navegación con teclado (flechas izquierda/derecha)
document.querySelector(".gallery").addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") {
        prevSlide();
    } else if (e.key === "ArrowRight") {
        nextSlide();
    }
});