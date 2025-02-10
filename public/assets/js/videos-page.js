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
function openModal(folder, videoUrl) {
    const modal = document.getElementById('videoModal' + folder);
    modal.querySelector('iframe').src = 'https://www.youtube.com/embed/' + videoUrl;
    modal.classList.remove('hidden');
    modal.classList.add('scale-100');
}

function closeModal(folder) {
    const modal = document.getElementById('videoModal' + folder);
    modal.classList.remove('scale-100');
    modal.classList.add('scale-0');
    modal.querySelector('iframe').src = ''; // Stop the video when closing the modal
}
