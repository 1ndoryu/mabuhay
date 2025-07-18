// Script de galería para singlePage
function galeria() {
    const wrappers = document.querySelectorAll('.galeria-wrapper');
    if (!wrappers.length) return;

    wrappers.forEach((wrapper) => {
        // Prevenir inicialización múltiple
        if (wrapper.dataset.galeriaInit === 'true') return;
        wrapper.dataset.galeriaInit = 'true';

        const grid = wrapper.querySelector('.grid-galeria') || wrapper.querySelector('.otros-destinos');
        if (!grid) return;

        const prevBtn = wrapper.querySelector('.galeria-prev');
        const nextBtn = wrapper.querySelector('.galeria-next');

        // Distancia de scroll = ancho visible del contenedor
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

        // Arrastre con mouse o dedo
        let isDragging = false;
        let startX = 0;
        let scrollLeftStart = 0;
        let hasMoved = false; // distingue click vs arrastre

        const startDrag = (e) => {
            if (e.pointerType === 'touch') {
                e.preventDefault(); // evita scroll vertical en móviles
            }
            isDragging = true;
            hasMoved = false;
            startX = e.clientX;
            scrollLeftStart = grid.scrollLeft;
            if (e.pointerType !== 'mouse' && typeof grid.setPointerCapture === 'function') {
                grid.setPointerCapture(e.pointerId);
            }
            grid.classList.add('arrastrand');
        };

        const duringDrag = (e) => {
            if (!isDragging) return;
            const deltaX = e.clientX - startX;
            if (Math.abs(deltaX) > 5) {
                hasMoved = true;
            }
            grid.scrollLeft = scrollLeftStart - deltaX;
        };

        const stopDrag = (e) => {
            if (!isDragging) return;
            isDragging = false;
            if (e.pointerType !== 'mouse' && typeof grid.releasePointerCapture === 'function') {
                grid.releasePointerCapture(e.pointerId);
            }
            grid.classList.remove('arrastrand');
        };

        grid.addEventListener('pointerdown', startDrag);
        grid.addEventListener('pointermove', duringDrag);
        grid.addEventListener('pointerup', stopDrag);
        grid.addEventListener('pointercancel', stopDrag);
        grid.addEventListener('pointerleave', stopDrag);

        // Evita el drag&drop nativo de imágenes
        grid.addEventListener('dragstart', (e) => e.preventDefault());

        // Solo para la galería de imágenes (grid-galeria), habilitamos overlay
        if (grid.classList.contains('grid-galeria')) {
            const overlay = document.querySelector('.galeria-overlay');
            const overlayImg = overlay ? overlay.querySelector('img') : null;

            grid.addEventListener('click', (e) => {
                if (hasMoved) {
                    hasMoved = false;
                    return;
                }

                const target = e.target;
                if (!(target instanceof HTMLImageElement)) return;
                if (!overlay || !overlayImg) return;

                overlayImg.src = target.src;
                overlay.classList.remove('oculto');
                document.body.classList.add('noScroll');
            }, true);

            if (overlay) {
                overlay.addEventListener('click', (e) => {
                    if (e.target === overlayImg) return;
                    overlay.classList.add('oculto');
                    document.body.classList.remove('noScroll');
                });
            }
        }
    });
}

document.addEventListener('gloryRecarga', galeria);