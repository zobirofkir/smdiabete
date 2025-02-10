<section class="py-10 mb-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-sky-600 text-center mb-8 uppercase tracking-wider">Galeries</h1>

        <!-- Dossier Switcher -->
        <div class="flex justify-center mb-8">
            <button id="dossier1Button"
                    class="px-6 py-3 bg-sky-600 text-white rounded-l-lg focus:outline-none hover:bg-sky-700 transition-colors shadow-lg hover:shadow-xl">Journée Mondiale du Diabète</button>
            <button id="dossier2Button"
                    class="px-6 py-3 bg-sky-200 text-sky-600 rounded-r-lg focus:outline-none hover:bg-sky-300 transition-colors shadow-lg hover:shadow-xl">1er Congrès National de Diabètologie</button>
        </div>

        <!-- Image Gallery -->
        <div id="imageGallery" class="">
            <!-- Dossier 1 Images -->
            <div id="dossier1" class="dossier grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach (range(1, 11) as $item)
                    <div class="relative group overflow-hidden rounded-xl shadow-lg transition-all hover:shadow-2xl transform hover:scale-105 duration-500 ease-in-out">
                        <img src="{{ asset('assets/images/album/album-' . $item . '.jpeg') }}"
                             alt="Image {{$item}}"
                             class="object-cover w-full h-64 transition-transform duration-300 group-hover:scale-110 cursor-pointer"
                             data-index="{{ $item - 1 }}">
                    </div>
                @endforeach
            </div>

            <!-- Dossier 2 Images -->
            <div id="dossier2" class="dossier hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach (range(32, 71) as $item)
                    <div class="relative group overflow-hidden rounded-xl shadow-lg transition-all hover:shadow-2xl transform hover:scale-105 duration-500 ease-in-out">
                        <img src="{{ asset('assets/images/album/album-dosier-two-' . $item . '.jpeg') }}"
                             alt="Image {{$item}}"
                             class="object-cover w-full h-64 transition-transform duration-300 group-hover:scale-110 cursor-pointer"
                             data-index="{{ $item - 1 }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Modal Popup -->
<div id="modalPopup" class="hidden fixed inset-0 bg-black bg-opacity-80 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 transition-opacity duration-500 ease-in-out">
    <div class="relative max-w-4xl w-full mx-4 rounded-lg shadow-lg transform scale-95 opacity-0 transition-all duration-500 ease-in-out">
        <button id="modalCloseBtn" class="absolute md:top-4 -top-[2.5rem] right-4 text-white rounded-full px-2 text-center text-3xl hover:text-sky-400 transition-colors transform scale-125 ease-in-out focus:outline-none z-[999]">&times;</button>
        <div class="max-w-md mx-auto mt-6">
            <img id="modalImage" src="" alt="Popup Image" class="rounded-lg shadow-xl max-w-full max-h-[80vh] transition-transform duration-300 ease-in-out z-[999]">
        </div>
        <div class="flex justify-center space-x-4">
            <button id="zoomInButton" class="bg-white text-sky-600 px-6 py-3 rounded-full shadow-lg hover:bg-sky-100 focus:ring focus:ring-sky-200 transition-all ease-in-out transform hover:scale-110">
                <i class="fa-solid fa-magnifying-glass-plus text-black"></i>
            </button>
            <button id="zoomOutButton" class="bg-white text-sky-600 px-6 py-3 rounded-full shadow-lg hover:bg-sky-100 focus:ring focus:ring-sky-200 transition-all ease-in-out transform hover:scale-110">
                <i class="fa-solid fa-magnifying-glass-minus text-black"></i>
            </button>
        </div>
        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 pl-4 z-[999]">
            <button id="prevButton" class="text-white text-3xl bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-colors">&lt;</button>
        </div>
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 pr-4">
            <button id="nextButton" class="text-white text-3xl bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-colors">&gt;</button>
        </div>
    </div>
</div>
