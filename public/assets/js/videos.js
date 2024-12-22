function openModal(videoId) {
    let modal = document.getElementById('videoModal' + videoId.charAt(videoId.length - 1));
    modal.classList.remove('hidden');
    modal.classList.add('scale-100');

    if (videoId === 'video1') {
      document.getElementById(videoId).play();
    }
  }

  function closeModal(videoId) {
    let modal = document.getElementById('videoModal' + videoId.charAt(videoId.length - 1));
    modal.classList.remove('scale-100');
    modal.classList.add('scale-0');

    if (videoId === 'video1') {
      document.getElementById(videoId).pause();
    }

    if (videoId === 'video2') {
      document.getElementById('videoFrame').src = document.getElementById('videoFrame').src;
    }
  }
