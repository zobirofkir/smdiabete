<section class="bg-white py-24">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">


            <div class="text-center md:text-left text-sky-900 space-y-8">
                <h2 class="text-3xl md:text-5xl font-semibold">
                    Inscrivez-vous ! Plus que
                </h2>

                <!-- Countdown Timer -->
                <div id="countdown" class="flex justify-center md:justify-start space-x-6 text-center">
                    <div>
                        <p id="days" class="text-4xl md:text-6xl font-bold">00</p>
                        <p class="text-base md:text-lg">JOURS</p>
                    </div>
                    <div>
                        <p id="hours" class="text-4xl md:text-6xl font-bold">00</p>
                        <p class="text-base md:text-lg">HEURES</p>
                    </div>
                    <div>
                        <p id="minutes" class="text-4xl md:text-6xl font-bold">00</p>
                        <p class="text-base md:text-lg">MINUTES</p>
                    </div>
                    <div>
                        <p id="seconds" class="text-4xl md:text-6xl font-bold">00</p>
                        <p class="text-base md:text-lg">SECONDES</p>
                    </div>
                </div>

                <p class="text-xl md:text-3xl font-medium">
                    Nous séparent du début de notre
                </p>
                <p class="text-xl md:text-4xl font-bold">
                    9ème Journée Nationale
                </p>

                <!-- Buttons -->
                <div class="flex justify-center md:justify-start space-x-6 mt-8">
                    <button class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 md:px-6 px-4 rounded-lg whitespace-nowrap">
                        Inscription
                    </button>
                    <button class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 md:px-6 px-4 rounded-lg whitespace-nowrap">
                        Visiter les stands
                    </button>
                    <button class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 md:px-6 px-4 rounded-lg whitespace-nowrap">
                        Bureau
                    </button>
                </div>
            </div>

            <div class="flex justify-center max-w-xl">
                <img
                    src="{{asset('assets/images/affiche/affiche.jpeg')}}"
                    alt="Actualities Image"
                    class="w-96 md:w-[600px] shadow-lg rounded-lg"
                />
            </div>

        </div>
    </div>
</section>
