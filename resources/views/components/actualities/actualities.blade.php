<section class="bg-white py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

            <div class="flex justify-center">
                <img
                    src="{{asset('assets/images/affiche/affiche.jpeg')}}"
                    alt="Actualities Image"
                    class="w-80 md:w-96 shadow-lg rounded-lg"
                />
            </div>

            <div class="text-center md:text-left text-blue-900 space-y-6">
                <h2 class="text-2xl md:text-4xl font-semibold">
                    Inscrivez-vous ! Plus que
                </h2>

                <!-- Countdown Timer -->
                <div id="countdown" class="flex justify-center md:justify-start space-x-4 text-center">
                    <div>
                        <p id="days" class="text-3xl md:text-5xl font-bold">00</p>
                        <p class="text-sm md:text-base">JOURS</p>
                    </div>
                    <div>
                        <p id="hours" class="text-3xl md:text-5xl font-bold">00</p>
                        <p class="text-sm md:text-base">HEURES</p>
                    </div>
                    <div>
                        <p id="minutes" class="text-3xl md:text-5xl font-bold">00</p>
                        <p class="text-sm md:text-base">MINUTES</p>
                    </div>
                    <div>
                        <p id="seconds" class="text-3xl md:text-5xl font-bold">00</p>
                        <p class="text-sm md:text-base">SECONDES</p>
                    </div>
                </div>

                <p class="text-lg md:text-2xl font-medium">
                    Nous séparent du début de notre
                </p>
                <p class="text-lg md:text-3xl font-bold">
                    9 ème Journée Nationale
                </p>

                <!-- Buttons -->
                <div class="flex justify-center md:justify-start space-x-4 mt-6">
                    <button class="bg-blue-700 hover:bg-blue-900 text-white font-medium py-2 px-4 rounded-lg whitespace-nowrap">
                        Inscription
                    </button>
                    <button class="bg-blue-700 hover:bg-blue-900 text-white font-medium py-2 px-4 rounded-lg whitespace-nowrap">
                        Visiter les stands
                    </button>
                    <button class="bg-blue-700 hover:bg-blue-900 text-white font-medium py-2 px-4 rounded-lg whitespace-nowrap">
                        Bureau
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
