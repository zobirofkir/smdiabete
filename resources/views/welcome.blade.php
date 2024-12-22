<x-app-layout>
    @include('components.slider.slider')

    <div class="text-center mt-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 transition-all duration-300 transform hover:text-blue-600 hover:scale-105">
            Actualités
        </h1>
    </div>
    @include('components.actualities.actualities')

    <div class="text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 transition-all duration-300 transform hover:text-blue-600 hover:scale-105">
            À Propos De Nous
        </h1>
    </div>
    @include('components.abouts.abouts')

    <div class="text-center mt-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 transition-all duration-300 transform hover:text-blue-600 hover:scale-105">
            Evénements
        </h1>
    </div>
    @include('components.events.events')

    <div class="text-center mt-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 transition-all duration-300 transform hover:text-blue-600 hover:scale-105">
            Videos
        </h1>
    </div>
    @include('components.videos.videos')

    <div class="text-center mt-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-blue-900 mb-4 transition-all duration-300 transform hover:text-blue-600 hover:scale-105">
            Nos Sponsors
        </h1>
    </div>
    @include('components.sponsors.sponsors')
</x-app-layout>
