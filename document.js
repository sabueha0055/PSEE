document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelector('.carousel-images');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    let index = 0;
    const imageCount = images.children.length;

    function updateCarousel() {
        const offset = -index * 100;
        images.style.transform = `translateX(${offset}%)`;
    }

    prev.addEventListener('click', () => {
        index = (index > 0) ? index - 1 : imageCount - 1;
        updateCarousel();
    });

    next.addEventListener('click', () => {
        index = (index < imageCount - 1) ? index + 1 : 0;
        updateCarousel();
    });
});