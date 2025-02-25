<section class="bg-white py-24">
    <div class=" px-8 md:px-16 ">
        <!-- Main Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <div class="flex justify-center items-center">
                <img
                    src="{{asset('assets/images/affiche/affiche.jpeg')}}"
                    alt="Affiche de l'événement"
                    class="w-96 md:w-[600px] shadow-lg rounded-lg"
                />
            </div>

            <!-- Left Section: Text and Countdown -->
            <div class="flex flex-col justify-center items-center md:items-start text-sky-900 space-y-12">
                <!-- Title -->
                <h2 class="text-3xl md:text-5xl font-semibold text-center md:text-left">
                    Inscrivez-vous ! Plus que
                </h2>

                <!-- Countdown Timer -->
                <div id="countdown" class="flex justify-center md:justify-start space-x-6">
                    <div class="text-center">
                        <p id="days" class="text-4xl md:text-6xl font-bold">00</p>
                        <p class="text-base md:text-lg">JOURS</p>
                    </div>
                    <div class="text-center">
                        <p id="hours" class="text-4xl md:text-6xl font-bold">00</p>
                        <p class="text-base md:text-lg">HEURES</p>
                    </div>
                    <div class="text-center">
                        <p id="minutes" class="text-4xl md:text-6xl font-bold">00</p>
                        <p class="text-base md:text-lg">MINUTES</p>
                    </div>
                    <div class="text-center">
                        <p id="seconds" class="text-4xl md:text-6xl font-bold">00</p>
                        <p class="text-base md:text-lg">SECONDES</p>
                    </div>
                </div>

                <!-- Subtitles -->
                <p class="text-xl md:text-3xl font-medium text-center md:text-left">
                    Nous séparent du début de notre
                </p>
                <p class="text-xl md:text-4xl font-bold text-center md:text-left">
                    2ème Congrès National de Diabétologie
                </p>

                <div class="flex flex-wrap justify-center md:justify-start gap-4 mt-8">
                    <a href="#" id="openModal" class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 px-6 rounded-lg">
                        Inscription
                    </a>

                    <a href="{{url('/programme')}}" class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 px-6 rounded-lg">
                        Programme
                    </a>
                </div>

                {{-- Modal --}}
                <div id="popup" class="fixed inset-0 flex items-center justify-center hidden z-[1000]">
                    <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center">
                        <p class="text-gray-800 text-lg">L'inscription est actuellement en attente. Nous vous informerons dès qu'elle sera ouverte.</p>
                        <button id="closeModal" class="mt-4 bg-red-600 hover:bg-red-800 text-white py-2 px-4 rounded-lg">
                            Fermer
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        document.getElementById("openModal").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("popup").classList.remove("hidden");
        });

        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("popup").classList.add("hidden");
        });
    </script>
</section>


