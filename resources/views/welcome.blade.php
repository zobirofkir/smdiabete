<x-app-layout>
    @include('components.slider.slider')

    @include('components.actualities.actualities')

    @include('components.abouts.abouts')

    <div class="text-center mt-20">
        <h1 class="text-3xl md:text-4xl font-extrabold text-sky-900 mb-4 transition-all duration-300 transform hover:text-sky-600 hover:scale-105">
            Evénements
        </h1>
    </div>
    @include('components.events.events')

    <div class="text-center mt-20">
        <h1 class="text-3xl md:text-4xl font-extrabold text-sky-900 mb-4 transition-all duration-300 transform hover:text-sky-600 hover:scale-105">
            Videos
        </h1>
    </div>
    @include('components.videos.videos')

    <div class="text-center mt-20">
        <h1 class="text-3xl md:text-4xl font-extrabold text-sky-900 mb-4 transition-all duration-300 transform hover:text-sky-600 hover:scale-105">
            Nos Sponsors
        </h1>
    </div>
    @include('components.sponsors.sponsors')

    <div class="text-center mt-20">
        <h1 class="text-3xl md:text-4xl font-extrabold text-sky-900 mb-4 transition-all duration-300 transform hover:text-sky-600 hover:scale-105">
            Membres du Bureau
        </h1>
    </div>
    @include('components.membres.membres')

</x-app-layout>
