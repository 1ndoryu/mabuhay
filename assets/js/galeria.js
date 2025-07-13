// Script de galería para singleDestino
function galeria() {
        const grid = document.querySelector('.grid-galeria');
        if (!grid) return;

        const prevBtn = document.querySelector('.galeria-prev');
        const nextBtn = document.querySelector('.galeria-next');
        const overlay = document.querySelector('.galeria-overlay');
        const overlayImg = overlay ? overlay.querySelector('img') : null;

        // Scroll con flechas
        const scrollDist = () => grid.clientWidth;
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                grid.scrollBy({ left: -scrollDist(), behavior: 'smooth' });
            });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                grid.scrollBy({ left: scrollDist(), behavior: 'smooth' });
            });
        }

        // Abrir modal al hacer click en imagen
        grid.addEventListener('click', (e) => {
            const target = e.target;
            if (!(target instanceof HTMLImageElement)) return;
            if (!overlay || !overlayImg) return;
            overlayImg.src = target.src;
            overlay.classList.remove('oculto');
            document.body.classList.add('noScroll');
        });

        // Cerrar overlay al hacer click fuera de la imagen
        if (overlay) {
            overlay.addEventListener('click', (e) => {
                // Evita cerrar si se pulsa sobre la imagen
                if (e.target === overlayImg) return;
                overlay.classList.add('oculto');
                document.body.classList.remove('noScroll');
            });
        }
}

document.addEventListener('gloryRecarga', galeria);