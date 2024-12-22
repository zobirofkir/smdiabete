<section>
    <div class="relative w-full h-screen overflow-hidden">
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover" disablePictureInPicture>
            <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>

        <div class="absolute inset-0 bg-sky-500 bg-opacity-10"></div>

        <div class="relative z-10 flex items-center justify-between px-6 h-full container mx-auto">
            <div class="text-white space-y-6 w-full md:w-2/3">
                <h1 class="text-4xl md:text-6xl font-bold text-center">
                    Société Marocaine de Diabétologie
                </h1>
                <p class="text-xl md:text-2xl font-medium text-center">
                    Moroccan Diabetology Society
                </p>
                <p class="text-lg md:text-xl text-center">
                    الجمعية المغربية لأمراض السكري
                </p>
                <p class="text-lg md:text-xl text-center">
                    ⵜⴰⵎⵙⵎⵓⵏⵜ ⵜⴰⵎⵔⵔⵓⴽⵉⵜ ⵏ ⵡⴰⵟⵟⴰⵏ ⵏ ⵙⵙⴽⴻⵕ
                </p>
            </div>

            <div class="w-1/3 flex justify-center md:justify-end md:block hidden">
                <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="max-w-full h-auto">
            </div>
        </div>
    </div>
</section>
