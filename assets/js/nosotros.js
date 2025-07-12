function nosotros() {
    const wrapper = document.querySelector('.nosotrosSlidesWrapper');
    if (!wrapper) return;

    const slides = wrapper.querySelectorAll('.section.nosotros.imagentexto');
    const totalSlides = slides.length;

    // Asegura que la primera slide sea visible al cargar
    if (slides.length) {
        slides[0].classList.add('active');
    }

    function actualizarSlide() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const inicio = wrapper.offsetTop;
        let indice = Math.floor((scrollTop - inicio) / window.innerHeight);

        // Limita el índice al rango válido [0, totalSlides-1]
        indice = Math.max(0, Math.min(totalSlides - 1, indice));

        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === indice);
        });
    }

    window.addEventListener('scroll', actualizarSlide);
    window.addEventListener('resize', actualizarSlide);
    actualizarSlide();
};

document.addEventListener('gloryRecarga', nosotros);