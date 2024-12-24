<section class="py-10 mb-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-extrabold text-sky-600 text-center mb-8 uppercase tracking-wider">Gallery</h1>

        <!-- Dossier Switcher -->
        <div class="flex justify-center mb-8">
            <button id="dossier1Button"
                    class="px-6 py-3 bg-sky-600 text-white rounded-l-lg focus:outline-none hover:bg-sky-700 transition-colors shadow-lg hover:shadow-xl">Dossier 1</button>
            <button id="dossier2Button"
                    class="px-6 py-3 bg-sky-200 text-sky-600 rounded-r-lg focus:outline-none hover:bg-sky-300 transition-colors shadow-lg hover:shadow-xl">Dossier 2</button>
        </div>

        <!-- Image Gallery -->
        <div id="imageGallery" class="">
            <!-- Dossier 1 Images -->
            <div id="dossier1" class="dossier grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach (range(1, 31) as $item)
                    <div class="relative group overflow-hidden rounded-xl shadow-lg transition-all hover:shadow-2xl transform hover:scale-105 duration-500 ease-in-out">
                        <img src="{{ asset('assets/images/album/album-' . $item . '.jpeg') }}"
                             alt="Image {{$item}}"
                             class="object-cover w-full h-64 transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-50 transition duration-300"></div>
                    </div>
                @endforeach
            </div>

            <!-- Dossier 2 Images -->
            <div id="dossier2" class="dossier hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach (range(32, 67) as $item)
                    <div class="relative group overflow-hidden rounded-xl shadow-lg transition-all hover:shadow-2xl transform hover:scale-105 duration-500 ease-in-out">
                        <img src="{{ asset('assets/images/album/album-dosier-two-' . $item . '.jpeg') }}"
                             alt="Image {{$item}}"
                             class="object-cover w-full h-64 transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-50 transition duration-300"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dossier1Button = document.getElementById('dossier1Button');
        const dossier2Button = document.getElementById('dossier2Button');
        const dossier1 = document.getElementById('dossier1');
        const dossier2 = document.getElementById('dossier2');

        dossier1Button.addEventListener('click', () => {
            dossier1.classList.remove('hidden');
            dossier1.classList.add('grid');

            dossier2.classList.add('hidden');
            dossier2.classList.remove('grid');

            dossier1Button.classList.add('bg-sky-600', 'text-white');
            dossier1Button.classList.remove('bg-sky-200', 'text-sky-600');

            dossier2Button.classList.add('bg-sky-200', 'text-sky-600');
            dossier2Button.classList.remove('bg-sky-600', 'text-white');
        });

        dossier2Button.addEventListener('click', () => {
            dossier2.classList.remove('hidden');
            dossier2.classList.add('grid');

            dossier1.classList.add('hidden');
            dossier1.classList.remove('grid');

            dossier2Button.classList.add('bg-sky-600', 'text-white');
            dossier2Button.classList.remove('bg-sky-200', 'text-sky-600');

            dossier1Button.classList.add('bg-sky-200', 'text-sky-600');
            dossier1Button.classList.remove('bg-sky-600', 'text-white');
        });
    });
</script>
