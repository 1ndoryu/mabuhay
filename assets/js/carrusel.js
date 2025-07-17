function carrusel() {
    const lista = document.querySelector('.glory-content-list.destino');
    if (!lista || lista.dataset.circular === 'true') return;

    // Garantizamos estilo base
    lista.style.willChange = 'transform';
    lista.style.animation = 'none';

    // Velocidad (px/s)
    const velocidad = 20;

    // Leemos gap desde CSS
    const gap = parseInt(getComputedStyle(lista).gap || 0, 10);

    let offset = 0;
    let lastTimestamp = null;

    function loop(ts) {
        if (!lastTimestamp) lastTimestamp = ts;
        const delta = (ts - lastTimestamp) / 1000; // s
        lastTimestamp = ts;

        offset -= velocidad * delta;

        // Si el primer elemento se ha salido completamente a la izquierda
        const primer = lista.firstElementChild;
        if (primer) {
            const primerWidth = primer.offsetWidth + gap;
            if (Math.abs(offset) >= primerWidth) {
                // Restamos la anchura y movemos el elemento al final
                offset += primerWidth;
                lista.appendChild(primer);
            }
        }

        lista.style.transform = `translateX(${offset}px)`;
        requestAnimationFrame(loop);
    }

    requestAnimationFrame(loop);
    lista.dataset.circular = 'true';
};

// document.addEventListener('gloryRecarga', carrusel);