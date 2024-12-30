// Для изображений
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

document.addEventListener('DOMContentLoaded', function () {
    const workEntries = document.querySelectorAll('.work-entry');
    const fullscreenView = document.getElementById('fullscreen-view');
    const fullscreenImage = document.getElementById('fullscreen-image');

    // Обработчик клика на изображение
    workEntries.forEach(entry => {
        entry.addEventListener('click', function (event) {
            event.preventDefault();
            const img = entry.querySelector('img');
            if (fullscreenView.classList.contains('visible')) {
                closeFullscreen();
            } else {
                openFullscreen(img.src);
            }
        });
    });

    // Открыть полноэкранный режим
    function openFullscreen(src) {
        fullscreenImage.src = src;
        fullscreenView.classList.remove('hidden');
        fullscreenView.classList.add('visible');
    }

    // Закрыть полноэкранный режим
    function closeFullscreen() {
        fullscreenView.classList.remove('visible');
        fullscreenView.classList.add('hidden');
        fullscreenImage.src = '';
    }

    // Обработчик клика для выхода из полноэкранного режима
    fullscreenView.addEventListener('click', closeFullscreen);
});
