<section class="py-10 mb-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-sky-600 text-center mb-8 uppercase tracking-wider">Image Gallery</h1>
        <div id="imageGallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach (range(1, 66) as $item)
                <div class="flex justify-center items-center max-w-xl group overflow-hidden rounded-lg duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{asset('assets/images/album/album-' . $item . '.jpeg')}}"
                         alt="Image {{$item}}"
                         class="cursor-pointer rounded-lg object-cover h-auto w-full transition-transform duration-300 ease-in-out transform group-hover:scale-110 group-hover:opacity-90">
                </div>
            @endforeach
        </div>
    </div>

    <!-- Popup Modal -->
    <div id="modalPopup" class="hidden fixed inset-0 bg-black bg-opacity-80 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 transition-opacity duration-500 ease-in-out">
        <div class="relative max-w-4xl w-full mx-4 rounded-lg shadow-lg transform scale-95 opacity-0 transition-all duration-500 ease-in-out">
            <!-- Close Button -->
            <button id="modalCloseBtn" class="absolute md:top-4 -top-[2.5rem] right-4 text-white rounded-full px-2 text-center text-3xl hover:text-sky-400 transition-colors transform scale-125 ease-in-out focus:outline-none z-[999]">&times;</button>

            <!-- Image Container -->
            <div class="max-w-md mx-auto mt-6">
                <img id="modalImage" src="" alt="Popup Image" class="rounded-lg shadow-xl max-w-full max-h-[80vh] transition-transform duration-300 ease-in-out z-[999]">
            </div>

            <!-- Zoom Controls -->
            <div class="mt-6 mb-6 flex justify-center space-x-4">
                <button id="zoomInButton" class="bg-white text-sky-600 px-6 py-3 rounded-full shadow-lg hover:bg-sky-100 focus:ring focus:ring-sky-200 transition-all ease-in-out transform hover:scale-110">
                    <i class="fa-solid fa-magnifying-glass-plus text-black"></i>
                </button>
                <button id="zoomOutButton" class="bg-white text-sky-600 px-6 py-3 rounded-full shadow-lg hover:bg-sky-100 focus:ring focus:ring-sky-200 transition-all ease-in-out transform hover:scale-110">
                    <i class="fa-solid fa-magnifying-glass-minus text-black"></i>
                </button>
            </div>

            <!-- Navigation Controls -->
            <div class="absolute top-1/2 left-0 transform -translate-y-1/2 pl-4 z-[999]">
                <button id="prevButton" class="text-white text-3xl bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-colors">&lt;</button>
            </div>
            <div class="absolute top-1/2 right-0 transform -translate-y-1/2 pr-4">
                <button id="nextButton" class="text-white text-3xl bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-colors">&gt;</button>
            </div>
        </div>
    </div>
</section>

<script>
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
</script>
