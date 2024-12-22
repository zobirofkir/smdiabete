<section class="py-10 mb-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-sky-600 text-center mb-8 uppercase tracking-wider">Image Gallery</h1>
        <div id="imageGallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach (range(1, 66) as $item)
                <div class="flex justify-center items-center max-w-xl group overflow-hidden rounded-lg duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{asset('assets/images/album/album-' . $item . '.jpeg')}}"
                         alt="Image {{$item}}"
                         class="cursor-pointer rounded-lg object-cover h-64 w-64 transition-transform duration-300 ease-in-out transform group-hover:scale-110 group-hover:opacity-90">
                </div>
            @endforeach
        </div>
    </div>

    <div id="modalPopup" class="hidden fixed inset-0 bg-black bg-opacity-80 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 transition-opacity duration-500 ease-in-out">
        <div class="relative max-w-4xl w-full mx-4 rounded-lg shadow-lg transform scale-95 opacity-0 transition-all duration-500 ease-in-out">

            <button id="modalCloseBtn" class="absolute md:top-4 -top-[2.5rem] right-4 text-white rounded-full px-2 text-center text-3xl hover:text-sky-400 transition-colors transform scale-125 ease-in-out focus:outline-none z-[999]">&times;</button>

            <div class="max-w-md mx-auto mt-6">
                <img id="modalImage" src="" alt="Popup Image" class="rounded-lg shadow-xl max-w-full max-h-[80vh] transition-transform duration-300 ease-in-out z-[999]">
            </div>

            <div class="mt-6 mb-6 flex justify-center space-x-4">
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
</section>
