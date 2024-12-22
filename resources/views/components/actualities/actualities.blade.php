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
                    9ème Journée Nationale
                </p>

                <div class="flex flex-wrap justify-center md:justify-start gap-4 mt-8">
                    <button id="openModalActualities" class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 px-6 rounded-lg">
                        Inscription
                    </button>
                    <button class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 px-6 rounded-lg">
                        Visiter les stands
                    </button>
                    <button class="bg-sky-700 hover:bg-sky-900 text-white font-medium py-3 px-6 rounded-lg">
                        Bureau
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Inscription Modal -->
<div id="inscriptionModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center z-50">
    <div class="bg-white p-8 rounded-lg w-11/12 max-w-lg">
        <h2 class="text-3xl font-semibold text-center mb-6">Inscription</h2>

        <!-- Form -->
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-lg font-medium">Nom</label>
                <input type="text" id="name" name="name" class="w-full p-3 border rounded-lg mt-2" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border rounded-lg mt-2" required>
            </div>
            <div class="mb-4">
                <label for="subject" class="block text-lg font-medium">Sujet</label>
                <input type="text" id="subject" name="subject" class="w-full p-3 border rounded-lg mt-2" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-lg font-medium">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full p-3 border rounded-lg mt-2" required>
            </div>
            <div class="flex justify-center gap-4">
                <button type="submit" class="bg-sky-700 hover:bg-sky-900 text-white py-3 px-6 rounded-lg">S'inscrire</button>
                <button type="button" id="closeModal" class="bg-gray-500 hover:bg-gray-700 text-white py-3 px-6 rounded-lg">Fermer</button>
            </div>
        </form>
    </div>
</div>
