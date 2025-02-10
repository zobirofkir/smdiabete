/**
 * Filter Videos
 */

function filterVideos(folder) {
    document.querySelectorAll('.video-item').forEach(item => {
        item.style.display = 'none';
    });
    document.querySelectorAll('.' + folder).forEach(item => {
        item.style.display = 'block';
    });
}



/**
 * Open Modal
 */
function openModal(videoId) {
    const modal = document.getElementById('videoModal' + videoId.replace('video', ''));
    modal.classList.remove('hidden');
    modal.classList.add('scale-100');
}

function closeModal(videoId) {
    const modal = document.getElementById('videoModal' + videoId.replace('video', ''));
    modal.classList.remove('scale-100');
    modal.classList.add('scale-0');
}
