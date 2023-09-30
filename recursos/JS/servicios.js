const numImagesPerSlide = 5; // Ajusta el número de imágenes por slide

function updateCarousel(carousel, currentIndex) {
    const images = carousel.querySelectorAll(".image");
    const maxIndex = images.length - 1;
    const translateX = -currentIndex * (100 / numImagesPerSlide);
    carousel.style.transform = `translateX(${translateX}%)`;
    return { images, maxIndex };
}

function navigateCarousel(direction, serviceName) {
    const carousel = document.getElementById(`carousel-${serviceName}`);
    let currentIndex = +carousel.getAttribute('data-index'); // Obtenemos el índice actual desde el atributo del elemento

    if (direction === 'left') {
        const { maxIndex } = updateCarousel(carousel, currentIndex);
        currentIndex = currentIndex - numImagesPerSlide < 0 ? maxIndex : currentIndex - numImagesPerSlide;
    } else if (direction === 'right') {
        const { maxIndex } = updateCarousel(carousel, currentIndex);
        currentIndex = currentIndex + numImagesPerSlide > maxIndex ? 0 : currentIndex + numImagesPerSlide;
    }

    carousel.setAttribute('data-index', currentIndex); // Actualizamos el índice en el atributo del elemento
    updateCarousel(carousel, currentIndex);
}

// Detener y reanudar el carrusel cuando el cursor entra/sale
document.querySelectorAll(".carousel-container").forEach(carouselContainer => {
    let interval = setInterval(() => {
        navigateCarousel('right', carouselContainer.querySelector('.image-carousel').id.split('-')[1]);
    }, 3500);

    carouselContainer.addEventListener("mouseenter", () => {
        clearInterval(interval);
    });

    carouselContainer.addEventListener("mouseleave", () => {
        interval = setInterval(() => {
            navigateCarousel('right', carouselContainer.querySelector('.image-carousel').id.split('-')[1]);
        }, 3500);
    });
});

// Navegación con teclado (flechas izquierda/derecha)
document.querySelector(".gallery").addEventListener("keydown", (e) => {
    const focusedCarousel = document.activeElement.querySelector('.image-carousel');
    if (!focusedCarousel) return;

    if (e.key === "ArrowLeft") {
        navigateCarousel('left', focusedCarousel.id.split('-')[1]);
    } else if (e.key === "ArrowRight") {
        navigateCarousel('right', focusedCarousel.id.split('-')[1]);
    }
});
