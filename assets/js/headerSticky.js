function headerSticky() {
    const header = document.querySelector('header.header');
    if (!header) return;

    const toggleClass = () => {
        const offset = window.pageYOffset || document.documentElement.scrollTop;
        header.classList.toggle('fijado', offset > 10);
    };

    window.addEventListener('scroll', toggleClass);
    window.addEventListener('resize', toggleClass);

    // Comprobación inicial
    toggleClass();
}

document.addEventListener('DOMContentLoaded', headerSticky);
document.addEventListener('gloryRecarga', headerSticky); 