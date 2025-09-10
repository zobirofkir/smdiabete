/**
 * Filter Videos with Animation
 */
function filterVideos(category) {
    // Update active button
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('active', 'bg-blue-600', 'text-white', 'shadow-lg');
        btn.classList.add('bg-gray-100', 'text-gray-700');
    });
    
    event.target.classList.add('active', 'bg-blue-600', 'text-white', 'shadow-lg');
    event.target.classList.remove('bg-gray-100', 'text-gray-700');
    
    // Animate video items
    const videoItems = document.querySelectorAll('.video-item');
    
    videoItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            if (category === 'all' || item.classList.contains(category)) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, 50);
            } else {
                item.style.display = 'none';
            }
        }, 150);
    });
}

/**
 * Open Modal with Enhanced Animation
 */
function openModal(folder, videoUrl) {
    const modal = document.getElementById('videoModal' + folder);
    const iframe = modal.querySelector('iframe');
    
    // Check if it's a local video file
    if (videoUrl.includes('.mp4') || videoUrl.includes('assets/videos/')) {
        // For local videos, replace iframe with video element
        const videoContainer = iframe.parentElement;
        videoContainer.innerHTML = `<video class="w-full h-full" controls autoplay>
            <source src="/${videoUrl}" type="video/mp4">
            Your browser does not support the video tag.
        </video>`;
    } else {
        // For YouTube videos
        iframe.src = `https://www.youtube.com/embed/${videoUrl}?autoplay=1&rel=0&modestbranding=1`;
    }
    
    // Show modal with animation
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    
    setTimeout(() => {
        modal.classList.remove('scale-95', 'opacity-0');
        modal.classList.add('scale-100', 'opacity-100');
    }, 10);
}

/**
 * Close Modal with Animation
 */
function closeModal(folder) {
    const modal = document.getElementById('videoModal' + folder);
    const iframe = modal.querySelector('iframe');
    const video = modal.querySelector('video');
    
    // Hide modal with animation
    modal.classList.remove('scale-100', 'opacity-100');
    modal.classList.add('scale-95', 'opacity-0');
    
    setTimeout(() => {
        modal.classList.add('hidden');
        if (iframe) {
            iframe.src = ''; // Stop YouTube video
        }
        if (video) {
            video.pause(); // Stop local video
            video.currentTime = 0;
        }
        document.body.style.overflow = 'auto';
    }, 300);
}

/**
 * Initialize on page load
 */
document.addEventListener('DOMContentLoaded', function() {
    // Show all videos by default
    filterVideos('all');
    
    // Close modal on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('[id^="videoModal"]').forEach(modal => {
                if (!modal.classList.contains('hidden')) {
                    const folder = modal.id.replace('videoModal', '');
                    closeModal(folder);
                }
            });
        }
    });
    
    // Close modal on backdrop click
    document.querySelectorAll('[id^="videoModal"]').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                const folder = modal.id.replace('videoModal', '');
                closeModal(folder);
            }
        });
    });
});
