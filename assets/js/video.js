function video() {
    const video = document.querySelector('.hero-video');
    if (!video) return;

    const connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
    const effectiveType = connection ? connection.effectiveType : '4g';

    if (effectiveType.includes('2g') || effectiveType === 'slow-2g') {
        return;
    }
    
    video.closest('.hero')?.classList.add('video-loaded');

    video.src = video.dataset.src;
    video.preload = 'auto';

    const readyHandler = () => {
        video.closest('.hero')?.classList.add('video-loaded');
        video.removeEventListener('canplaythrough', readyHandler);
    };
    video.addEventListener('canplaythrough', readyHandler);

    video.play().catch(e => {
        console.warn('Autoplay bloqueado:', e);
    });
};

document.addEventListener('gloryRecarga', video);
