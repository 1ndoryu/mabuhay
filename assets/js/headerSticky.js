function headerSticky() {
    const header = document.querySelector('header.header');
    if (!header) return;

    const BRIGHTNESS_THRESHOLD = 240; // Sensibilidad: mayor -> exige fondo más claro para texto oscuro

    const heroSection = document.querySelector('.hero');

    const updateTextColor = () => {
        if (header.classList.contains('fijado')) {
            header.classList.add('claro');
            header.classList.remove('oscuro');
            return;
        }

        // 1. Si el header está sobre la sección hero -> texto blanco
        if (heroSection) {
            const headerRect = header.getBoundingClientRect();
            const heroRect = heroSection.getBoundingClientRect();
            const overlapsHero = heroRect.top < headerRect.bottom && heroRect.bottom > 0;
            if (overlapsHero) {
                header.classList.add('oscuro');
                header.classList.remove('claro');
                return;
            }
        }

        // 2. Lógica basada en luminancia como respaldo
        const rect = header.getBoundingClientRect();
        const sampleX = rect.left + rect.width / 2;
        const sampleY = rect.bottom + 1;
        let elBelow = document.elementFromPoint(sampleX, sampleY) || document.body;

        const getEffectiveBg = (el) => {
            if (!el) return null;
            const style = window.getComputedStyle(el);
            if (style.backgroundColor && !style.backgroundColor.startsWith('rgba(0, 0, 0, 0') && style.backgroundColor !== 'transparent') {
                return style.backgroundColor;
            }
            if (style.backgroundImage && style.backgroundImage !== 'none') {
                // Consideramos imágenes de fondo como oscuras para evitar texto negro sobre foto
                return 'rgb(0,0,0)';
            }
            return el.parentElement ? getEffectiveBg(el.parentElement) : null;
        };

        let bgColor = getEffectiveBg(elBelow);
        if (!bgColor) {
            bgColor = window.getComputedStyle(document.body).backgroundColor;
        }

        const match = bgColor.match(/rgba?\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)/);
        if (!match) return;
        const r = parseInt(match[1], 10);
        const g = parseInt(match[2], 10);
        const b = parseInt(match[3], 10);
        const brightness = (r * 299 + g * 587 + b * 114) / 1000;
        if (brightness > BRIGHTNESS_THRESHOLD) {
            header.classList.add('claro');
            header.classList.remove('oscuro');
        } else {
            header.classList.add('oscuro');
            header.classList.remove('claro');
        }
    };

    const toggleClass = () => {
        const offset = window.pageYOffset || document.documentElement.scrollTop;
        const isSticky = offset > 10;
        header.classList.toggle('fijado', isSticky);
        if (isSticky) {
            // Aplicamos directamente estilo fijo
            header.classList.add('claro');
            header.classList.remove('oscuro');
        } else {
            updateTextColor();
        }
    };

    window.addEventListener('scroll', toggleClass);
    window.addEventListener('resize', toggleClass);

    // Comprobación inicial
    toggleClass();
}

document.addEventListener('DOMContentLoaded', headerSticky);
document.addEventListener('gloryRecarga', headerSticky);

/* ===== Menú hamburguesa ===== */
function menuHamburguesa() {
    const nav = document.querySelector('.headerNav');
    const toggle = document.querySelector('.menuToggle');
    if (!nav || !toggle) return;

    const alternar = () => {
        nav.classList.toggle('abierto');
        const abierto = nav.classList.contains('abierto');
        toggle.setAttribute('aria-expanded', abierto ? 'true' : 'false');
    };

    const cerrar = () => {
        if (nav.classList.contains('abierto')) {
            nav.classList.remove('abierto');
            toggle.setAttribute('aria-expanded', 'false');
        }
    };

    toggle.addEventListener('click', (e) => {
        e.stopPropagation();
        alternar();
    });

    // Cerrar al hacer click/tap fuera del menú
    document.addEventListener('click', (e) => {
        if (!nav.contains(e.target) && !toggle.contains(e.target)) {
            cerrar();
        }
    });
    document.addEventListener('touchstart', (e) => {
        if (!nav.contains(e.target) && !toggle.contains(e.target)) {
            cerrar();
        }
    });

    // Cerrar al hacer click en cualquier parte del menú (por ejemplo fondo o enlaces)
    nav.addEventListener('click', (e) => {
        if (nav.classList.contains('abierto') && e.target !== toggle) {
            cerrar();
        }
    });
}

// Inicializamos inmediatamente en caso de que el script se cargue tras DOMContentLoaded
menuHamburguesa();

document.addEventListener('DOMContentLoaded', menuHamburguesa);
document.addEventListener('gloryRecarga', menuHamburguesa); 