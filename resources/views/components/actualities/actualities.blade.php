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
                    <a href="javascript:void(0)" id="openModal" class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 px-6 rounded-lg">
                        Inscription
                    </a>

                    <a href="{{url('/programme')}}" class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 px-6 rounded-lg">
                        Programme
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Modal -->
<div id="inscriptionModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h3 class="text-xl font-semibold mb-4">Informations d'inscription</h3>
        <p class="text-gray-700 mb-6">
            Veuillez contacter la comité d’organisation sur le numéro WhatsApp suivant :
            <span class="font-bold">+212 7 62 01 12 26</span>
        </p>
        <button id="closeModal" class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-2 px-4 rounded-lg">
            Fermer
        </button>
    </div>
</div>

<script>
    document.getElementById('openModal').addEventListener('click', function () {
        document.getElementById('inscriptionModal').classList.remove('hidden');
    });

    document.getElementById('closeModal').addEventListener('click', function () {
        document.getElementById('inscriptionModal').classList.add('hidden');
    });
</script>


