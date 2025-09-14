<section class="py-10 mb-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-sky-600 text-center mb-8 uppercase tracking-wider">Galeries</h1>

        <!-- Dossier Switcher -->
        <div class="flex justify-center mb-12 px-2">
            <div class="w-full max-w-6xl">
                <!-- Desktop/Tablet View -->
                <div class="hidden sm:flex justify-center">
                    <div class="inline-flex bg-gradient-to-r from-slate-50 to-gray-100 rounded-3xl p-1.5 shadow-xl border border-white/20 backdrop-blur-sm">
                        <button class="dossier-btn px-4 lg:px-6 py-3.5 bg-gradient-to-br from-sky-500 via-sky-600 to-sky-700 text-white rounded-2xl font-bold text-xs lg:text-sm tracking-wide focus:outline-none hover:from-sky-600 hover:via-sky-700 hover:to-sky-800 transition-all duration-500 shadow-lg hover:shadow-2xl transform hover:scale-105 relative overflow-hidden group" data-dossier="1">
                            <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <span class="relative z-10 drop-shadow-sm whitespace-nowrap">Journée Mondiale du Diabète</span>
                        </button>
                        <button class="dossier-btn px-4 lg:px-6 py-3.5 bg-white/80 text-slate-700 rounded-2xl font-semibold text-xs lg:text-sm tracking-wide focus:outline-none hover:bg-white hover:text-sky-600 hover:shadow-lg transition-all duration-300 transform hover:scale-105 relative overflow-hidden group border border-transparent hover:border-sky-200" data-dossier="2">
                            <span class="relative z-10 whitespace-nowrap">1er Congrès National</span>
                        </button>
                        <button class="dossier-btn px-4 lg:px-6 py-3.5 bg-white/80 text-slate-700 rounded-2xl font-semibold text-xs lg:text-sm tracking-wide focus:outline-none hover:bg-white hover:text-sky-600 hover:shadow-lg transition-all duration-300 transform hover:scale-105 relative overflow-hidden group border border-transparent hover:border-sky-200" data-dossier="3">
                            <span class="relative z-10 whitespace-nowrap">2ème Congrès National</span>
                        </button>
                        <button class="dossier-btn px-4 lg:px-6 py-3.5 bg-white/80 text-slate-700 rounded-2xl font-semibold text-xs lg:text-sm tracking-wide focus:outline-none hover:bg-white hover:text-sky-600 hover:shadow-lg transition-all duration-300 transform hover:scale-105 relative overflow-hidden group border border-transparent hover:border-sky-200" data-dossier="4">
                            <span class="relative z-10 whitespace-nowrap">Autre</span>
                        </button>
                    </div>
                </div>
                
                <!-- Mobile View -->
                <div class="sm:hidden">
                    <div class="grid grid-cols-2 gap-3 bg-gradient-to-br from-slate-50 to-gray-100 rounded-3xl p-3 shadow-xl border border-white/20 backdrop-blur-sm">
                        <button class="dossier-btn col-span-2 px-4 py-4 bg-gradient-to-br from-sky-500 via-sky-600 to-sky-700 text-white rounded-2xl font-bold text-sm tracking-wide focus:outline-none active:from-sky-700 active:via-sky-800 active:to-sky-900 transition-all duration-300 shadow-lg active:shadow-xl transform active:scale-95 relative overflow-hidden" data-dossier="1">
                            <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 active:opacity-100 transition-opacity duration-200"></div>
                            <span class="relative z-10 drop-shadow-sm">Journée Mondiale du Diabète</span>
                        </button>
                        <button class="dossier-btn px-3 py-4 bg-white/90 text-slate-700 rounded-2xl font-semibold text-sm tracking-wide focus:outline-none active:bg-white active:text-sky-600 active:shadow-lg transition-all duration-200 transform active:scale-95 border border-transparent active:border-sky-200" data-dossier="2">
                            <span class="relative z-10">1er Congrès</span>
                        </button>
                        <button class="dossier-btn px-3 py-4 bg-white/90 text-slate-700 rounded-2xl font-semibold text-sm tracking-wide focus:outline-none active:bg-white active:text-sky-600 active:shadow-lg transition-all duration-200 transform active:scale-95 border border-transparent active:border-sky-200" data-dossier="3">
                            <span class="relative z-10">2ème Congrès</span>
                        </button>
                        <button class="dossier-btn col-span-2 px-4 py-4 bg-white/90 text-slate-700 rounded-2xl font-semibold text-sm tracking-wide focus:outline-none active:bg-white active:text-sky-600 active:shadow-lg transition-all duration-200 transform active:scale-95 border border-transparent active:border-sky-200" data-dossier="4">
                            <span class="relative z-10">Autre</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Gallery -->
        <div id="imageGallery">
            <!-- Dossier 1 Images -->
            <div id="dossier1" class="dossier grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @foreach (range(1, 11) as $item)
                    <div class="relative group overflow-hidden rounded-xl shadow-lg transition-all hover:shadow-2xl transform hover:scale-105 duration-500 ease-in-out">
                        <img src="{{ asset('assets/images/album/album-' . $item . '.jpeg') }}"
                             alt="Image {{$item}}"
                             class="object-cover w-full h-48 md:h-64 transition-transform duration-300 group-hover:scale-110 cursor-pointer"
                             data-index="{{ $item - 1 }}">
                    </div>
                @endforeach
            </div>

            <!-- Dossier 2 Images -->
            <div id="dossier2" class="dossier hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @foreach (range(32, 71) as $item)
                    <div class="relative group overflow-hidden rounded-xl shadow-lg transition-all hover:shadow-2xl transform hover:scale-105 duration-500 ease-in-out">
                        <img src="{{ asset('assets/images/album/album-dosier-two-' . $item . '.jpeg') }}"
                             alt="Image {{$item}}"
                             class="object-cover w-full h-48 md:h-64 transition-transform duration-300 group-hover:scale-110 cursor-pointer"
                             data-index="{{ $item - 1 }}">
                    </div>
                @endforeach
            </div>

            <!-- Dossier 3 Images (2 Congrès) -->
            <div id="dossier3" class="dossier hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @foreach (range(1, 66) as $item)
                    <div class="relative group overflow-hidden rounded-xl shadow-lg transition-all hover:shadow-2xl transform hover:scale-105 duration-500 ease-in-out">
                        <img src="{{ asset('assets/images/album/album-two/album-' . $item . '.jpeg') }}"
                             alt="Image {{$item}}"
                             class="object-cover w-full h-48 md:h-64 transition-transform duration-300 group-hover:scale-110 cursor-pointer"
                             data-index="{{ $item - 1 }}">
                    </div>
                @endforeach
            </div>

            <!-- Dossier 4 Images (Autre) -->
            <div id="dossier4" class="dossier hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @foreach (range(1, 4) as $item)
                    <div class="relative group overflow-hidden rounded-xl shadow-lg transition-all hover:shadow-2xl transform hover:scale-105 duration-500 ease-in-out">
                        <img src="{{ asset('assets/images/album/autre/autre-' . $item . '.jpeg') }}"
                             alt="Image {{$item}}"
                             class="object-cover w-full h-48 md:h-64 transition-transform duration-300 group-hover:scale-110 cursor-pointer"
                             data-index="{{ $item - 1 }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Modal Popup -->
<div id="modalPopup" class="hidden fixed inset-0 bg-black bg-opacity-80 backdrop-blur-sm flex items-center justify-center z-50 p-4">
    <div class="relative w-full max-w-4xl mx-auto">
        <button id="modalCloseBtn" class="absolute -top-12 right-0 md:top-4 md:right-4 text-white text-3xl hover:text-sky-400 transition-colors focus:outline-none z-50">&times;</button>
        
        <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
            <img id="modalImage" src="" alt="Popup Image" class="w-full h-auto max-h-[70vh] object-contain">
        </div>
        
        <!-- Controls -->
        <div class="flex justify-center mt-4 space-x-4">
            <button id="zoomInButton" class="bg-white text-sky-600 px-4 py-2 rounded-full shadow-lg hover:bg-sky-100 transition-all">
                <i class="fa-solid fa-magnifying-glass-plus"></i>
            </button>
            <button id="zoomOutButton" class="bg-white text-sky-600 px-4 py-2 rounded-full shadow-lg hover:bg-sky-100 transition-all">
                <i class="fa-solid fa-magnifying-glass-minus"></i>
            </button>
        </div>
        
        <!-- Navigation -->
        <button id="prevButton" class="absolute top-1/2 -translate-y-1/2 left-4 text-white text-2xl bg-black/50 rounded-full w-10 h-10 hover:bg-black/75 transition-colors">&lt;</button>
        <button id="nextButton" class="absolute top-1/2 -translate-y-1/2 right-4 text-white text-2xl bg-black/50 rounded-full w-10 h-10 hover:bg-black/75 transition-colors">&gt;</button>
    </div>
</div>

<script src="{{ asset('assets/js/galleries-filter.js') }}"></script>