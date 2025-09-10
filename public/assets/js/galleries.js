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
        setTimeout(() => modalPopup.classList.add("hidden"), 500);
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

    // Dossier Switcher
    const dossier1Button = document.getElementById('dossier1Button');
    const dossier2Button = document.getElementById('dossier2Button');
    const dossier3Button = document.getElementById('dossier3Button');
    const dossier1 = document.getElementById('dossier1');
    const dossier2 = document.getElementById('dossier2');
    const dossier3 = document.getElementById('dossier3');

    const setActiveButton = (activeButton) => {
        [dossier1Button, dossier2Button, dossier3Button].forEach(btn => {
            btn.classList.remove('bg-sky-600', 'text-white');
            btn.classList.add('bg-sky-200', 'text-sky-600');
        });
        activeButton.classList.remove('bg-sky-200', 'text-sky-600');
        activeButton.classList.add('bg-sky-600', 'text-white');
    };

    const showDossier = (targetDossier) => {
        [dossier1, dossier2, dossier3].forEach(dossier => {
            dossier.classList.add('hidden');
            dossier.classList.remove('grid');
        });
        targetDossier.classList.remove('hidden');
        targetDossier.classList.add('grid');
    };

    dossier1Button.addEventListener('click', () => {
        showDossier(dossier1);
        setActiveButton(dossier1Button);
    });

    dossier2Button.addEventListener('click', () => {
        showDossier(dossier2);
        setActiveButton(dossier2Button);
    });

    dossier3Button.addEventListener('click', () => {
        showDossier(dossier3);
        setActiveButton(dossier3Button);
    });
});
