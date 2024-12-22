document.addEventListener("DOMContentLoaded", () => {
    const imageGallery = document.querySelectorAll("#imageGallery img");
    const modalPopup = document.getElementById("modalPopup");
    const modalImage = document.getElementById("modalImage");
    const modalCloseBtn = document.getElementById("modalCloseBtn");
    const zoomInButton = document.getElementById("zoomInButton");
    const zoomOutButton = document.getElementById("zoomOutButton");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");

    let currentIndex = 0;
    let scale = 1;

    const openModal = (index) => {
        currentIndex = index;
        scale = 1;
        updateModal();
        modalPopup.classList.remove("hidden");
        setTimeout(() => {
            modalPopup.classList.remove("opacity-0");
            modalPopup.classList.add("opacity-100");
            modalPopup.querySelector('.relative').classList.remove("opacity-0", "scale-95");
            modalPopup.querySelector('.relative').classList.add("opacity-100", "scale-100");
        }, 10);
    };

    const updateModal = () => {
        modalImage.src = imageGallery[currentIndex].src;
        modalImage.style.transform = `scale(${scale})`;
    };

    const closeModal = () => {
        modalPopup.classList.remove("opacity-100");
        modalPopup.classList.add("opacity-0");
        modalPopup.querySelector('.relative').classList.remove("opacity-100", "scale-100");
        modalPopup.querySelector('.relative').classList.add("opacity-0", "scale-95");
        setTimeout(() => modalPopup.classList.add("hidden"), 500); // Shorter timeout for smoother transition
    };

    const zoomIn = () => {
        scale += 0.2;
        updateModal();
    };

    const zoomOut = () => {
        if (scale > 0.4) {
            scale -= 0.2;
            updateModal();
        }
    };

    const showPrevImage = () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : imageGallery.length - 1;
        updateModal();
    };

    const showNextImage = () => {
        currentIndex = (currentIndex < imageGallery.length - 1) ? currentIndex + 1 : 0;
        updateModal();
    };

    imageGallery.forEach((img, index) => {
        img.addEventListener("click", () => openModal(index));
    });

    modalCloseBtn.addEventListener("click", closeModal);
    zoomInButton.addEventListener("click", zoomIn);
    zoomOutButton.addEventListener("click", zoomOut);
    prevButton.addEventListener("click", showPrevImage);
    nextButton.addEventListener("click", showNextImage);

    modalPopup.addEventListener("click", (e) => {
        if (e.target === modalPopup) closeModal();
    });
});
